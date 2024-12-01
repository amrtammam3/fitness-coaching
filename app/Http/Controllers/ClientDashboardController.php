<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\ClientForm;

class ClientDashboardController extends Controller
{
    public function index()
    {
        // Retrieve the authenticated client's form data
        $clientForm = ClientForm::where('email', Auth::user()->email)->first();

        // Pass the data to the view
        return view('client.dashboard', compact('clientForm'));
    }
}
