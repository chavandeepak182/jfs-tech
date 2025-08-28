<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
        public function create()
        {
            $services = DB::table('services')->select('id', 'service_name')->get();
            return view('frontend.appointments.create', compact('services'));
            
        }

        public function store(Request $request)
        {
            $request->validate([
                'full_name' => 'required|string|max:255',
                'mobile' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'service_id' => 'required|exists:services,id',
                'appointment_datetime' => 'required|date',
                'message' => 'nullable|string',
            ]);

            DB::table('appointments')->insert([
                'full_name' => $request->full_name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'service_id' => $request->service_id,
                'appointment_datetime' => $request->appointment_datetime,
                'message' => $request->message,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->back()->with('success', 'Appointment booked successfully!');
        }
}
