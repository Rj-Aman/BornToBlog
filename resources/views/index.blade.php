@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 blocktext-center">
            <center><h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a blogger?
                </h1>
                <a href="/blog" class="bg-gray-50 text-gray-700 py-2 px-4 font-bold text=xl uppercase">Read More</a></center>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="https://source.unsplash.com/1600x900/?nature,water" alt="" width="700">
            </div>
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    Struggling to be a better blogger?
                </h2>
                <p class="py-8 text-gray-500 text-s">This platform will help you to be an independent blogger.</p>
                <p class="font-extrabold text-gray-600 text-s pb-9">Be selective when you are choosing for the title. This is the first step to become a professional blooger. </p>
                <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find out more</a>
            </div>
        </div>

        <div class="text-center p-15 bg-black text-white">
            <h2 class="text-2xl pb-5 text-l">I'm an expert in..</h2>
            <span class='font-extrabold block text-4xl py-1'>Blogging</span>
            <span class='font-extrabold block text-4xl py-1'>Travelling</span>
            <span class='font-extrabold block text-4xl py-1'>Photography</span>
        </div>

        <div class="text-center py-15">
            <span class="uppercase text-s text-gray-400">Blog</span>
            <h2 class="text-4xl font-bold py-10">About BornToBlog</h2>
            <p class="m-auto w-4/5 text-gray-500">This portal is open for all bloggers. 
            </p>
        </div>

        <div class="sm:grid grid-cols-2 w-4/5 m-auto">
            <div class="flex bg-green-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="text-s">
                    Hi..
                </span>
                <h3 class="text-xl py-10">This is Aman Raj graduated from Indian Institute of Technology, Mandi. I created this site for all those bloggers who wants to create blog but don't have such type of Platfom. Hope you like it.</h3>
                <a href="/blog" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find Out more.</a>
                </div>
            </div>
            <div>
                <img src="/images/Admin.JPG" alt="" width="700">
            </div>
        </div>
        


@endsection('content')