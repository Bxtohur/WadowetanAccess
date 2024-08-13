@extends('layouts.app')

@section('content')
<h1 class="container mx-auto text-4xl font-bold mb-6 text-center text-gray-800">Admin Dashboard</h1>
<div class="container mx-auto">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 w-full">
        <div class="bg-gradient-to-r from-blue-500 to-teal-500 shadow-lg rounded-lg p-6 text-white">
            <h2 class="text-2xl font-semibold">Potensi</h2>
            <p class="text-3xl font-bold">{{ $potensiCount }}</p>
        </div>
        <div class="bg-gradient-to-r from-purple-500 to-pink-500 shadow-lg rounded-lg p-6 text-white">
            <h2 class="text-2xl font-semibold">Berita</h2>
            <p class="text-3xl font-bold">{{ $beritaCount }}</p>
        </div>
        <div class="bg-gradient-to-r from-yellow-500 to-red-500 shadow-lg rounded-lg p-6 text-white">
            <h2 class="text-2xl font-semibold">Produk</h2>
            <p class="text-3xl font-bold">{{ $produkCount }}</p>
        </div>
    </div>
</div>

<h2 class="container mx-auto text-xl mt-8">Grafik Statistik Upload</h2>
<div class="container mx-auto w-full justify-center">
    <div class="mt-8 flex flex-col md:flex-row gap-8">
        <div class="flex-1 p-4 bg-white shadow-lg rounded-lg">
            <canvas id="potensiChart"></canvas>
        </div>
        <div class="flex-1 p-4 bg-white shadow-lg rounded-lg">
            <canvas id="beritaChart"></canvas>
        </div>
        <div class="flex-1 p-4 bg-white shadow-lg rounded-lg">
            <canvas id="produkChart"></canvas>
        </div>
    </div>
</div>

<script>
    // Data for Potensi Chart
    var potensiLabels = @json($recentPotensis->pluck('created_at')->map(function($date) { return $date->format('Y-m-d'); }));
    var potensiData = @json($recentPotensis->pluck('id'));

    // Data for Berita Chart
    var beritaLabels = @json($recentBeritas->pluck('created_at')->map(function($date) { return $date->format('Y-m-d'); }));
    var beritaData = @json($recentBeritas->pluck('id'));

    // Data for Produk Chart
    var produkLabels = @json($recentProduks->pluck('created_at')->map(function($date) { return $date->format('Y-m-d'); }));
    var produkData = @json($recentProduks->pluck('id'));

    // Potensi Chart
    var potensiCtx = document.getElementById('potensiChart').getContext('2d');
    var potensiChart = new Chart(potensiCtx, {
        type: 'line',
        data: {
            labels: potensiLabels,
            datasets: [{
                label: 'Potensi',
                data: potensiData,
                backgroundColor: 'rgba(75, 192, 192, 0.4)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#333',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            },
            scales: {
                x: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: '#333'
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: '#333'
                    }
                }
            }
        }
    });

    // Berita Chart
    var beritaCtx = document.getElementById('beritaChart').getContext('2d');
    var beritaChart = new Chart(beritaCtx, {
        type: 'line',
        data: {
            labels: beritaLabels,
            datasets: [{
                label: 'Berita',
                data: beritaData,
                backgroundColor: 'rgba(153, 102, 255, 0.4)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(153, 102, 255, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#333',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            },
            scales: {
                x: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: '#333'
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: '#333'
                    }
                }
            }
        }
    });

    // Produk Chart
    var produkCtx = document.getElementById('produkChart').getContext('2d');
    var produkChart = new Chart(produkCtx, {
        type: 'line',
        data: {
            labels: produkLabels,
            datasets: [{
                label: 'Produk',
                data: produkData,
                backgroundColor: 'rgba(255, 159, 64, 0.4)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(255, 159, 64, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#333',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            },
            scales: {
                x: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: '#333'
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: '#333'
                    }
                }
            }
        }
    });
</script>
@endsection
