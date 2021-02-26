@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $anime->cover }}" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $anime->name_en }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="ml-1">{{ $anime->episodes }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $anime->created_at }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $anime->source }}</span>
                </div>

            
                <p class="text-gray-300 mt-8">
                    {!! $anime->description !!}
                </p>

                @if($anime->animeEpisode->count()>0)
                <div class="container mx-auto px-4 py-16">
                    <h4 class="text-white font-semibold">Episodes</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                        @foreach ($anime->animeEpisode as $ep)
                            <div class="mr-3">
                                <div>{{ $ep->episode }}</div>
                                <iframe src="{{ $ep->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                                    picture-in-picture" allowfullscreen></iframe>
                            </div>

                        @endforeach
                    </div>
                </div>
                @endif
                

            </div>
        </div>
    </div> <!-- end movie-info -->

   

    
@endsection