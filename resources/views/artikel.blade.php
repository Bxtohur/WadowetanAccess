<x-layout>
    <div class="w-full mx-auto bg-white p-4 rounded-lg shadow-lg">
        @if(isset($potensis))
            <img src="{{ asset('storage/' . $potensis->image) }}" alt="{{ $potensis->title }}" class="w-full h-96 object-cover rounded-lg mb-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $potensis->title }}</h1>
            <div class="prose lg:prose-xl">
                {!! $potensis->content !!}
            </div>
        @elseif(isset($produks))
            <img src="{{ asset('storage/' . $produks->image) }}" alt="{{ $produks->title }}" class="w-full h-96 object-cover rounded-lg mb-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $produks->title }}</h1>
            <div class="prose lg:prose-xl">
                {!! $produks->content !!}
            </div>
            <h3>Whatsapp: <a href="https://wa.me/{{ $produks->noWhatsapp }}">{{ $produks->noWhatsapp }}</a></h3>
        @elseif(isset($berita))
            <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="w-full h-96 object-cover rounded-lg mb-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $berita->title }}</h1>
            <div class="prose lg:prose-xl">
                {!! $berita->content !!}
            </div>
        @else
            <p>No data available.</p>
        @endif
    </div>
</x-layout>
