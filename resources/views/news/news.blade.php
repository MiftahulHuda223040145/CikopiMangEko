<x-layout>
@section('title', 'News')
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-news.png') }}')">
    <div class="px-4 max-w-screen-xl place-items-start text-left pt-65 fade-hero">
        <div class="pt-90 lg:px-25 md:px-25 sm:px-10 max-[640px]:px-10">
            <h1 class="mb-10 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cikopi Mang Eko News</h1>
            <p class="md mb-8 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs font-lato font-normal text-white">Berbagai berita tentang Cikopi Mang Eko.</p>
        </div>
    </div>
</section>

{{-- News --}}
<div class="text-[#39312F] container max-w-screen mt-15 mb-40 font-lato fade-in-up">
    <div class="lg:px-25 md:px-25 sm:px-10 max-[640px]:px-10 lg:grid grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-8 justify-center">
        <div class="mb-8">
            <div class="h-70 rounded-4xl bg-cover bg-center transform transition duration-500 ease-out hover:scale-105" style="background-image: url('{{ asset('storage/image/cikopi-news1.png') }}')"></div>
            <h3 class="lg:text-xl md-text-xl sm:text-base font-semibold pt-6 lg:w-80 md:w-80 sm:w-auto">BENEFIT DARI MENGKONSUMSI KOPI DI PAGI HARI </h3>
            <p class="text-justify py-7 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Dari penelitian yang dilakukan, kafein pada kopi memang bisa meningkatkan kewaspadaan dan konsentrasi, tetapi tidak berdampak langsung pada kreativitas seseorang. Selain itu, penelitian lain juga menyebut bahwa kopi tidak memiliki dampak pada kinerja otak, terutama pada memori. Namun, segelas kopi di pagi hari diketahui bisa membantu menjaga suasana hati tetap baik dan terhindar dari stres. Selain itu, ada beberapa manfaat lain yang bisa didapat dari konsumsi kopi pada pagi hari.</p>
            <p class="text-justify pt-3 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Minum kopi di pagi hari dapat memberikan berbagai manfaat, seperti meningkatkan energi, meningkatkan fokus dan konsentrasi serta membantu menurun kan berat badan. Selain itu dapat meningkatkan kesehatan jantung, risiko diabetes, dan menurunkan resiko penyakit Alzheimer dan Parkinson.</p>
        </div>
        <div class="">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl font-bold text-[#39312F] mb-5">Berita Terbaru</h1>
            <div class="mb-10">
                <img class="rounded-4xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('storage/image/cikopi-news3.png') }}" alt="">
                <h3 class="lg:text-xl md-text-xl sm:text-base font-semibold pt-6">Cikopi Mang Eko AT Urban  Village 2025</h3>
                <p class="text-justify py-2 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Cikopi Mang Eko dipercaya sebagai objek penilitian oleh Mahasiswa Telkom University, dalam rangka pengembangan businees model UMKM.</p>
            </div>
            <div class="">
                <img class="rounded-4xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('storage/image/cikopi-news2.png') }}" alt="">
                <h3 class="lg:text-xl md-text-xl sm:text-base font-semibold pt-6 lg:w-80 md:w-80 sm:w-auto">BANDUNG WEEK MARKET 2024</h3>
                <p class="text-justify py-2 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Cikopi Mang Eko  mengikuti event yang di buat oleh dinas perdagangan dan perindustrian Kota Bandung, yang dilaksanakan di Bali pada tanggal 7-12 mei 2024.</p>
            </div>
        </div>
    </div>
</div>
</x-layout>