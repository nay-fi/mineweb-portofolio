@extends('layout.main_layout')

@section('content')

    <!-- content -->
    <div class="items-center">
        <div class="h-screen bg-amber-50 text-amber-50 bg-no-repeat object-fill bg-cover lg:grid lg:grid-cols-2 lg:justify-items-end md:grid-cols-1 gap-2 m-auto"
            style="background-image: url('/assets/images/walphome-b.png');">
            <div class="my-42 px-24">
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-mt-65 overflow-visible">
        <path fill="#8FABD4" fill-opacity="0.2"
            d="M0,64L17.1,85.3C34.3,107,69,149,103,160C137.1,171,171,149,206,138.7C240,128,274,128,309,160C342.9,192,377,256,411,256C445.7,256,480,192,514,181.3C548.6,171,583,213,617,197.3C651.4,181,686,107,720,96C754.3,85,789,139,823,154.7C857.1,171,891,149,926,144C960,139,994,149,1029,176C1062.9,203,1097,245,1131,250.7C1165.7,256,1200,224,1234,218.7C1268.6,213,1303,235,1337,224C1371.4,213,1406,171,1423,149.3L1440,128L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
        </path>
    </svg>
    <h3 class="text-center text-4xl font-bold py-16 backdrop-blur-2xl bg-[#8FABD4]/20">About Me</h3>
    <div class="flex justify-between py-16 gap-2 rounded-b-4xl backdrop-blur-2xl bg-[#8FABD4]/20">
        <div class="dark:text-amber-50">
            <div class="mx-24 text-end">
                <h2 class="text-5xl font-bold  text-end">Hello There,<br>I'm Nur Ayuk Febreyanti</h2><br>
                <p class="my-2 mb-10 text-xl/8 text-end">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Voluptatum recusandae sunt sapiente sequi aliquam alias in odio veniam, illo quo dicta eveniet
                    quae quis. Fugiat laboriosam delectus soluta aliquid. Aliquid.
                </p>
                <a class="button rounded-2xl bg-blue-400/10 px-5 py-3 text-xl font-normal text-blue-400 inset-ring inset-ring-blue-400/30 hover:bg-blue-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500"
                    href="#">
                    More About Me
                </a>
            </div>
        </div>
        <div class=" dark:text-amber-50">
            <div class="me-24 ">
                <img src="/assets/images/drawer123.jpg" alt="" class="rounded-2xl w-6xl h-auto">
            </div>
        </div>
    </div>

    <!-- Project -->
    <h3 class="text-center text-4xl font-bold mx-0 my-16">Project</h3>
    <p class="flex justify-center items-center gap-3 text-2xl">
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
    <div class="m-auto mt-16 bg">
        <div class="px-24 lg:grid lg:grid-cols-3 lg:justify-items-end md:grid-cols-1 gap-2 m-auto">
            <!-- Card 1 -->
            <div class="w-sm m-auto p-5 backdrop-blur-2xl bg-gray-300/10 rounded-2xl">
                <img class="h-56 w-sm object-cover m-auto rounded-2xl border-4" src="assets/images/drawer123.jpg" alt="">
                <h3 class="text-xl font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">Sistem Informasi Akademik
                    Berbasis Website
                </h3>
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
                <hr>
                <button
                    class="rounded-2xl px-5 py-3 mt-5 text-xl font-normal inset-ring inset-ring-blue-100 hover:bg-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-100">
                    See More <i class="bi bi-arrow-right-square"></i>
                </button>
            </div>
            <!-- Card 2 -->
            <div class="w-sm m-auto p-5 backdrop-blur-2xl bg-gray-300/10 rounded-2xl">
                <img class="h-56 w-sm object-cover m-auto rounded-2xl border-4" src="assets/images/drawer123.jpg" alt="">
                <h3 class="text-xl font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">Sistem Informasi Akademik
                    Berbasis Website
                </h3>
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
                <hr>
                <button
                    class="rounded-2xl px-5 py-3 mt-5 text-xl font-normal inset-ring inset-ring-blue-100 hover:bg-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-100">
                    See More <i class="bi bi-arrow-right-square"></i>
                </button>
            </div>
            <!-- Card 3 -->
            <div class="w-sm m-auto p-5 backdrop-blur-2xl bg-gray-300/10 rounded-2xl">
                <img class="h-56 w-sm object-cover m-auto rounded-2xl border-4" src="assets/images/drawer123.jpg" alt="">
                <h3 class="text-xl font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">Sistem Informasi Akademik
                    Berbasis Website
                </h3>
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
                <hr>
                <button
                    class="rounded-2xl px-5 py-3 mt-5 text-xl font-normal inset-ring inset-ring-blue-100 hover:bg-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-100">
                    See More <i class="bi bi-arrow-right-square"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h3 class="text-center text-4xl font-bold mx-0 mt-32 mb-16">What They Say About My Project ?</h3>
    <div class="m-auto mb-16 inline-flex">
        <div class="px-24 lg:grid lg:grid-cols-3 lg:justify-items-center md:grid-cols-1 lg:gap-8 m-auto">
            <!-- Card 1 -->
            <div class="w-sm m-auto p-5 bg-indigo-300 dark:bg-gray-800 rounded-2xl">
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
            <div class="w-sm m-auto p-5 bg-indigo-300 dark:bg-gray-800 rounded-2xl">
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
            <div class="w-sm m-auto p-5 bg-indigo-300 dark:bg-gray-800 rounded-2xl">
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