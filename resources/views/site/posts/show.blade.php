@extends('layouts.site')
@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$post->category->title}}</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">
                    {{$post->title}}
                </p>
                @if ($message = session('status'))
                    <div class="mt-2 font-medium text-sm text-green-600 bg-green-200 border rounded border-green-600 px-8 py-3">
                        {{$message}}
                    </div>
                @endif
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                <img src="{{$post->imageLink}}" alt="{{$post->title}}" class="h-48 w-auto object-cover mx-auto mb-16">
                {!! $post->body !!}
                <div class="flex space-x-6 mt-16 items-center">
                    <div>
                        <a href="{{route('posts.edit', $post)}}" class="text-sm text-indigo-600 font-bold">Edit &rarr;</a>
                    </div>
                    <form method="post" action="{{route('posts.destroy', $post)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm text-red-600 font-bold">Delete &rarr;</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
