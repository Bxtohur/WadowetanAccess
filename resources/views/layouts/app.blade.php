<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      tinymce.init({
        selector: 'textarea',
        plugins: 'link image code',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code',
        setup: function(editor) {
          editor.on('NodeChange', function() {
            editor.getBody().querySelectorAll('h1').forEach(function(h1) {
              h1.classList.add('text-xl', 'py-2', 'font-bold');
            });
            editor.getBody().querySelectorAll('p').forEach(function(p) {
              p.classList.add('text-lg');
            });
            editor.save(); // Save the content
          });
        }
      });
    });
  </script>
  <style>
    h1 {
      font-size: 32px;
    }

    .sidebar {
      background-color: #048BD8;
    }

    .sidebar a {
      color: white;
      display: block;
      padding: 10px;
      text-decoration: none;
      font-weight: bold;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #0367A6;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row">
    <nav id="sidebar" class="sidebar w-full md:w-64 h-auto md:h-screen fixed md:relative top-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
      <a href="{{ route('admin.index') }}" class="{{ Route::is('admin.index') ? 'active' : '' }}">Dashboard</a>
      <a href="{{ route('admin.potensi.index') }}" class="{{ Route::is('admin.potensi.index') ? 'active' : '' }}">Potensi</a>
      <a href="{{ route('admin.berita.index') }}" class="{{ Route::is('admin.berita.index') ? 'active' : '' }}">Berita</a>
      <a href="{{ route('admin.produk.index') }}" class="{{ Route::is('admin.produk.index') ? 'active' : '' }}">Produk</a>
    </nav>
    <div class="w-full md:hidden flex justify-between items-center bg-[#0367A6] p-4 text-white">
      <h1 class="text-xl">Admin Dashboard</h1>
      <button id="menu-button" class="focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="main-content w-full p-4">
      @yield('content')
    </div>
  </div>
  <script>
    document.getElementById('menu-button').addEventListener('click', function () {
      const sidebar = document.getElementById('sidebar');
      if (sidebar.classList.contains('-translate-x-full')) {
        sidebar.classList.remove('-translate-x-full');
      } else {
        sidebar.classList.add('-translate-x-full');
      }
    });
  </script>
</body>

</html>
