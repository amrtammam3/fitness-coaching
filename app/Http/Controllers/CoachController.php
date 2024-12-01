<?php

namespace App\Http\Controllers;
use App\Models\ClientForm;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $clientForms = ClientForm::all(); // Or filter based on needs
        return view('admin.coach_dashboard', compact('clientForms'));
    }

}
