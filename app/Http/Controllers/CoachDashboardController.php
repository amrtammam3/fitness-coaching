<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientForm;

class CoachDashboardController extends Controller
{
    public function index()
    {
        // Fetch client forms for the coach
        $clientForms = ClientForm::all(); // You can filter by specific coach if needed

        return view('coach.dashboard', compact('clientForms'));
    }
}
