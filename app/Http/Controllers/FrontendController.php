<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use App\Models\PasswordResets;

class FrontendController extends Controller
{
    public function WebDevView(Request $request)
    {
    $ipAddress = $request->ip();
    
    // Check if the IP is local
    if ($ipAddress === '127.0.0.1') {
        $countryCode = 'IN'; // or whatever default you prefer for testing
    } else {
        $countryCode = $this->getCountryCodeFromIP($ipAddress); // Fetch the country code
    }

    return $countryCode === 'IN' 
        ? view('frontend.website-development', compact('countryCode')) 
        : view('frontend.website-development-other', compact('countryCode'));
}
// public function WebDevView(Request $request)
// {
//     $ipAddress = $request->ip();
    
//     // Check if the IP is local or in the predefined list of external IPs
//     $externalIPs = ['203.0.113.5', '198.51.100.10']; // Add more IPs as needed for testing

//     // Check if the request is from a local or specified external IP
//     if ($ipAddress === '127.0.0.1' || in_array($ipAddress, $externalIPs)) {
//         $countryCode = 'OUT'; // Set a specific code for out of India or use an API
//     } else {
//         $countryCode = $this->getCountryCodeFromIP($ipAddress); // Fetch the country code
//     }

//     return $countryCode === 'IN' 
//         ? view('frontend.website-development', compact('countryCode')) 
//         : view('frontend.website-development-other', compact('countryCode'));
// }
    private function getCountryCodeFromIP($ip)
    {
        $response = file_get_contents("http://ip-api.com/json/{$ip}");
        $data = json_decode($response);
        
        \Log::info('Country Code Response:', (array) $data); // Log the full response for debugging

        return $data->countryCode ?? 'US'; // Default to US if not found
    }   
    
    public function userLogin(Request $req)
    {
        // Validate the input
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'The password field is required.',
            'password.min' => 'Password must be at least 6 characters.',
        ]);

        $email = $req->input('email');
        $p = md5($req->input('password'));

        // Fetch user data including the password
        $users = DB::select('
            SELECT u.id, u.name, u.email_id, u.password, p.mobile_no, r.id as role_id, r.name as role_name, u.is_email_verify
            FROM users u
            JOIN profile p ON u.id = p.user_id
            JOIN roles r ON r.id = u.role_id
            WHERE u.email_id = ?
        ', [$email]);

        if (count($users) === 0) {
            // Username (email) not found
            return redirect()->back()->with('error', 'Incorrect username.');
        }

        $user = $users[0]; // Assuming there is only one matching user

        // Check password and email verification
        if ($user->password !== $p) {
            // Password does not match
            return redirect()->back()->with('error', 'Incorrect password.');
        }

        if (!$user->is_email_verify) {
            // Email not verified
            return redirect()->back()->with('error', 'Email not verified.');
        }

        // Set session variables
        Session::put('username', $user->name);
        Session::put('role_name', $user->role_name);
        Session::put('user_id', $user->id);
        Session::put('role_id', $user->role_id);
        Session::put('email', $user->email_id);

        // Redirect based on role_id
        switch ($user->role_id) {
            case 5:
                return redirect('broker/allLoansApplications');
            case 4:
                return redirect('admin/dashboard');
            case 2:
                return redirect('agent/agentDashboard');
            case 3:
                return redirect('partner/partnerDashboard');
            case 1:
                return redirect('/');
            default:
                return redirect('/');
        }
}

    public function activate($user_id, $auth_code)
    {
        $userAuth = DB::table('users')
            ->where('id', $user_id)
            ->where('email_otp', $auth_code)
            ->get();


        $is_active = $userAuth[0]->is_email_verify;

        if ($is_active == 0) {
            $update = DB::table('users')
                ->where('id', $user_id)
                ->update(['is_email_verify' => 1, 'updated_at' => Carbon::now()]);
            $result =  array('status' => 'success', 'message' => "Congratulation! Your account is activated successfully...!!!");
        } else {
            $result =  array('status' => 'failed', 'message' => "Your account is already activated...!");
        }

        return view('frontend/account_activation', compact('result'));
        // print json_encode($result);
    }


    function reset_password_link(Request $request){

        $validator = Validator::make($request->all(), ['email' => 'required',]);

        if (!$validator->passes()) {
            return redirect('forgot')->with('error', 'The Email Address field is empty.');
        } else {
            $user = DB::table('users')
            ->where('email_id', $request->email)
            ->first();
            if($user){

                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                $auth_id = substr(str_shuffle($permitted_chars), 0, 10);
                $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                $expDate = date("Y-m-d H:i:s", $expFormat);

                $email = $request->email;
                $name = $user->name;
                $msg = env('baseURL') . "/reset_password/".$auth_id;
                $temp_id = 2;

                $values = [
                    'email' => $email,
                    'token' => $auth_id,
                    'exp_date' => $expDate,
                    'user_id' => $user->id
                ];

                // die;
                $addExp = PasswordResets::create($values);

                //calling UsersController temail function from FrontendController
                app(UsersController::class)->temail($email, $name, $msg, $temp_id);

                return redirect('forgot')->with('status', 'We sent an email to your registered email-id to help you recover your account. Please login into your email account and click on the link we sent to reset your password');
            }else{
                return redirect('forgot')->with('error', 'Sorry, no user exists on our system with that email');
            }
        }
    }

    
    function reset_password($auth_id){
        $curDate = date("Y-m-d H:i:s");
        $user = DB::table('password_resets')->where('token', $auth_id)->first();
        if ($user) {
            if ($user->exp_date >= $curDate) {
                if ($user->is_verified == 1) {
                    return redirect('forgot')->with('error', 'The link is expired. You have already used this link to reset your password. Please enter Email ID again to generate to reset link.');
                } else {
                    session()->put('email_id', $user->email);
                    session()->put('user_id', $user->user_id);
                    session()->put('auth_id', $auth_id);
                    return view('frontend.reset_password');
                }
            } else {
                return redirect('forgot')->with('error', 'The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).');
            }
        } else {
            return redirect('forgot')->with('error', 'Authentication failed!');
        }

    }

    function update_password(Request $req){

        $validator = Validator::make($req->all(), [
            'password' => 'required',
        ]);

        if (!$validator->passes()) {
            return redirect('reset_password/'.$req->auth_id)->with('error', 'The Password field is empty.');
        } else {
            $first_password = $req->input('password');
            $second_password = $req->input('cpassword');
            $email = $req->input('email');
            $user_id = $req->input('user_id');

            $check = strcmp($first_password, $second_password);
            if ($check == 0) {
                // $pwd = Hash::make($second_password);
                $users = DB::table('users')->where('email_id', $email)->where('id', $user_id)->first();
                if ($users) {
                    DB::table('users')->where('email_id', $email)->where('id', $user_id)->update(['password' => md5($first_password)]);
                    $update = PasswordResets::where('token', $req->auth_id)->update(['is_verified' =>  1]);
                    return redirect('/')->with('status', 'Password updated.');

                }
            } else {
                return redirect('reset_password/'.$req->auth_id)->with('error', 'Password and Confirmed Password do not match');
            }
        }
    }

    

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
