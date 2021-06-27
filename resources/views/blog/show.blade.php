@extends('layouts.app')


@section('content')

<!-- <div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl"> {{$post->title}}</h1>
    </div>
</div> -->
<div class="p-50">
    <!--Card 1-->
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <img class="w-full" src="{{asset('images/'.$post->image_path)}}" alt="blog_image">
        <div class="px-6 py-4">
            <div class="text-gray-700 font-bold text-5xl pb-4">{{$post->title}}</div>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>, Created on
                {{date('d M Y', strtotime($post->updated_at)) }}
            </span>
        </div>
    </div>
</div>


<div class="w-4/5 m-auto pt-5">

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">{{$post->description}}</p>
</div>

@endsection


