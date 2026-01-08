<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
  public function handleContactForm(Request $request)
{
    Log::info('Contact form submission started');

    $data = $request->validate([
        'name'         => ['required','string','max:255','regex:/^[A-Za-z\s]+$/'],
        'email'        => 'required|email|max:255',
        'phone_number' => 'required|string|max:15',
        'msg_subject'  => 'required|string|max:255',
        'message'      => 'required|string',
    ]);

    // Insert into database
    $contactId = DB::table('contacts')->insertGetId([
        'name'         => $data['name'],
        'email'        => $data['email'],
        'phone_number' => $data['phone_number'],
        'msg_subject'  => $data['msg_subject'],
        'message'      => $data['message'],
        'created_at'   => now(),
        'updated_at'   => now(),
    ]);

    Log::info('Contact saved successfully', ['contact_id' => $contactId]);

    // Redirect properly
    return redirect('/thankyou');
}
}
