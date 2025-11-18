@extends('layout.main_layout')

@section('content')

    <style>
        .box:hover,
        .box:focus {
            box-shadow: 0 0.5em 0.5em -0.4em var(--hover), #fff;
            transform: scale(1.1);
            transition: 0.5s;
            border-bottom: 5px solid #fff;
            background: linear-gradient(120deg, #4A70A9, #112D4E, #252525);

        }
    </style>

    <!-- content -->
    <div class="items-center">
        <div class="h-full text-amber-50 bg-no-repeat object-fill bg-cover lg:grid lg:grid-cols-2 lg:justify-items-end md:grid-cols-1 gap-2 m-auto"
            style="background-image: url('/assets/images/walphome-b.png');">
            <div class="mt-56 px-24">
                <h2 class="text-4xl lg:text-7xl font-bold">Admin and Front End <p class="text-orange-400">Developer</p>
                </h2>
                <p class="text-xl/10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fugit
                    consequuntur abearum nemo libero, explicabo odio ea placeat perspiciatis?
                </p>
            </div>
            <div class="my-42 px-24">
                <img src="/assets/images/desktop.png" alt="">
            </div>
        </div>
    </div>

    <!-- About Me -->
    <img src="/assets/images/wave2.svg" alt="" class="-mt-54 overflow-visible">
    <div class="bg-[#8FABD4] h-full py-8 px-24">
        <h3 class="-mt-5 text-start text-4xl font-bold py-8">WHO I AM ?</h3>
        <div class="flex justify-between py-8 gap-2 dark:text-amber-50 text-center lg:text-start">
            <div>
                <h2 class="text-5xl font-bold  text-center lg:text-start">Hello There,<br>I'm Nur Ayuk Febreyanti</h2>
                <br>
                <p class="my-2 mb-10 text-xl/8 text-center lg:text-start">Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit.
                    Voluptatum recusandae sunt sapiente sequi aliquam alias in odio veniam, illo quo dicta eveniet
                    quae quis. Fugiat laboriosam delectus soluta aliquid. Aliquid.
                </p>
                <a class="button rounded-2xl bg-gray-800 px-5 py-3 text-xl font-normal text-blue-400 inset-ring inset-ring-blue-400/30 hover:bg-blue-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500"
                    href="#">
                    More About Me
                </a>
            </div>
            <div class=" dark:text-amber-50">
                <div class="me-24 mb-8">
                    <img src="/assets/images/drawer123.jpg" alt="" class="rounded-2xl w-6xl h-auto -mt-16">
                </div>
            </div>
        </div>
    </div>

    <!-- Development Tools -->
    <img src="/assets/images/wave3.svg" alt="" class="overflow-visible">
    <div class="px-24 -mt-16">
        <h2 class="text-start text-4xl font-bold my-16">MY EXPERTISE</h2>
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 grid grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="box rounded-2xl shadow-2xl bg-orange-400 m-auto p-8 text-center">
                    <img src="/assets/images/desktop.png" alt="" class="h-32">
                    <h3 class="text-xl font-bold my-1">LARAVEL</h3>
                </div>
                <div class="box rounded-2xl shadow-2xl bg-orange-400 m-auto p-8 text-center">
                    <img src="/assets/images/desktop.png" alt="" class="h-32">
                    <h3 class="text-xl font-bold my-1">LARAVEL</h3>
                </div>
                <div class="box rounded-2xl shadow-2xl bg-orange-400 m-auto p-8 text-center">
                    <img src="/assets/images/desktop.png" alt="" class="h-32">
                    <h3 class="text-xl font-bold my-1">LARAVEL</h3>
                </div>
                <div class="box rounded-2xl shadow-2xl bg-orange-400 m-auto p-8 text-center">
                    <img src="/assets/images/desktop.png" alt="" class="h-32">
                    <h3 class="text-xl font-bold my-1">LARAVEL</h3>
                </div>
                <div class="box rounded-2xl shadow-2xl bg-orange-400 m-auto p-8 text-center">
                    <img src="/assets/images/desktop.png" alt="" class="h-32">
                    <h3 class="text-xl font-bold my-1">LARAVEL</h3>
                </div>
                <div class="box rounded-2xl shadow-2xl bg-orange-400 m-auto p-8 text-center">
                    <img src="/assets/images/desktop.png" alt="" class="h-32">
                    <h3 class="text-xl font-bold my-1">LARAVEL</h3>
                </div>
                <div class="box rounded-2xl shadow-2xl bg-orange-400 m-auto p-8 text-center">
                    <img src="/assets/images/desktop.png" alt="" class="h-32">
                    <h3 class="text-xl font-bold my-1">LARAVEL</h3>
                </div>
            </div>
            <div class="h-full rounded-2xl shadow-2xl bg-orange-400 p-16 text-center align-middle">
                <h3 class="text-center font-bold capitalize text-2xl lg:text-4xl my-4">
                    <span class="text-6xl">4</span><br>Years Experience in Technology Information
                </h3>
            </div>

        </div>
    </div>

    <!-- Project -->
    <div class="my-8 py-4 px-24">
        <h3 class="text-start text-4xl font-bold my-16">PROJECT</h3>
        <div class="my-8 px-8 py-8 rounded-4xl bg-sky-100/5 backdrop-blur-3xl shadow-xl">
            <p class="my-8 flex justify-center items-center gap-2 text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-circle-fill text-red-400" viewBox="0 0 25 22">
                    <circle cx="12" cy="12" r="12" />
                </svg> Laravel
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-circle-fill text-indigo-500" viewBox="0 0 25 22">
                    <circle cx="12" cy="12" r="12" />
                </svg> Bootstrap
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-circle-fill text-amber-400" viewBox="0 0 25 22">
                    <circle cx="12" cy="12" r="12" />
                </svg> HTML
            </p>
            <div class="m-auto px-2 lg:grid lg:grid-cols-4 lg:justify-items-end md:grid-cols-1 gap-10">
                <!-- Card 1 -->
                <a class="w-72 shrink m-auto p-5 backdrop-blur-2xl bg-gray-300/10 rounded-2xl" href="">
                    <img class="h-56 w-sm object-cover m-auto rounded-2xl border-4" src="assets/images/drawer123.jpg"
                        alt="">
                    <h3 class="text-lg font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">Sistem Informasi
                        Akademik Berbasis Website </h3>
                    <p class="flex justify-end gap-2 my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-red-500" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-amber-400" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        PT Kalimas Arubu Indonesia
                    </p>
                    <p class="flex items-center gap-2 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        Semarang, Jawa Tengah
                    </p>
                </a>
                <!-- Card 2 -->
                <a class="w-72 shrink m-auto p-5 backdrop-blur-2xl bg-gray-300/10 rounded-2xl" href="">
                    <img class="h-56 w-sm object-cover m-auto rounded-2xl border-4" src="assets/images/drawer123.jpg"
                        alt="">
                    <h3 class="text-lg font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">Sistem Informasi
                        Akademik Berbasis Website</h3>
                    <p class="flex justify-end gap-2 my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-red-500" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-amber-400" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        PT Kalimas Arubu Indonesia
                    </p>
                    <p class="flex items-center gap-2 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        Semarang, Jawa Tengah
                    </p>
                </a>
                <!-- Card 3 -->
                <a class="w-72 shrink m-auto p-5 backdrop-blur-2xl bg-gray-300/10 rounded-2xl" href="">
                    <img class="h-56 w-sm object-cover m-auto rounded-2xl border-4" src="assets/images/drawer123.jpg"
                        alt="">
                    <h3 class="text-lg font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">Sistem Informasi
                        Akademik Berbasis Website</h3>
                    <p class="flex justify-end gap-2 my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-red-500" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-amber-400" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        PT Kalimas Arubu Indonesia
                    </p>
                    <p class="flex items-center gap-2 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        Semarang, Jawa Tengah
                    </p>
                </a>
                <!-- Card 4 -->
                <a class="w-72 shrink m-auto p-5 backdrop-blur-2xl bg-gray-300/10 rounded-2xl" href="">
                    <img class="h-56 w-sm object-cover m-auto rounded-2xl border-4" src="assets/images/drawer123.jpg"
                        alt="">
                    <h3 class="text-lg font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">Sistem Informasi
                        Akademik Berbasis Website</h3>
                    <p class="flex justify-end gap-2 my-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-red-500" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle-fill text-amber-400" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        PT Kalimas Arubu Indonesia
                    </p>
                    <p class="flex items-center gap-2 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        Semarang, Jawa Tengah
                    </p>
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h3 class="text-center text-4xl font-bold mt-32 mb-16">What They Say About My Project ?</h3>
    <div class="m-auto mb-16">
        <div
            class="px-24 relative flex overflow-x-auto snap-x snap-mandatory lg:grid lg:grid-cols-3 lg:justify-items-center md:grid-cols-1 lg:gap-8 m-auto ">
            <!-- Card 1 -->
            <div class="w-sm m-auto p-5 snap-center dark:bg-gray-400/25 backdrop-blur-3xl rounded-2xl shadow-xl">
                <li class="flex items-center">
                    <img class="h-16 w-16 object-cover me-5 rounded-4xl border-2" src="assets/images/drawer123.jpg">
                    <div>
                        <p class="text-xl font-bold text-gray-950 dark:text-gray-100">Alexander
                            Graham</p>
                        <p class="text-sm font-medium text-gray-800 dark:text-gray-400">CEO PT
                            Starly Digital Studio</p>
                    </div>
                </li>
                <p class=" flex-none justify-end gap-2 my-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis, facilis blanditiis
                    ipsam laudantium quisquam quae, quaerat pariatur id, ullam eos.
                </p>
            </div>
            <!-- Card 2 -->
            <div class="w-sm m-auto p-5 snap-center dark:bg-gray-400/25 backdrop-blur-3xl rounded-2xl shadow-xl">
                <li class="flex items-center">
                    <img class="h-16 w-16 object-cover me-5 rounded-4xl border-2" src="assets/images/drawer123.jpg">
                    <div>
                        <p class="text-xl font-bold text-gray-950 dark:text-gray-100">Alexander
                            Graham</p>
                        <p class="text-sm font-medium text-gray-800 dark:text-gray-400">CEO PT
                            Starly Digital Studio</p>
                    </div>
                </li>
                <p class=" flex-none justify-end gap-2 my-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis, facilis blanditiis
                    ipsam laudantium quisquam quae, quaerat pariatur id, ullam eos.
                </p>
            </div>
            <!-- Card 3 -->
            <div class="w-sm m-auto p-5 snap-center dark:bg-gray-400/25 backdrop-blur-3xl rounded-2xl shadow-xl">
                <li class="flex items-center">
                    <img class="h-16 w-16 object-cover me-5 rounded-4xl border-2" src="assets/images/drawer123.jpg">
                    <div>
                        <p class="text-xl font-bold text-gray-950 dark:text-gray-100">Alexander
                            Graham</p>
                        <p class="text-sm font-medium text-gray-800 dark:text-gray-400">CEO PT
                            Starly Digital Studio</p>
                    </div>
                </li>
                <p class=" flex-none justify-end gap-2 my-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis, facilis blanditiis
                    ipsam laudantium quisquam quae, quaerat pariatur id, ullam eos.
                </p>
            </div>
            <!-- Card 4 -->
            <div class="w-sm m-auto p-5 snap-center dark:bg-gray-400/25 backdrop-blur-3xl rounded-2xl shadow-xl">
                <li class="flex items-center">
                    <img class="h-16 w-16 object-cover me-5 rounded-4xl border-2" src="assets/images/drawer123.jpg">
                    <div>
                        <p class="text-xl font-bold text-gray-950 dark:text-gray-100">Alexander
                            Graham</p>
                        <p class="text-sm font-medium text-gray-800 dark:text-gray-400">CEO PT
                            Starly Digital Studio</p>
                    </div>
                </li>
                <p class=" flex-none justify-end gap-2 my-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis, facilis blanditiis
                    ipsam laudantium quisquam quae, quaerat pariatur id, ullam eos.
                </p>
            </div>
        </div>
    </div>

@endsection