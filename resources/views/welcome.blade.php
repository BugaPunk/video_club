<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>VIDEOCLUB</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
    rel="stylesheet">

  <!-- Styles -->
  <script src="https://cdn.tailwindcss.com"></script> <!-- cdn de Tailwind -->
  <!--
    Documentacion de Tailwind: https://tailwindcss.com/docs/installation
    Componentes: https://tailblocks.cc/
              : https://www.hyperui.dev/
  -->
  <style>
    :root {
      font-family: "Ubuntu Sans", sans-serif;
    }

    html {
      scroll-behavior: smooth;
    }

    .parallax-slide {
      transition: opacity 1s ease-in-out, transform 0.5s ease-out;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.5);
    }

    .header {
      background: rgba(0, 0, 0, 0);
    }
  </style>
  <!-- Styles -->
</head>

<body class="ubuntu-sans">
  <section class="antialiased dark:text-white/50 dark:bg-gradient-to-r from-slate-950 to-gray-950">
    <!-- Header semitransparente -->
    <header
      class="header fixed top-0 left-0 right-0 z-50 py-4 px-6 flex justify-between items-center bg-gradient-to-b from-gray-950 to-transparent">
      <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
          <a class="mr-5 hover:text-white" href="#topelis">Top Películas</a>
          <a class="mr-5 hover:text-white" href="#est">Estadisticas</a>
          <a class="mr-5 hover:text-white" href="#feed">FeedBack</a>
          <a class="mr-5 hover:text-white" href="#nteam">Nuestro Equipo</a>
          <!--a class="hover:text-white">Fourth Link</a-->
        </nav>
        <a
          class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl xl:block lg:hidden">Tailblocks</span>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
          @if (Route::has('login'))
          <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a href="{{ url('/dashboard') }}"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
              Dashboard
            </a>
            @else
            <a href="{{ route('login') }}"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white font-semibold">
              Ingresar
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white font-semibold">
              Registrarse
            </a>
            @endif
            @endauth
          </nav>
          @endif
        </div>
      </div>
    </header>
    <!-- Header semitransparente -->

    <!-- parallaxCarousel -->
    <div id="parallaxCarousel" class="relative h-screen w-full overflow-hidden">
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center"
        style="background-image: url('https://i.pinimg.com/originals/cf/95/9b/cf959b32cbef39dcebbb947efcfe7561.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://sun9-28.userapi.com/Sw7_Uz1I1KN0vnTDAKrPSa9zAPCzKd_0WOPEIA/oLx24-LEDW0.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://wallpapercat.com/w/full/5/e/4/189100-2560x1600-desktop-hd-alien-movie-background-photo.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://stephenking.pl/wp-content/uploads/2024/04/Skazani-na-Shawshank.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://wallpapercave.com/wp/wp2100170.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://wallpapers.com/images/file/4k-guardians-of-the-galaxy-uwqc7y1axi4o5a0b.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://kairos2.com/superman-returns-why-it-deserves-a-rewatch-386037.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://images.boosty.to/image/ddc83ab8-5cae-4eb0-87e3-88510a43db68?change_time=1688969798');">
        <div class="overlay absolute inset-0"></div>
      </div>
      <div class="parallax-slide absolute top-0 left-0 h-full w-full bg-cover bg-center opacity-0"
        style="background-image: url('https://wallpapers.com/images/featured/invincible-u17h0jg0nw7lhrgc.jpg');">
        <div class="overlay absolute inset-0"></div>
      </div>

      <!-- Contenido -->
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center z-10">
        <div class="container mx-auto flex py-24 items-center">
          <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-center md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">¿Quieres ver disfrutar ya?</h1>
            <p class="mb-8 leading-relaxed">A partir de USD 3,99. Cancela cuando quieras.</p>
            <div class="flex w-full md:justify-center justify-center items-end">
              <div class="relative mr-4 md:w-full lg:w-full xl:w-full w-1/3">
                <label for="hero-field" class="leading-7 text-sm text-gray-400">Correo</label>
                <input type="text" id="hero-field" name="hero-field"
                  class="w-full bg-gray-800 rounded bg-opacity-40 border border-gray-700 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <button
                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded text-lg">Solicitar</button>
            </div>
            <p class="text-sm mt-2 text-gray-400 mb-8 w-full text-center">
              Ingresa tu email para crear una cuenta.
            </p>
            <div class="flex lg:flex-row md:flex-col text-gray-300">
              <button
                class="bg-gray-800 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-700 hover:text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
                  <path
                    d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z">
                  </path>
                </svg>
                <span class="ml-4 flex items-start flex-col leading-none">
                  <span class="text-xs text-gray-400 mb-1">Consíguelo en la</span>
                  <span class="title-font font-medium">Google Play</span>
                </span>
              </button>
              <button
                class="bg-gray-800 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-700 hover:text-white focus:outline-none lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
                  <path
                    d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z">
                  </path>
                  <path
                    d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z">
                  </path>
                </svg>
                <span class="ml-4 flex items-start flex-col leading-none">
                  <span class="text-xs text-gray-400 mb-1">Descárgalo en la</span>
                  <span class="title-font font-medium">App Store</span>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- parallaxCarousel -->
  </section>

  <!-- movies cards -->
  <section class="text-gray-400 bg-gray-950 body-font" id="topelis">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Master Cleanse Reliac Heirloom</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
          asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep
          jianbing selfies heirloom.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <a href="#" class="group relative block bg-black">
            <img alt=""
              src="https://m.media-amazon.com/images/S/pv-target-images/df6f37011ba65dcd0a2cff6501f36c7e264f19be23622b5a805124412e4b4a68.jpg"
              class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-30" />

            <div class="relative p-4 sm:p-6 lg:p-8">
              <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Etan Cohen</p>

              <p class="text-xl font-bold text-white sm:text-2xl">Dale Duro</p>

              <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                  class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                  <p class="text-sm text-white">
                    Un banquero inversionista que será encarcelado le pide al hombre que lava su carro que lo prepare
                    para su vida detrás de las rejas.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <a href="#" class="group relative block bg-black">
            <img alt="" src="https://m.media-amazon.com/images/I/81c0HBeMtFL._AC_UF894,1000_QL80_.jpg"
              class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-30" />

            <div class="relative p-4 sm:p-6 lg:p-8">
              <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Keenen Ivory Wayans</p>

              <p class="text-xl font-bold text-white sm:text-2xl">Chiquito pero peligroso</p>

              <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                  class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                  <p class="text-sm text-white">
                    Un pequeño fugitivo de la ley finge ser un niño para poder llegar hasta una gema robada que está
                    oculta en la bolsa de una mujer.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <a href="#" class="group relative block bg-black">
            <img alt=""
              src="https://m.media-amazon.com/images/M/MV5BYzkyNzdlNmUtYjQwOC00ZjE4LWE1NTItYTQ4YTFkNzIwM2IxXkEyXkFqcGdeQXVyMTM1MDExOTE2._V1_.jpg"
              class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-30" />

            <div class="relative p-4 sm:p-6 lg:p-8">
              <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Matt Reeves</p>

              <p class="text-xl font-bold text-white sm:text-2xl">Cloverfield</p>

              <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                  class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                  <p class="text-sm text-white">
                    Una cámara de video graba los terribles eventos que se desarrollan cuando una criatura monstruosa
                    ataca Nueva York, provocando muerte y destrucción.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <a href="#" class="group relative block bg-black">
            <img alt="" src="https://pics.filmaffinity.com/The_Cloverfield_Paradox-826341140-large.jpg"
              class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-30" />

            <div class="relative p-4 sm:p-6 lg:p-8">
              <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Julius Onah</p>

              <p class="text-xl font-bold text-white sm:text-2xl">Cloverfield Paradox</p>

              <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                  class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                  <p class="text-sm text-white">
                    Un equipo a bordo de una estación espacial se encuentra solo tras un experimento científico que
                    provoca que la Tierra desaparezca.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <a href="#" class="group relative block bg-black">
            <img alt=""
              src="https://m.media-amazon.com/images/S/pv-target-images/3307ca0df325da35692128a6703a4bff5a5cf8c60bb719f221cadd6c03834358.jpg"
              class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-30" />

            <div class="relative p-4 sm:p-6 lg:p-8">
              <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Anthony Russo, Joe Russo</p>

              <p class="text-xl font-bold text-white sm:text-2xl">Avengers: Infinity War</p>

              <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                  class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                  <p class="text-sm text-white">
                    Los superhéroes se alían para vencer al poderoso Thanos. Si Thanos logra reunir las seis gemas nadie
                    podrá detenerlo.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <a href="#" class="group relative block bg-black">
            <img alt=""
              src="https://i.kym-cdn.com/photos/images/original/002/809/102/bbc.jpeg"
              class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-30" />

            <div class="relative p-4 sm:p-6 lg:p-8">
              <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Takashi Yamazaki</p>

              <p class="text-xl font-bold text-white sm:text-2xl">Godzilla Minus One</p>

              <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                  class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                  <p class="text-sm text-white">
                    Un monstruo gigante emerge de las profundidades del océano y se dispone a atacar Japón justo cuando la nación trata de recuperarse tras la Segunda Guerra Mundial.
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- movies cards -->

  <!-- Estadisticas -->
  <section class="text-gray-400 bg-gray-950 body-font" id="est">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Master Cleanse Reliac Heirloom</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
          asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep
          jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="text-blue-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M8 17l4 4 4-4m-4-5v9"></path>
              <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-white">2.7K</h2>
            <p class="leading-relaxed">Downloads</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="text-blue-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-white">1.3K</h2>
            <p class="leading-relaxed">Users</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="text-blue-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M3 18v-6a9 9 0 0118 0v6"></path>
              <path
                d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z">
              </path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-white">74</h2>
            <p class="leading-relaxed">Files</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="text-blue-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-white">46</h2>
            <p class="leading-relaxed">Places</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Estadisticas -->

  <!-- Feedback -->
  <section class="text-gray-400 bg-gray-950 body-font relative" id="feed">
    <div class="absolute inset-0 bg-gray-950">
      <iframe title="map" width="100%" height="100%" style="filter: grayscale(1) contrast(1.2) opacity(0.16);"
        frameborder="0" marginheight="0" marginwidth="0" scrolling="no"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.4215077721155!2d-68.13253932486631!3d-16.504804584239597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2064df652367%3A0xddb4c11ab8c8d666!2sMonoblock%20UMSA!5e0!3m2!1ses!2sbo!4v1726606163662!5m2!1ses!2sbo"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div
        class="lg:w-1/3 md:w-1/2 bg-gray-950 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        <h2 class="text-white text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
          <input type="email" id="email" name="email"
            class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
          <textarea id="message" name="message"
            class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button
          class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <p class="text-xs text-gray-400 text-opacity-90 mt-3">Chicharrones blog helvetica normcore iceland tousled brook
          viral artisan.</p>
      </div>
    </div>
  </section>
  <!-- Feedback -->

  <!-- NuestroTeam -->
  <section class="text-gray-400 bg-gray-950 body-font" id="nteam">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-white uppercase">Nuestro Equipo</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
          asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/3 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-full w-3/4 object-cover object-center mb-4"
              src="https://dummyimage.com/200x200">
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-white">Alper Kamu</h2>
              <h3 class="text-gray-500 mb-3">UI Developer</h3>
              <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
              <span class="inline-flex">
                <a class="text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-full w-3/4 object-cover object-center mb-4"
              src="https://dummyimage.com/201x201">
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-white">Holden Caulfield</h2>
              <h3 class="text-gray-500 mb-3">UI Developer</h3>
              <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
              <span class="inline-flex">
                <a class="text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-full w-3/4 object-cover object-center mb-4"
              src="https://dummyimage.com/202x202">
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-white">Atticus Finch</h2>
              <h3 class="text-gray-500 mb-3">UI Developer</h3>
              <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
              <span class="inline-flex">
                <a class="text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- NuestroTeam -->

  <!-- Footer -->
  <footer class="text-gray-400 bg-gray-950 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 hover:text-white">First Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Second Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Third Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 hover:text-white">First Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Second Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Third Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 hover:text-white">First Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Second Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Third Link</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">SUBSCRIBE</h2>
          <div
            class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
            <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
              <label for="footer-field" class="leading-7 text-sm text-gray-400">Placeholder</label>
              <input type="text" id="footer-field" name="footer-field"
                class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:bg-transparent focus:ring-2 focus:ring-blue-900 focus:border-blue-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button
              class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">Button</button>
          </div>
          <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
            <br class="lg:block hidden">waistcoat green juice
          </p>
        </div>
      </div>
    </div>
    <div class="bg-gray-800 bg-opacity-75">
      <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full"
            viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">Tailblocks</span>
        </a>
        <p class="text-sm text-gray-400 sm:ml-6 sm:mt-0 mt-4">© 2020 Tailblocks —
          <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank"
            rel="noopener noreferrer">@knyttneve</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-gray-400">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>
  <!-- Footer -->

  <!-- script parallax_corousel -->
  <script>
    const carousel = document.getElementById('parallaxCarousel');
    const slides = carousel.querySelectorAll('.parallax-slide');
    const indicators = carousel.querySelectorAll('button');
    const slideTitle = document.getElementById('slideTitle');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
            slide.style.transform = `translateX(${(i - index) * 10}%)`;
        });
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('bg-gray-950', i === index);
            indicator.classList.toggle('bg-slate-950', i !== index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    setInterval(nextSlide, 4000);
  </script>
  <!-- script -->
</body>

</html>