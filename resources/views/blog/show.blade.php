@extends('layouts.app')

@section('content')
<a href="{{ route('blog.index') }}" class="text-blue-600">&larr; Kembali</a>

<div class="mt-6 bg-white p-6 rounded-lg shadow">
    <img src="{{ asset('storage/'.$blog->image) }}" class="w-full rounded-lg mb-4">
    <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>
    <div class="text-gray-700">
        {!! nl2br(e($blog->content)) !!}
    </div>
</div>
@endsection
