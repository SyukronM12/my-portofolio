@extends('layouts.app')

@section('content')
    <section class="text-center mb-10">
        <h1 class="text-3xl font-bold mb-4">Halo, Saya {{ $profile->name }}</h1>
        <p class="text-gray-600">{{ $profile->description }}</p>
    </section>

    {{-- Portfolio Section --}}
    <section class="mb-10">
        <h2 class="text-2xl font-semibold mb-4">Portofolio Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($portfolios as $portfolio)
                <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="bg-white rounded-lg shadow hover:shadow-lg">
                    <img src="{{ asset('storage/'.$portfolio->image) }}" class="rounded-t-lg" alt="">
                    <div class="p-4">
                        <h3 class="font-bold">{{ $portfolio->title }}</h3>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    {{-- Blog Section --}}
    <section>
        <h2 class="text-2xl font-semibold mb-4">Artikel Terbaru</h2>
        <div class="space-y-4">
            @foreach($blogs as $blog)
                <a href="{{ route('blog.show', $blog->slug) }}" class="block bg-white p-4 rounded-lg shadow hover:shadow-lg">
                    <h3 class="font-bold">{{ $blog->title }}</h3>
                    <p class="text-gray-600 text-sm">{{ \Illuminate\Support\Str::limit($blog->content, 100) }}</p>
                </a>
            @endforeach
        </div>
    </section>
@endsection
