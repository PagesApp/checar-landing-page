<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checar</title>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-blue': '#0D5EB9',
                        'brand-blue-2': '#3D448D',
                        'brand-green': '#7EB469',
                        'brand-light-blue': '#6495D0',
                        'brand-red': '#C93E30',
                        'brand-orange': '#F1933E',
                    }
                },
            },
        }
    </script>
</head>

<body>
    <div class="flex flex-col h-screen">
        <header>
            <nav id="navbar" class="bg-brand-blue py-2 w-full relative">
                <div class="container mx-auto py-2 flex flex-wrap items-center justify-between" style="padding: 1rem;">
                    <div class="flex flex-row items-center space-x-4">
                        <div class="justify-start">
                            <a class="text-white no-underline hover:text-white hover:no-underline"
                                href="{{ route('home') }}">
                                <img src="{{ asset('images/logo-checar.webp') }}" width="50" height="50"
                                    alt="Logo checar">
                            </a>
                        </div>
                        <h1 class="text-xl font-medium text-white">Checar BPMN</h1>
                    </div>

                    <div class="lg:hidden flex items-center">
                        <button class="text-white" type="button">
                            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>

                    <div class="hidden lg:flex content-center">
                        <ul class="list-reset flex  flex-1 items-center space-x-4 2xl:space-x-10">
                            <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li><a class="text-white" href="#video">Vídeo</a></li>
                            <li><a class="text-white" href="#casos-de-sucesso">Casos de Sucesso</a></li>
                            <li><a class="text-white" href="#formulario">Formulário</a></li>
                            <li><a class="text-white" href="#duvidas">Dúvidas</a></li>
                        </ul>
                    </div>

                    <div class="transform translate-y-full transition-transform duration-200 ease-in-out hidden lg:hidden content-center flex-col w-full bg-brand-blue z-50 top-full py-4"
                        id="mobile-menu">
                        <ul class="list-reset flex flex-col items-center space-y-4 2xl:space-y-10">
                            <li><a class="text-white" href="/">Home</a></li>
                            <li><a class="text-white" href="#video">Vídeo</a></li>
                            <li><a class="text-white" href="#casos-de-sucesso">Casos de Sucesso</a></li>
                            <li><a class="text-white" href="#formulario">Formulário</a></li>
                            <li><a class="text-white" href="#duvidas">Dúvidas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="flex-grow">
            @yield('content')
        </div>

        <footer class="bg-[#3D448D] text-white py-8 md:px-12 lg:px-24">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-fit md:w-1/3 mb-4 md:mb-0 text-center">
                        <div class="flex flex-row items-center space-x-4">
                            <img src="{{ asset('images/logo-checar-white.webp') }}" width="60" height="60"
                                alt="Logo checar branca">
                            <div class="text-start">
                                <h1 class="text-xl font-medium text-white">Checar BPMN</h1>
                                <p>supliu.com.br</p>
                                <p>(31) 9 9864-2322</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-fit md:w-1/3 mb-4 md:mb-0 text-center">
                        <div class="space-x-2 sm:flex">
                            <div class="mb-2 w-full sm:w-1/2">
                                <a href="#video" class="block underline text-lg">Vídeo</a>
                            </div>
                            <div class="mb-2 w-full sm:w-1/2">
                                <a href="#formulario" class="block underline text-lg">Formulário</a>
                            </div>
                        </div>
                        
                        <div class="space-x-2 sm:flex">
                            <div class="mb-2 w-full sm:w-1/2">
                                <a href="#casos-de-sucesso" class="block underline text-lg">Casos de Sucesso</a>
                            </div>
                            <div class="mb-2 w-full sm:w-1/2">
                                <a href="#duvidas" class="block underline text-lg">Dúvidas</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-fit md:w-1/3 mb-0 text-end">
                        <h2 class="text-white text-lg font-bold">Redes sociais</h2>
                        <div class="flex justify-center mt-1 sm:justify-end">
                            <div class="rounded-full bg-white me-1">
                                <a href="" class="text-brand-blue" style="padding: 0.3rem; height: 1.5rem;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="rounded-full bg-white me-1">
                                <a href="" class="text-brand-blue" style="padding: 0.3rem; height: 1.5rem;">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="rounded-full bg-white">
                                <a href="" class="text-brand-blue" style="padding: 0.3rem; height: 1.5rem;">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-10">
                <p class="text-center text-sm">
                    Landing Pages App. 2024. Feito por Supliu Tecnologia.

                </p>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('button');
            const menu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', function(event) {
                event.stopPropagation();
                menu.classList.toggle('hidden');
                menu.classList.toggle('translate-y-full');
            });

            document.addEventListener('click', function() {
                if (!menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    menu.classList.add('translate-y-full');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Seleciona todos os links que têm um href começando com "#"
            const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');

            smoothScrollLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(
                        targetId);

                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
