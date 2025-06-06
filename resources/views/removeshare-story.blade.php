@extends('layouts.app')

@section('title', 'Share Your Story')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-6">Share Your Story</h1>
    <form action="/share-story" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Your Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="story" class="block text-gray-700">Your Story</label>
            <textarea name="story" id="story" rows="5" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required></textarea>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md">Submit</button>
    </form>
    @if(session('success'))
        <div class="mt-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
