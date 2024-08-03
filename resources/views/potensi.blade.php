<x-layout>
  @foreach ($potensis as $potensi)
    @php
      $content = $potensi->content;
      $firstParagraph = '';
      if (preg_match('/<p>(.*?)<\/p>/', $content, $matches)) {
          $firstParagraph = $matches[0];
      }
    @endphp
    <x-artikels>
      <x-slot:title>{{ $title = "$potensi->title" }}</x-slot:title>
      {!! $firstParagraph !!}
    </x-artikels>
  @endforeach
</x-layout>
