<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[url('https://wallpaper.forfun.com/fetch/c9/c9e0c702d0117e28894a393687015694.jpeg')] bg-cover bg-center h-screen">
    <div class="bg-gradient-to-b from-black to-gray-950 opacity-45 h-full w-full absolute"></div>
    <div class="z-10">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg z-10">
        {{ $slot }}
    </div>
</div>
