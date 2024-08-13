<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PotensiController extends Controller
{
    // List all potensi
    public function index()
    {
        $potensis = Potensi::all();
        return view('potensi.index', compact('potensis'));
    }
   
    public function show($id)
    {
        $potensis = Potensi::findOrFail($id);
        return view('artikel', compact('potensis'));
    }



    public function indexViewer()
    {
        $potensis = Potensi::all();
        $title = $potensis->isNotEmpty() ? $potensis->first()->title : 'Default Title';
        $id = $potensis->isNotEmpty() ? $potensis->first()->id : 'Default id';
        return view('potensi', ['potensis' => $potensis, 'title' => $title, 'id' => $id]);
    }

    // Show form to create new potensi
    public function create()
    {
        return view('potensi.create');
    }

    // Store new potensi
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        Potensi::create($data);

        return redirect()->route('admin.potensi.index')->with('success', 'Potensi created successfully.');
    }

    // Show form to edit existing potensi
    public function edit($id)
    {
        $potensi = Potensi::findOrFail($id);
        return view('potensi.edit', compact('potensi'));
    }

    // Update existing potensi
    public function update(Request $request, Potensi $potensi)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($potensi->image) {
                Storage::delete('public/' . $potensi->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $potensi->update($data);

        return redirect()->route('admin.potensi.index')->with('success', 'Potensi updated successfully.');
    }

    // Delete existing potensi
    public function destroy(Potensi $potensi)
    {
        // Delete image if exists
        if ($potensi->image) {
            Storage::delete('public/' . $potensi->image);
        }

        $potensi->delete();

        return redirect()->route('admin.potensi.index')->with('success', 'Potensi deleted successfully.');
    }
}
