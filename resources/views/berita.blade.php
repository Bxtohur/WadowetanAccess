<x-layout>
  @foreach ($beritas as $berita)
    @php
      $content = $berita->content;
      $firstParagraph = '';
      if (preg_match('/<p class="text-lg">(.*?)<\/p>/', $content, $matches)) {
          $firstParagraph = $matches[0];
      }
    @endphp
    <x-artikels>
      <x-slot:title>{{ $title = "$berita->title"}}</x-slot:title>
      <x-slot:id>{{ $id = "$berita->id"}}</x-slot:id>
      {!! $firstParagraph !!}
    </x-artikels>
  @endforeach
</x-layout>
