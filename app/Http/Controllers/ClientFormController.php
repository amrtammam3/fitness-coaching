<?php

namespace App\Http\Controllers;

use App\Models\ClientForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewClientFormNotification;
use Illuminate\Support\Str;

class ClientFormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validateData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:client_forms',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required',
            'age' => 'required|integer',
            'height' => 'required|numeric',
            'current_weight' => 'required|numeric',
            'country' => 'required|string',
            'calorie_intake' => 'nullable|string',
            'medical_conditions' => 'nullable|string',
            'dietary_restrictions' => 'nullable|string',
            'fitness_goals' => 'nullable|string',
            'meals_per_day' => 'nullable|integer',
            'exercise_days' => 'nullable|integer',
            'exercise_types' => 'nullable|string',
            'event_preparation' => 'nullable|string',
            'occupation' => 'nullable|string',
            'sitting_hours' => 'nullable|integer',
            'comments' => 'nullable|string',
            'water_intake' => 'nullable|integer',
            'sleep_hours' => 'nullable|integer',
            'motivation' => 'nullable|string',
            'workout_preference' => 'nullable|string',
            'gym_equipment' => 'nullable|string',
            'challenges' => 'nullable|string',
            'disliked_exercises' => 'nullable|string',
            'busy_schedule' => 'nullable|string',
            'expectations' => 'nullable|string',
            'body_focus' => 'nullable|string',
            'additional_info' => 'nullable|string',
        ]);

        // dd($validateData);

        // Hash the password before storing it in the database
        // $validateData['password'] = Hash::make($validateData['password']);

        // Create a new client form entry in the database
         ClientForm::create($validateData);

        //  dd('Redirecting to client-dashboard');

        // Optionally, send an email notification to the coach (admin)
        // Mail::to('coach@example.com')->send(new NewClientFormNotification($clientForm));

        // Redirect to the intended route after successful form submission
        return redirect()->route('client.dashboard')->with('success', 'Client form submitted successfully.');
    }
}
