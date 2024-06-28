<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Project</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .nav-item {
            position: relative;
        }
        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #38a169;
            left: 50%;
            bottom: -2px;
            transition: all 0.3s ease-in-out;
        }
        .nav-item:hover::after {
            width: 100%;
            left: 0;
        }
        .navbar-hidden {
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }
        .navbar-visible {
            transform: translateY(0);
            transition: transform 0.3s ease-in-out;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');
            for (const link of links) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }

            let lastScrollTop = 0;
            const navbar = document.querySelector('nav');

            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                if (scrollTop > lastScrollTop) {
                    navbar.classList.add('navbar-hidden');
                    navbar.classList.remove('navbar-visible');
                } else {
                    navbar.classList.remove('navbar-hidden');
                    navbar.classList.add('navbar-visible');
                }
                lastScrollTop = scrollTop;
            });
        });
    </script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow fixed w-full z-50 navbar-visible">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex items-center absolute left-8">
                    <img src="{{ asset('logo-umy.png') }}" class="h-24 w-40" alt="Logo umy">
                    <img src="{{ asset('logo-cdc.png') }}" class="h-12 w-40 ml-2" alt="Logo cdc">
                </div>
                <div class="flex-1 flex items-center justify-center">
                    <div class="flex space-x-12">
                        <a href="#home" class="text-black hover:text-green-800 nav-item">Home</a>
                        <a href="#kuisioner" class="text-black hover:text-green-800 nav-item">Kuisioner</a>
                        <a href="#kontak" class="text-black hover:text-green-800 nav-item">Kontak</a>
                    </div>
                </div>
                <div class="absolute right-0 flex items-center pr-2">
                    <a href="{{ url('/') }}" class="bg-green-900 text-white px-6 py-2 rounded-xl text-sm font-medium hover:bg-green-800">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>
