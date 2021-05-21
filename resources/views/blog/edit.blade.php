@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4 px-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input type="text" name="title" value="{{ $post->title }}"
        class="bg-gray-200 block border-b-2 w-full h-20 text-4xl outline-none px-10">
        <textarea name="description" placeholder="Enter your post" 
        class="py-10 px-10 bg-gray-200 border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea>
        <div>
            <button type="submit" class="uppercase mt-15 bg-blue-500 text-lg font-extrabold py-4 px-8 rounded-3xl text-gray-300">submit</button>
        </div>
    </form>
</div>
@endsection