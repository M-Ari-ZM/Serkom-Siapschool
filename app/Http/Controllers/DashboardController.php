<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $leads = Lead::latest()->get();

        return view('dashboard', compact('leads'));
    }
}
