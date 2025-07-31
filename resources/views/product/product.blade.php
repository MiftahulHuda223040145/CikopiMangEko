<x-layout>
@section('title', 'Product')
{{-- Hero --}}
<section class="bg-center bg-no-repeat bg-cover min-h-[80vh] sm:min-h-[90vh] md:min-h-screen" style="background-image: url('{{ asset('image/hero-image-product.png') }}')">
    <div class="px-4 place-items-start text-left pt-56 pb-30 max-w-[1920px] mx-auto fade-hero">
        <div class="pt-40 lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10">
            <h1 class="mb-4 font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl hero-text min-2xl:text-8xl text-4xl">Cikopi</h1>
            <h1 class="mb-4 font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl hero-text min-2xl:text-8xl text-4xl">Product</h1>
            <p class="min-2xl:w-130 lg:w-80 md:w-80 sm:w-auto mb-8 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs font-lato lato-regular text-white min-2xl:text-3xl">Cikopi mang eko merupakan tempat penyedia biji  kopi, jasa roasting, dan  distributor biji kopi. </p>
        </div>
    </div>
</section>

{{-- Main Content --}}
<div class="text-[#39312F] container max-w-[1920px] mx-auto lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 my-15 font-lato fade-in-up place-items-center justify-center">
    <div class="font-lato lg:gap-40 md:gap-10 sm:gap-10 max-[640px]:gap-10 justify-center flex lg:flex-row md:flex-row sm:flex-col max-[640px]:flex-col place-items-start text-left py-3">
        <div class="">
            <img class="min-2xl:w-100 w-90 rounded-3xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/green-bean.png') }}" alt="green-bean">
            <div class="py-3">
                <h2 class="lato-bold lg:text-xl md-text-xl sm:text-base min-2xl:text-3xl">Grean Bean</h2>
                <p class="min-2xl:w-80 lg:w-45 md:w-45 sm:w-auto lg:text-base min-2xl:text-2xl md:text-sm sm:text-sm max-[640px]:text-xs lato-regular">Rp. 50.000 - Rp. 90.000</p>  
            </div>
        </div>
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl lato-bold">Green Bean</h1>
            <p class="lg:w-170 md:w-auto my-5 text-justify lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base lato-regular">Green Bean merupakan biji kopi mentah yang belum disangrai. Green Bean merupakah bahan utama dalam pembuatan kopi, dan kualitasnya menentukan cita rasa akhir kopi yang dihasilkan. Cikopi mang eko menyediakan green bean dari berbagai daerah atau gunung yang ada di Indonesia.</p>
        </div>
    </div>
</div>
<div class="text-[#39312F] container max-w-[1920px] mx-auto lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 my-15 fade-in-up place-items-center justify-center">
    <div class="font-lato lg:gap-60 md:gap-10 sm:gap-10 max-[640px]:gap-10 justify-center flex lg:flex-row md:flex-row sm:flex-col-reverse max-[640px]:flex-col-reverse place-items-start text-left py-3">
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl lato-bold">Roasted Bean</h1>
            <p class="lg:w-150 md:w-auto my-5 text-justify lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base lato-regular">Green Bean merupakan biji kopi yang di panggang atau sangrai, proses ini bertujuan untuk mengeluarkan aroma, dan roasted bean siap untuk digiling dan diseduh. Cikopi mang eko menyediakan roasted bean dari aceh hingga papua.</p>
        </div>
        <div class="">
            <img class="min-2xl:w-100 w-90 rounded-3xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/foto-acehgayo.png') }}" alt="foto-acehgayo">
            <div class="py-3">
                <h2 class="lato-bold lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base">Roasted Bean</h2>
                <p class="min-2xl:w-80 lg:w-50 md:w-50 sm:w-auto lg:text-base min-2xl:text-2xl md:text-sm sm:text-sm max-[640px]:text-xs lato-regular">Rp. 150.000 - Rp. 190.000</p>       
            </div>
        </div>
    </div>
</div>
<div class="text-[#39312F] container max-w-[1920px] mx-auto lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 my-15 fade-in-up place-items-center justify-center">
    <div class="font-lato lg:gap-55 md:gap-10 sm:gap-10 max-[640px]:gap-10 justify-center flex lg:flex-row md:flex-row sm:flex-col max-[640px]:flex-col place-items-start text-left py-3">
        <div class="">
            <img class="min-2xl:w-100 w-90 rounded-3xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/roasting-service.png') }}" alt="roasting-service">
            <div class="py-3">
                <h2 class="lato-bold lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base min-2xl:w-80 lg:w-45 md:w-45 sm:w-auto">Roasting Service</h2>
                <p class="lg:text-base min-2xl:text-2xl md:text-sm sm:text-sm max-[640px]:text-xs lato-regular">Rp. 25.000/Kg</p>       
            </div>
        </div>
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl lato-bold">Roasting Service</h1>
            <p class="lg:w-140 md:w-auto my-5 lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base text-justify lato-regular">Roasting Service merupakan jasa yang diberikan oleh cikopi mang eko terhadap konsumen. Adapun service lainnya, seperti jasa giling biji kopi, dan jasa mengajarkan menyeduh kopi secara gratis.</p>
        </div>
    </div>
</div>
<div class="text-[#39312F] container max-w-[1920px] mx-auto lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 my-15 fade-in-up place-items-center justify-center">
    <div class="font-lato lg:gap-50 md:gap-10 sm:gap-10 max-[640px]:gap-10 justify-center flex lg:flex-row md:flex-row sm:flex-col-reverse max-[640px]:flex-col-reverse place-items-start text-left py-3">
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl lato-bold">Coffee Making Equipment</h1>
            <p class="lg:w-150 md:w-auto my-5 text-justify lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base lato-regular">Cikopi mang eko menyediakan berbagai alat menyeduh kopi, baik untuk rumahan maupun profesional.</p>
        </div>
        <div class="place-items-end text-left">
            <div class="pr-5">
                <img class="min-2xl:w-100 w-90 rounded-3xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/coffee-making-equipment.png') }}" alt="coffee-making-equipment">
                <div class="py-3">
                    <h2 class="lato-bold lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base">Coffee Making Equipment</h2>
                    <p class="min-2xl:w-80 lg:w-65 md:w-65 sm:w-auto lg:text-base min-2xl:text-2xl md:text-sm sm:text-sm max-[640px]:text-xs lato-regular">Rp. 70.000 - Rp. 3.000.000</p>       
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-[#39312F] container max-w-[1920px] mx-auto lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 mt-15 mb-40 fade-in-up place-items-center justify-center">
    <div class="font-lato lg:gap-55 md:gap-10 sm:gap-10 max-[640px]:gap-10 justify-center flex lg:flex-row md:flex-row sm:flex-col max-[640px]:flex-col place-items-start text-left py-3">
        <div class="">
            <img class="min-2xl:w-100 w-90 rounded-3xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('image/product-hampers.png') }}" alt="product-hampers">
            <div class="py-3">
                <h2 class="lato-bold lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base">Side Product</h2>
                <p class="min-2xl:w-80 lg:w-45 md:w-45 sm:w-auto lg:text-base min-2xl:text-2xl md:text-sm sm:text-sm max-[640px]:text-xs lato-regular">Rp. 55.000 - 70.000/L</p>       
            </div>
        </div>
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl lato-bold">Side Product</h1>
            <p class="lg:w-150 md:w-auto my-5 text-justify lg:text-xl min-2xl:text-3xl md-text-xl sm:text-base lato-regular">Side product merupakan produk sekunder yang dijual oleh cikopi mang eko, seperti minuman Espresso Concentrate, dan Eskosu (kopi susu).</p>
        </div>
    </div>
</div>
</x-layout>