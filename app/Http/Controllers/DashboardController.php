<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function index(): View
    {
        $leads = Lead::latest()->get();

        return view('dashboard', compact('leads'));
    }

     public function destroy(Lead $lead): RedirectResponse
    {
        $lead->delete();
        return redirect()->route('dashboard')->with('success', 'Data pendaftar demo berhasil dihapus.');
    }
}
