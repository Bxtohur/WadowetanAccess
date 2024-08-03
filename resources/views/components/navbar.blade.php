<nav id="navbar" class="fixed top-0 left-0 w-full bg-white z-50 transition duration-300 ease-in-out">
  <div class="container mx-auto text-center py-4">
    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto mb-3 w-24 h-24"></a>
    <h1 class="text-4xl font-bold mb-3">Desa Wadowetan</h1>
    <p class="text-xl">Kecamatan Bantarujeg</p>
    <ul id="nav-list" class="flex justify-center space-x-4 mt-4 bg-inherit">
      <li>
        <a href="/profil" class="text-xl {{ request()->is('profil') ? 'bg-[#048BD8] text-white rounded px-4 py-1 font-semibold' : 'text-[#048BD8] hover:font-bold' }}">Profil</a>
      </li>
      <li>
        <a href="/potensi" class="text-xl {{ request()->is('potensi') ? 'bg-[#048BD8] text-white rounded px-4 py-1 font-semibold' : 'text-[#048BD8] hover:font-bold' }}">Potensi</a>
      </li>
      <li>
        <a href="/produk" class="text-xl {{ request()->is('produk') ? 'bg-[#048BD8] text-white rounded px-4 py-1 font-semibold' : 'text-[#048BD8] hover:font-bold' }}">Produk</a>
      </li>
      <li>
        <a href="/berita" class="text-xl {{ request()->is('berita') ? 'bg-[#048BD8] text-white rounded px-4 py-1 font-semibold' : 'text-[#048BD8] hover:font-bold' }}">Berita</a>
      </li>
    </ul>
  </div>
</nav>
