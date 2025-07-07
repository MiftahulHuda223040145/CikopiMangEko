<x-layout>
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-aboutus.png') }}')">
    <div class="px-4 mx-auto max-w-screen-xl place-items-start text-left pt-56">
        <div class="pr-24 pt-60 px-15">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cikopi</h1>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Mang Eko</h1>
            <p class="w-80 mb-8 text-base font-normal text-white">Cikopi mang eko merupakan tempat penyedia biji  kopi, jasa roasting, dan  distributor biji kopi. </p>
        </div>
    </div>
</section>

{{-- About Our Team --}}
<div class="container px-25 max-w-screen">
    <div class="font-lato mx-auto max-w-screen-xl place-items-start text-left mt-15 mb-3">
        <h1 class="text-3xl font-bold text-[#39312F]">About Our Team</h1>
    </div>
    <div class="py-3 mx-auto justify-center max-w-screen gap-4 grid grid-cols-4 mb-25">
        <div class="">
            <img class="rounded-full w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
            <h2 class="font-bold text-xl pt-10">Muchtar Koswara</h2>
            <p class="w-95">Owner Cikopi Mang Eko</p>       
        </div>
        <div class="">
            <img class="rounded-full w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
            <h2 class="font-bold text-xl pt-10">Muchtar Koswara</h2>
            <p class="w-95">Owner Cikopi Mang Eko</p>       
        </div>
        <div class="">
            <img class="rounded-full w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
            <h2 class="font-bold text-xl pt-10">Muchtar Koswara</h2>
            <p class="w-95">Owner Cikopi Mang Eko</p>       
        </div>
        <div class="">
            <img class="rounded-full w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
            <h2 class="font-bold text-xl pt-10">Muchtar Koswara</h2>
            <p class="w-95">Owner Cikopi Mang Eko</p>       
        </div>
    </div>
</div>

<div class="container max-w-screen px-25">
    <div class="font-lato mx-auto max-w-screen-xl place-items-start text-left mt-15 mb-3">
        <h1 class="text-3xl font-bold text-[#39312F]">Legalities & Certificate</h1>
    </div>
    <div class="py-3 mx-auto justify-center max-w-screen gap-4 grid grid-cols-4 mb-25">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
        <img class="rounded-4xl w-2xs" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
    </div>
</div>
</x-layout>