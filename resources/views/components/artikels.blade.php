@php
  $baseRoute = '';
  if (request()->is('potensi*')) {
      $baseRoute = 'potensi';
  } elseif (request()->is('produk*')) {
      $baseRoute = 'produk';
  } elseif (request()->is('berita*')) {
      $baseRoute = 'berita';
  } else {
      $baseRoute = 'artikel';
  }
@endphp

<div class="bg-white p-6 rounded-lg shadow-md border-b border-gray-300 mb-4">
  <h2 class="text-2xl font-bold">
    {{ $title }}
  </h2>
  <div class="text-gray-700 line-clamp-2 text-ellipsis text-justify">
    {{ $slot }}
  </div>
  <a href="/{{ $baseRoute }}/{{ $id }}" class="text-blue-500 hover:text-blue-700 font-semibold">
    Lihat Lebih Lanjut >>
  </a>
</div>
