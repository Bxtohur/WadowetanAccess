<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    public function show($id)
    {
        $produks = Produk::findOrFail($id);
        return view('artikel', compact('produks'));
    }



    public function indexViewer()
    {
        $produks = Produk::all();
        $title = $produks->isNotEmpty() ? $produks->first()->title : 'Default Title';
        $id = $produks->isNotEmpty() ? $produks->first()->id : 'Default id';
        return view('produk', ['produks' => $produks, 'title' => $title, 'id' => $id]);
    }

    // Show form to create new produk
    public function create()
    {
        return view('produk.create');
    }

    // Store new produk
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

        Produk::create($data);

        return redirect()->route('admin.produk.index')->with('success', 'produk created successfully.');
    }

    // Show form to edit existing produk
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    // Update existing produk
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($produk->image) {
                Storage::delete('public/' . $produk->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $produk->update($data);

        return redirect()->route('admin.produk.index')->with('success', 'produk updated successfully.');
    }

    // Delete existing produk
    public function destroy(Produk $produk)
    {
        // Delete image if exists
        if ($produk->image) {
            Storage::delete('public/' . $produk->image);
        }

        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'produk deleted successfully.');
    }
}
