@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Artikel Blog</h1>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach($blogs as $blog)
        <a href="{{ route('blog.show', $blog->slug) }}" class="bg-white p-4 rounded-lg shadow hover:shadow-lg">
            <img src="{{ asset('storage/'.$blog->image) }}" class="w-full rounded-lg mb-3">
            <h3 class="font-bold">{{ $blog->title }}</h3>
            <p class="text-gray-600 text-sm">{{ \Illuminate\Support\Str::limit($blog->content, 100) }}</p>
        </a>
    @endforeach
</div>

<div class="mt-6">
    {{ $blogs->links() }}
</div>
@endsection
