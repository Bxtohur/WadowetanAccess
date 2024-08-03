<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: 'textarea',
                plugins: 'link image code',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code',
                setup: function (editor) {
                    editor.on('change', function () {
                        tinymce.triggerSave();
                    });
                }
            });
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container mx-auto px-4">
        <nav class="p-4" style="background-color: #048BD8;">
            <div class="flex justify-between">
                <div class="text-white">
                    <a href="{{ route('admin.potensi.index') }}" class="mr-4">Potensi</a>
                    <a href="{{ route('admin.berita.index') }}" class="mr-4">Berita</a>
                    <a href="{{ route('admin.produk.index') }}">Produk</a>
                </div>
            </div>
        </nav>
        <div class="mt-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
