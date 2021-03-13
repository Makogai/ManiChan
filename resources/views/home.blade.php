@extends('layouts.app')

@section('content')

<style>



.card {
  overflow: hidden;
  width: 320px;
  height: 450px;
  margin: 50px auto;
  background: #2a264f;
  border: 5px solid #1a163f;
  border-radius: 3px;
  box-shadow: 0 0 10px #2a264f;
}

.card .img1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 60%;
  width: 100%;
  background-size: 310px 440px;
  background-position: left top;
  transition: all 0.5s ease-in-out;
}

.card .img2 {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 40%;
  width: 100%;

  background-size: 310px 440px;
  background-position: left bottom;
  transition: all 0.5s ease-in-out;
}

.card .title {
  height: 22%;
  width: 100%;
  font-size: 20px;
  text-align: center;
  font-weight: 700;
  color: #FFFC;
  padding: 15px 10px;
  position: absolute;
  bottom: 0;
  left: 0;
  box-shadow: 0 -95px 28px -25px #000 inset;
}

.card .text {
  position: absolute;
  bottom: 80px;
  height: 120px;
  padding: 15px 10px;
  text-align: center;
  font-size: 17px;
  color: #fff;
  transform: rotate(90deg);
  transform-origin: 0 100px;
  opacity: 0;
  transition: all 0.5s ease;
}

.card .catagory {
  position: absolute;
  left: 10px;
  top: 140px;
  padding: 3px 10px;
  font-size: 15px;
  font-weight: 700;
  text-align: center;
  background: #2a264f;
  color: #fff;
  border-radius: 5px;
  transform: translate(-160px, 0);
  transition: all 0.5s ease;
}

.card .views {
  position: absolute;
  left: 10px;
  top: 175px;
  padding: 3px 10px;
  font-size: 15px;
  font-weight: 700;
  text-align: center;
  background: #8b2463;
  color: #fff;
  border-radius: 5px;
  transform: translate(-160px, 0);
  transition: all 0.5s ease 0.15s;
}

.card:hover .img1 {
  transform: rotate(10deg) scale(1.3) translate(20px, 0);
  transform-origin: 300px 300px;
  opacity: 0.5;
}

.card:hover .img2 {
  transform: rotate(90deg) translate(0px, 150px);
  transform-origin: -20px 200px;
}

.card:hover .text {
  opacity: 0.8;
  transform: rotate(0deg);
}

.card:hover .views,
.card:hover .catagory {
  transform: translate(0);
}


</style>

    <div class="container mx-auto px-5">
        <h2 class="text-blue-400 uppercase tracking-wide font-semibold">Latest added</h2>
        <div class="top-anime text-sm grid grid-cols-2 md:grid-cols-4 gap-12 border-b border-gray-800 pb-16">

            @foreach($animes as $anime)
<div class="anime mt-0">
            <div class="card relative mt-2 mb-0">
              <a href="/anime/{{$anime->slug}}">
                <div class="img1" style="  background-image: url({{$anime->cover}});"></div>
                <div class="img2" style="  background-image: url({{$anime->cover}});"></div>
                <div class="title"> {{ $anime->name_jp }}</div>
                <div class="text">{{ \Illuminate\Support\Str::limit($anime->description, 120, $end='...') }}</div>
                <a href="#"><div class="catagory">{{$anime->source}} <i        class="fas fa-film"></i></div></a>
                <a href="#"><div class="views">{{$anime->episodes}}  <i class="far fa-eye"></i> </div></a>
              </a>
            </div>
          </div>
@endforeach
            

        </div>
    </div>
@endsection