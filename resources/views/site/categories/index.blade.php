@extends('layouts.site')
@section('content')
<div class="flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold mb-4">Categories</h1>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @foreach ($categories as $category)
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-2">
                        <a href="{{ route('categories.show', $category) }}">{{ $category->title }}</a>
                    </h2>
                    <p class="text-gray-700 text-base">{{ $category->excerpt }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
