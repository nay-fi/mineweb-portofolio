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

        <div class="flex gap-4 mx-16 mt-24 p-8 bg-sky-300/20 shadow backdrop-blur-2xl rounded-2xl">
            <img src="/assets/images/siakad.png" alt="" class="w-64 h-72 object-cover">
            <div>
                <img src="/assets/images/siakad.png" alt="" class="h-24 w-auto object-fill flex">
                <img src="/assets/images/siakad.png" alt="" class="h-24 w-auto object-fill flex">

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, nesciunt nisi accusamus maiores
                    aliquam ducimus officia dolores earum nobis mollitia.</p>
            </div>
        </div>
    </div>

@endsection