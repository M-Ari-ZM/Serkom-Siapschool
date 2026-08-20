<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Faq;
use App\Models\AppSetting;
use App\Models\Lead;

class LandingController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $features = Feature::all();
        $faqs = Faq::all();
        $setting = AppSetting::first() ?? new AppSetting();
        $screenshots = $setting->app_screenshots ?? [];

        return view('landing', compact('features', 'faqs', 'setting', 'screenshots'));
    }

    public function about(): \Illuminate\View\View
    {
        $setting = AppSetting::first() ?? new AppSetting();

        return view('about', compact('setting'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'school_name' => 'required|string|max:255',
            'phone_email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        Lead::create($validatedData);

        return redirect()->back()->with('success', 'Terima kasih! Permintaan demo Anda telah kami terima. Tim kami akan segera menghubungi Anda.');
    }

    public function about_dev(): \Illuminate\View\View
    {
        $setting = AppSetting::first() ?? new AppSetting();

        return view('about_dev', compact('setting'));
    }
}