@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Hubungi Saya</h1>

@if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="block">Nama</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2">
        @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2">
        @error('email') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block">Pesan</label>
        <textarea name="message" rows="5" class="w-full border rounded p-2">{{ old('message') }}</textarea>
        @error('message') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Kirim Pesan
    </button>
</form>
@endsection
