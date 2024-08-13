<x-layout>
  <section class="mb-16">
    <div class="carousel relative">
      <div><img src="{{ asset('images/carousel1.jpg') }}" alt="Image 1" class="w-full max-h-[500px] rounded-lg object-cover"></div>
      <div><img src="{{ asset('images/carousel2.jpg') }}" alt="Image 2" class="w-full max-h-[500px] rounded-lg object-cover"></div>
      <div><img src="{{ asset('images/carousel3.jpg') }}" alt="Image 3" class="w-full max-h-[500px] rounded-lg object-cover"></div>
    </div>
  </section>

  <!-- Profil Section -->
  <section class="mb-16">
    <h2 class="text-4xl font-bold mb-6 text-center">Selayang Pandang</h2>
    <div class="block p-4 bg-white rounded-lg shadow-lg border border-gray-500">
      <p class="text-lg leading-relaxed text-justify">
        Desa Wadowetan berdiri pada tanggal 1 Juli 1980 sebagai pemekaran dari Desa Bantarujeg bersama dengan Desa
        Babakansari. Pada awal pembentukan, Desa Wadowetan terdiri dari dua kampung yaitu Wado dan Cipari. Kampung Wado
        yang sekarang lebih dikenal dengan sebutan Wadowetan memiliki latar belakang unik karena perbedaan nama dengan
        Wado di daerah Sumedang yang terletak di sebelah barat Bantarujeg. Pada tahun 1928-an, terjadi longsor di bagian
        selatan kampung Wado lama, sehingga sebagian warga pindah ke sebelah utara dan menempati tanah Desa atau milik
        pribadi. Setelah berdirinya, Desa Wadowetan mengalami perkembangan yang signifikan. Pada tahun 2014, KB
        Al-Wardah
        didirikan di Blok Desa Wadowetan, RT 011 RW 004, sebagai salah satu fasilitas pendidikan di desa tersebut. Desa
        Wadowetan juga memiliki sejarah yang kaya dengan mitos dan legenda, seperti Gunung Sireum yang diyakini memiliki
        kekuatan spiritual dan sejarah yang luar biasa
      </p>
    </div>
  </section>

  <!-- Produk Section -->
  <section class="mb-16 text-center">
    <h2 class="text-4xl font-bold mb-6 opacity-0 transform translate-y-10 transition duration-500">Jalan Pintas</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <a href="/profil"
        class="block p-4 bg-white rounded-lg shadow-lg border border-gray-500 transform transition duration-300 hover:scale-105 hover:bg-gray-100 opacity-0 translate-y-4">
        <i class="fas fa-user-alt mb-2 text-2xl text-blue-500"></i>
        <p class="text-lg font-medium text-gray-700">Profil</p>
      </a>
      <a href="/potensi"
        class="block p-4 bg-white rounded-lg shadow-lg border border-gray-500 transform transition duration-300 hover:scale-105 hover:bg-gray-100 opacity-0 translate-y-4">
        <i class="fas fa-chart-line mb-2 text-2xl text-green-500"></i>
        <p class="text-lg font-medium text-gray-700">Potensi</p>
      </a>
      <a href="/produk"
        class="block p-4 bg-white rounded-lg shadow-lg border border-gray-500 transform transition duration-300 hover:scale-105 hover:bg-gray-100 opacity-0 translate-y-4">
        <i class="fas fa-box mb-2 text-2xl text-yellow-500"></i>
        <p class="text-lg font-medium text-gray-700">Produk</p>
      </a>
      <a href="/berita"
        class="block p-4 bg-white rounded-lg shadow-lg border border-gray-500 transform transition duration-300 hover:scale-105 hover:bg-gray-100 opacity-0 translate-y-4">
        <i class="fas fa-newspaper mb-2 text-2xl text-red-500"></i>
        <p class="text-lg font-medium text-gray-700">Berita</p>
      </a>
    </div>
  </section>



  <!-- Potensi Section -->
  <section class="mb-16">
    <h2 class="text-4xl font-bold text-center mb-6 opacity-0 transform translate-y-10 transition duration-500">Peta
      Mitigasi Desa
      Wado Wetan</h2>
    <h3 class="text-2xl font-semibold leading-relaxed">
      <img src="{{ asset('images/petaAdministrasi.png') }}" alt="Peta Administrasi"
        class="mb-4 opacity-0 transform translate-y-10 transition duration-500">
      <img src="{{ asset('images/petaTutupanLahan.png') }}" alt="Peta Tututpan Lahan"
        class="mb-4 opacity-0 transform translate-y-10 transition duration-500">
      <img src="{{ asset('images/petaRawanLongsor.png') }}" alt="Peta Rawan Longsor"
        class="mb-4 opacity-0 transform translate-y-10 transition duration-500">
    </h3>
  </section>

</x-layout>
