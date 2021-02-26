@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-5">
        <h2 class="text-blue-400 uppercase tracking-wide font-semibold">Latest added</h2>
        <div class="top-anime text-sm grid grid-cols-3 md:grid-cols-6 gap-12 border-b border-gray-800 pb-16">

            @foreach($animes as $anime)
            <div class="anime mt-8">
                <div class="relative inline-block">
                    <a href="/anime/{{ $anime->slug }}">
                        <img src="{{ $anime->cover}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >{{$anime->episodes}}</div>

                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-3">{{$anime->name_en}}</a>
                <div class="text-gray-400-mt-1">{{$anime->source}}</div>
            </div>
@endforeach
            

        </div>
    </div>
@endsection