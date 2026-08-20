<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AppSettingController extends Controller
{
    public function edit(): View
    {
        $setting = AppSetting::first();

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'play_store_url'  => 'nullable|url|max:255',
            'app_store_url'   => 'nullable|url|max:255',
            'whatsapp_cs'     => 'nullable|string|max:50',
            'contact_email'   => 'nullable|email|max:255',
            'screenshots.*'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        $setting = AppSetting::first();

        if (! $setting) {
            $setting = new AppSetting();
        }

        $setting->fill([
            'play_store_url' => $validated['play_store_url'] ?? null,
            'app_store_url'  => $validated['app_store_url'] ?? null,
            'whatsapp_cs'    => $validated['whatsapp_cs'] ?? null,
            'contact_email'  => $validated['contact_email'] ?? null,
        ]);

        // Handle new screenshot uploads
        if ($request->hasFile('screenshots')) {
            $existing = $setting->app_screenshots ?? [];

            foreach ($request->file('screenshots') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/screenshots'), $filename);
                $existing[] = 'uploads/screenshots/' . $filename;
            }

            $setting->app_screenshots = $existing;
        }

        $setting->save();

        return redirect()->route('admin.settings.edit')->with('success', 'Pengaturan aplikasi berhasil diperbarui.');
    }

    public function deleteScreenshot(Request $request): RedirectResponse
    {
        $request->validate([
            'path' => 'required|string',
        ]);

        $setting = AppSetting::first();

        if (! $setting) {
            return redirect()->route('admin.settings.edit');
        }

        $screenshots = $setting->app_screenshots ?? [];
        $targetPath  = $request->input('path');

        // Remove the file from public folder
        $absolutePath = public_path($targetPath);
        if (file_exists($absolutePath) && is_file($absolutePath)) {
            unlink($absolutePath);
        }

        // Remove from array and re-index
        $setting->app_screenshots = array_values(
            array_filter($screenshots, fn ($p) => $p !== $targetPath)
        );

        $setting->save();

        return redirect()->route('admin.settings.edit')->with('success', 'Screenshot berhasil dihapus.');
    }
}
