@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a develover?
                </h1>
                <a href="/" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-2xl">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="/images/pexels-lukas-574069.jpg" alt="laptop" width="700">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better Developer?
            </h2>
            <p class="py-8 text-gray-500 text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim repellat beatae quas adipisci incidunt, ducimus expedita omnis,
            </p>
            <p class="font-extrabold text-gray-600 text-sm pb-9">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis molestias quibusdam inventore sint libero quasi suscipit veritatis voluptatum ea, doloremque nulla iusto, tempore blanditiis vitae veniam, a commodi. Voluptatum, sed?
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-3 px-8 rounded-3xl">
                find out more
            </a>
        </div>
        
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5">
            I'm an expert in ....
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            UX Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Marketing
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-sm text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl py-10 font-bold">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ullam vero ab laboriosam pariatur rerum tempore facilis dolores sunt, similique officia porro repellendus eligendi ipsa a perferendis necessitatibus id voluptatem.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 pt-10 text-gray-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-sm">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos ipsa ab rerum eum, temporibus similique fugit possimus odit suscipit aperiam reprehenderit sit enim inventore dolorum. Cum quisquam id illum aspernatur.
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    find out more
                </a>
            </div>
    </div>
    <div>
        <img src="/images/pexels-lukas-574069.jpg" alt="laptop" width="700">
    </div>

@endsection