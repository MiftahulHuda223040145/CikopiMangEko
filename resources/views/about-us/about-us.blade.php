<x-layout>
@section('title', 'About Us')
{{-- Hero --}}
<section class="bg-center bg-no-repeat bg-cover min-h-[80vh] sm:min-h-[90vh] md:min-h-screen" style="background-image: url('{{ asset('image/hero-image-aboutus.png') }}')">
    <div class="px-4 place-items-start text-left pt-56 pb-10 min-h-[80vh] sm:min-h-[90vh] md:min-h-screen fade-hero lg:backdrop-brightness-100 md:backdrop-brightness-50 sm:backdrop-brightness-50 max-[640px]:backdrop-brightness-50 max-w-[1920px] mx-auto">
        <div class="pt-60 lg:pl-15 md:pl-15 sm:px-10 max-[640px]:px-10">
            <h1 class="mb-4 font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl min-2xl:text-8xl hero-text text-4xl">About Us</h1>
            <p class="min-2xl:w-130 lg:w-80 md:w-80 sm:w-auto mb-8 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs font-lato text-white lato-regular min-2xl:text-3xl">Cikopi mang eko ini berdiri pada tahun 2016 oleh Muchtar koswara</p>
        </div>
    </div>
</section>

{{-- About Our Team --}}
<div class="text-[#39312F] container lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 max-w-[1920px] font-lato mx-auto fade-in-up">
    <div class="font-lato max-w-[1920px] place-items-start text-left mt-15 mb-3">
        <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl min-2xl:text-6xl lato-bold">About Our Team</h1>
    </div>
    <div class="py-3 justify-center max-w-[1920px] gap-8 grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 max-[640px]:grid-cols-2 mb-25">
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/muchtar-koswara.png') }}" alt="muchtar-koswara">
            </div>
            <h2 class="lato-bold lg:text-xl md-text-xl sm:text-base min-2xl:text-3xl pt-10">Muchtar Koswara</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs lato-regular min-2xl:text-3xl">Owner Cikopi Mang Eko</p>       
        </div>
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/dodi-setiadi.png') }}" alt="dodi-setiadi">
            </div>
            <h2 class="lato-bold lg:text-xl md-text-xl sm:text-base pt-10 min-2xl:text-3xl">Dodi Setiadi</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs lato-regular min-2xl:text-3xl">Store Manager</p>       
        </div>
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/novi-indriawan.png') }}" alt="novi-indriawan">
            </div>
            <h2 class="lato-bold lg:text-xl md-text-xl min-2xl:text-3xl sm:text-base pt-10">Novi Indriawan</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs lato-regular min-2xl:text-3xl">Production Manager</p>       
        </div>
        <div class="">
            <div class="place-items-center">
                <img class="rounded-full w-2xs transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/bunga-utami.png') }}" alt="bunga-utami">
            </div>
            <h2 class="lato-bold lg:text-xl md-text-xl sm:text-base pt-10 min-2xl:text-3xl">Bunga Utami</h2>
            <p class="text-left lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs lato-regular min-2xl:text-3xl">Sales and Marketing</p>       
        </div>
    </div>
</div>

<div class="text-[#39312F] container max-w-[1920px] lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 my-40 font-lato mx-auto fade-in-up">
    <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl min-2xl:text-6xl lato-bold mb-10">Visi & Misi</h1>
    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-20">
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl min-2xl:text-6xl lato-bold">Visi</h1>
            <p class="my-5 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs lato-regular min-2xl:text-2xl">Menjadi penyedia biji kopi premium dari seluruh kepulauan di Indonesia yang mengedepankan kualitas, keberlanjutan, dan kesejahteraan petani lokal, serta memberikan pengalaman kopi terbaik pada komsumen global.</p>
        </div>
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl min-2xl:text-6xl lato-bold">Misi</h1>
            <ol class="list-decimal list-inside my-5 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs min-2xl:text-2xl">
                <li class="pb-4 lato-regular">Memberikan edukasi kepada para penggiat kopi tentang proses pengolahan kopi yang baik dan benar.</li>
                <li class="pb-4 lato-regular">Mempromosikan komoditas kopi yang berasal dari tiap daerah di Indonesia, khusunya di kota Bandung.</li>
                <li class="pb-4 lato-regular">Menjamin penggunaan bahan baku (green bean) yang berkualitas.</li>
                <li class="pb-4 lato-regular">Meningkatkan budaya ngopi sehat di Masyarakat.</li>
            </ol>
        </div>
    </div>
</div>
</x-layout>