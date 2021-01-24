<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<style>
        .active{
        display: block;
    }  
</style>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-4">
            <div class="flex items-center">
                <a href="/">
                    <img src="img/logo.png" alt="Logo" class="w-32 flex-none">
                </a>
               
                <ul class="hidden md:flex md:flex-row ml-16 space-x-8"  id="mobileMenu">
                    <li><a href="#" class="hover:text-gray-400">Anime</a></li>
                    <li><a href="#" class="hover:text-gray-400">Manga</a></li>
                    <li><a href="#" class="hover:text-gray-400">Manhwa</a></li>
                </ul>
            </div>
        <div class="flex items-center">
            <div class="relative">
                <input type="text" class="bg-gray-800 text-small rounded-full w-50 focus:outline-none focus:shadow-outline pl-8 px-3 py-1" placeholder="Search">
                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24">
                        <path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
                    </svg>
                </div>
            </div>    
            <p id="hamburgerbtn" class="md:hidden ml-2">
                <i class="fas fa-bars"></i>
              </p>
            <div class="ml-6">
                <a href="#">
                    <img src="img/avatar.png" alt="avatar" class="rounded-full w-8">
                </a>
               
            </div>
         
        </div>   
         
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powedred by <a href="anilist.co" class="underline hover:text-gray-400">Anilist</a>
        </div>
    </footer>

    <script>
            let hamburger = document.getElementById('hamburgerbtn');

let mobileMenu = document.getElementById('mobileMenu');

hamburger.addEventListener('click', function(){
    mobileMenu.classList.toggle('active');
});
    </script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>