<x-layout>
@section('title', 'About Us')
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-aboutus.png') }}')">
    <div class="px-4 max-w-screen-xl place-items-start text-left pt-56 fade-hero">
        <div class="pt-60 lg:pl-15 md:pl-15 sm:px-10 max-[640px]:px-10">
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cikopi</h1>
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Mang Eko</h1>
            <p class="lg:w-80 md:w-80 sm:w-auto mb-8 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs font-lato text-white">Cikopi mang eko merupakan tempat penyedia biji  kopi, jasa roasting, dan  distributor biji kopi. </p>
        </div>
    </div>
</section>

{{-- About Our Team --}}
<div class="container lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 max-w-screen font-lato fade-in-up">
    <div class="font-lato max-w-screen-xl place-items-start text-left mt-15 mb-3">
        <h1 class="lg:text-3xl md:text-3xl sm:text-2xl max-[640px]:text-2xl font-bold text-[#39312F]">About Our Team</h1>
    </div>
    <div class="py-3 justify-center max-w-screen gap-8 grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 max-[640px]:grid-cols-2 mb-25">
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs" src="{{ asset('storage/image/muchtar-koswara.png') }}" alt="">
            </div>
            <h2 class="font-bold lg:text-xl md-text-xl sm:text-base pt-10">Muchtar Koswara</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Owner Cikopi Mang Eko</p>       
        </div>
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs" src="{{ asset('storage/image/dodi-setiadi.png') }}" alt="">
            </div>
            <h2 class="font-bold lg:text-xl md-text-xl sm:text-base pt-10">Dodi Setiadi</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Store Manager</p>       
        </div>
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs" src="{{ asset('storage/image/novi-indriawan.png') }}" alt="">
            </div>
            <h2 class="font-bold lg:text-xl md-text-xl sm:text-base pt-10">Novi Indriawan</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Production Manager</p>       
        </div>
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs" src="{{ asset('storage/image/bunga-utami.png') }}" alt="">
            </div>
            <h2 class="font-bold lg:text-xl md-text-xl sm:text-base pt-10">Bunga Utami</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Sales and Marketing</p>       
        </div>
    </div>
</div>

<div class="container max-w-screen px-25 font-lato fade-in-up">
    <div class="font-lato max-w-screen-xl place-items-start text-left mt-15 mb-3">
        <h1 class="text-3xl font-bold text-[#39312F]">Legalities & Certificate</h1>
    </div>
    <div class="py-3 justify-center max-w-screen gap-4 grid grid-cols-4 mb-25">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
    </div>
</div>
</x-layout>