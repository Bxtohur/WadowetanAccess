<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }

    public function show($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('artikel', compact('beritas'));
    }

    public function indexViewer()
    {
        $beritas = Berita::all();
        $title = $beritas->isNotEmpty() ? $beritas->first()->title : 'Default Title';
        $id = $beritas->isNotEmpty() ? $beritas->first()->id : 'Default id';
        return view('berita', ['beritas' => $beritas, 'title' => $title, 'id' => $id]);
    }

    // Show form to create new berita
    public function create()
    {
        return view('berita.create');
    }

    // Store new berita
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

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita created successfully.');
    }

    // Show form to edit existing berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    // Update existing berita
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($berita->image) {
                Storage::delete('public/' . $berita->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita updated successfully.');
    }

    // Delete existing berita
    public function destroy(Berita $berita)
    {
        // Delete image if exists
        if ($berita->image) {
            Storage::delete('public/' . $berita->image);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita deleted successfully.');
    }
}
