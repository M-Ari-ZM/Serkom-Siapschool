<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $features = Feature::latest()->get();

        return view('admin.features.index', compact('features'));
    }

    public function create(): \Illuminate\View\View
    {
        return view('admin.features.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'icon'        => 'nullable|string|max:1000',
        ]);

        Feature::create($validated);

        return redirect()->route('admin.features.index')->with('success', 'Fitur berhasil ditambahkan.');
    }

    public function edit(Feature $feature): \Illuminate\View\View
    {
        return view('admin.features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'icon'        => 'nullable|string|max:1000',
        ]);

        $feature->update($validated);

        return redirect()->route('admin.features.index')->with('success', 'Fitur berhasil diperbarui.');
    }

    public function destroy(Feature $feature): \Illuminate\Http\RedirectResponse
    {
        $feature->delete();

        return redirect()->route('admin.features.index')->with('success', 'Fitur berhasil dihapus.');
    }
}
