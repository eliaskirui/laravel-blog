@extends('layouts.site')
@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$post->category->title}}</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">
                    {{$post->title}}
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                <form method="post" action="{{route('posts.update', $post)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4">
                         <div>
                             <label for="title" class="font-bold block">Post Title</label>
                             <input type="text" name="title" id="title" value="{{$post->title}}" class="mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"/>
                         </div>
                        <div>
                            <label for="category" class="font-bold block">Post Category</label>
                            <select type="text" name="category_id" id="category" class="mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="body" class="font-bold block">Post Body</label>
                            <textarea type="text" name="body" id="body" class="mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" rows="10">{{$post->body}}</textarea>
                        </div>
                        <div>
                            <label for="image" class="font-bold block">Post Image</label>
                            <input type="file" name="image" id="image" class="mt-5 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"/>
                            <img src="{{$post->imageLink}}" alt="{{$post->title}}" class="h-48 w-auto object-cover mt-2">
                        </div>
                        <div>
                            <button type="submit" class="px-8 py-2 bg-indigo-100 border-indigo-600 text-sm text-indigo-600 font-bold">Update &rarr;</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
