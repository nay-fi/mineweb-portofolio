@extends('layout.main_layout')

@section('content')

    <div class="">
        <div class="h-full text-amber-50 bg-no-repeat object-fill bg-cover align-middle m-auto"
            style="background-image: url('/assets/images/walphome-b.png');">
            <div class="items-center py-24 px-32">
                <div class="text-center">
                    <h2 class="text-2xl lg:text-6xl font-bold">Admin and Front End <p class="text-orange-400">Developer</p>
                    </h2>
                    <blockquote class="text-xl/10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt fugit
                        consequuntur abearum nemo libero, explicabo odio ea placeat perspiciatis?
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="flex items-start gap-4 justify-end">
            <div class="w-64 py-4 rounded-2xl object-cover">
                <img src="/assets/images/drawer123.jpg" alt="" class="shrink object-cover rounded-2xl">
            </div>
            <div class="w-64 py-12 rounded-2xl">
                <img src="/assets/images/drawer123.jpg" alt="" class="shrink object-cover rounded-2xl">
            </div>
            <div class="w-64 py-8 rounded-2xl">
                <img src="/assets/images/drawer123.jpg" alt="" class="shrink object-cover rounded-2xl">
            </div>

        </div>

    </div>

@endsection