@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Semua Portfolio</h1>

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

<div class="mt-6">
    {{ $portfolios->links() }}
</div>
@endsection
