<x-layout>
  @foreach ($produks as $produk)
    @php
      $content = $produk->content;
      $firstParagraph = '';
      if (preg_match('/<p class="text-lg">(.*?)<\/p>/', $content, $matches)) {
          $firstParagraph = $matches[0];
      }
    @endphp
    <x-artikels>
      <x-slot:title>{{ $title = "$produk->title"}}</x-slot:title>
      <x-slot:id>{{ $id = "$produk->id"}}</x-slot:id>
      {!! $firstParagraph !!}
    </x-artikels>
  @endforeach
</x-layout>
