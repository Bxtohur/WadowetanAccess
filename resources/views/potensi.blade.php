<x-layout>
  @foreach ($potensis as $potensi)
    @php
      $content = $potensi->content;
      $firstParagraph = '';
      if (preg_match('/<p class="text-lg">(.*?)<\/p>/', $content, $matches)) {
          $firstParagraph = $matches[0];
      }
    @endphp
    <x-artikels>
      <x-slot:title>{{ $title = "$potensi->title"}}</x-slot:title>
      <x-slot:id>{{ $id = "$potensi->id"}}</x-slot:id>
      {!! $firstParagraph !!}
    </x-artikels>
  @endforeach
</x-layout>
