@extends('layouts.app')

@section('content')
    <a href="{{ route('portfolio.index') }}" class="text-blue-600">&larr; Kembali</a>

    <div class="mt-6 bg-white p-6 rounded-lg shadow">
        <img src="{{ asset('storage/'.$portfolio->image) }}" class="w-full rounded-lg mb-4">
        <h1 class="text-3xl font-bold mb-4">{{ $portfolio->title }}</h1>
        <p class="text-gray-700 mb-4">{{ $portfolio->description }}</p>
        @if($portfolio->link)
            <a href="{{ $portfolio->link }}" target="_blank" class="text-blue-600 underline">Lihat Project</a>
        @endif
    </div>
@endsection
