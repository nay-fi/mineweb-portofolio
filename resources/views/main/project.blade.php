@extends('layout.main_layout')

@section('content')

    <div class="">
        <div class="h-auto text-amber-50 bg-no-repeat object-fill bg-cover align-middle m-auto"
            style="background-image: url('/assets/images/walphome-b.png');">
            <div class="items-center py-24 px-32">
                <div class="text-center my-56">
                    <h2 class="text-2xl lg:text-6xl font-bold">Realize Your Needs</h2>
                    <blockquote class="text-xl/10 mx-32 my-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Nesciunt fugit consequuntur abearum nemo libero, explicabo odio ea placeat perspiciatis?
                    </blockquote>
                </div>
            </div>
        </div>

        {{-- <div class="flex gap-4 mx-16 mt-24 p-8 bg-sky-300/20 shadow backdrop-blur-2xl rounded-2xl">
            <img src="/assets/images/siakad.png" alt="" class="w-64 h-72 object-cover">
            <div>
                <img src="/assets/images/siakad.png" alt="" class="h-24 w-auto object-fill flex">
                <img src="/assets/images/siakad.png" alt="" class="h-24 w-auto object-fill flex">

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, nesciunt nisi accusamus maiores
                    aliquam ducimus officia dolores earum nobis mollitia.</p>
            </div>
        </div> --}}
        <h2 class="text-2xl lg:text-5xl text-center font-bold underline underline-offset-8 my-8">Project</h2>
        <div class="m-auto p-8 grid lg:grid-cols-3 lg:justify-items-center md:flex-row gap-4">
            <!-- Card 1 -->
            <a class="min-w-32 w-[24em] h-full shrink m-auto p-5 backdrop-blur-3xl bg-gray-300/10 rounded-2xl" href="">
                <img src="assets/images/drawer123.jpg" alt="" class="h-72 w-full object-cover m-auto rounded-2xl border-4">
                <h2 class="text-lg whitespace-normal font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">
                    Sistem Informasi Akademik Berbasis Website SMP Ajibarang 01 Banyumas</h2>
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
            <a class="min-w-32 w-[24em] h-full shrink m-auto p-5 backdrop-blur-3xl bg-gray-300/10 rounded-2xl" href="">
                <img src="assets/images/drawer123.jpg" alt="" class="h-72 w-full object-cover m-auto rounded-2xl border-4">
                <h2 class="text-lg whitespace-normal font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">
                    Sistem Informasi Akademik Berbasis Website SMP Ajibarang 01 Banyumas</h2>
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
            <a class="min-w-32 w-[24em] h-full shrink m-auto p-5 backdrop-blur-3xl bg-gray-300/10 rounded-2xl" href="">
                <img src="assets/images/drawer123.jpg" alt="" class="h-72 w-full object-cover m-auto rounded-2xl border-4">
                <h2 class="text-lg whitespace-normal font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">
                    Sistem Informasi Akademik Berbasis Website SMP Ajibarang 01 Banyumas</h2>
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
            <a class="min-w-32 w-[24em] h-full shrink m-auto p-5 backdrop-blur-3xl bg-gray-300/10 rounded-2xl" href="">
                <img src="assets/images/drawer123.jpg" alt="" class="h-72 w-full object-cover m-auto rounded-2xl border-4">
                <h2 class="text-lg whitespace-normal font-roboto font-bold my-3 text-gray-950 dark:text-gray-100">
                    Sistem Informasi Akademik Berbasis Website SMP Ajibarang 01 Banyumas</h2>
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

@endsection