<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use App\Models\Berita;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch count of all items
        $potensiCount = Potensi::count();
        $beritaCount = Berita::count();
        $produkCount = Produk::count();

        // Fetch recent items for the chart
        $recentPotensis = Potensi::orderBy('created_at', 'desc')->take(10)->get();
        $recentBeritas = Berita::orderBy('created_at', 'desc')->take(10)->get();
        $recentProduks = Produk::orderBy('created_at', 'desc')->take(10)->get();

        return view('admin', compact('potensiCount', 'beritaCount', 'produkCount', 'recentPotensis', 'recentBeritas', 'recentProduks'));
    }
}
