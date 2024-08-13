@extends('layouts.app')

@section('content')
  <form action="{{ isset($berita) ? route('admin.berita.update', $berita->id) : route('admin.berita.store') }}" method="POST"
    enctype="multipart/form-data" class="text-lg">
    @csrf
    @if (isset($berita))
      @method('PUT')
    @endif

    <div>
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" class="w-full mb-4 border p-2 " value="{{ $berita->title ?? '' }}" required>
    </div>
    <div class="mb-4">
      <label for="content">Content:</label>
      <textarea name="content" id="content" required>{{ $berita->content ?? '' }}</textarea>
    </div>
    <div class="mb-4">
      <label for="image" class="block">Image:</label>
      <input type="file" name="image" id="image" class="hidden">
      <button type="button" id="choose-file-btn" class="bg-[#048BD8] text-white rounded-lg px-4 py-2 flex items-center">
        <i class="fas fa-upload mr-2"></i> Choose Image
      </button>
      @if (isset($berita) && $berita->image)
        <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="w-24 h-24 object-cover mt-4">
      @elseif (isset($berita))
        <span>No image</span>
      @endif
    </div>
    <div>
      <button type="submit" class="bg-[#048BD8] rounded-lg px-4 py-2 text-white font-semibold mt-8">
        {{ isset($berita) ? 'Update' : 'Create' }}
      </button>
    </div>
  </form>

  <script>
    document.getElementById('choose-file-btn').addEventListener('click', function() {
      document.getElementById('image').click();
    });
  </script>
@endsection
