@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold pb-4">Potensi List</h1>

<a href="{{ route('admin.potensi.create') }}" class="bg-[#048BD8] rounded-lg px-4 py-2 text-white font-semibold mb-4 inline-block">
    <i class="fas fa-plus"></i> Create Potensi
</a>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 sm:px-6 sm:py-3 border-b border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Title</th>
                <th class="px-4 py-2 sm:px-6 sm:py-3 border-b border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Content</th>
                <th class="px-4 py-2 sm:px-6 sm:py-3 border-b border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Image</th>
                <th class="px-4 py-2 sm:px-6 sm:py-3 border-b border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($potensis as $potensi)
            <tr>
                <td class="px-4 py-2 sm:px-6 sm:py-4 border-b border-gray-300">{{ $potensi->title }}</td>
                <td class="px-4 py-2 sm:px-6 sm:py-4 border-b border-gray-300">{{ $potensi->content }}</td>
                <td class="px-4 py-2 sm:px-6 sm:py-4 border-b border-gray-300">
                    @if($potensi->image)
                        <img src="{{ asset('storage/' . $potensi->image) }}" alt="{{ $potensi->title }}" class="w-24 h-24 object-cover">
                    @else
                        <span>No image</span>
                    @endif
                </td>
                <td class="px-4 py-2 sm:px-6 sm:py-4 border-b border-gray-300">
                    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2">
                        <a href="{{ route('admin.potensi.edit', $potensi->id) }}" class="bg-yellow-500 rounded-lg px-4 py-2 text-white flex items-center">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </a>
                        <form action="{{ route('admin.potensi.destroy', $potensi->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 rounded-lg px-4 py-2 text-white flex items-center">
                                <i class="fas fa-trash-alt mr-1"></i> Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
