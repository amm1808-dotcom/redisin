@include('layouts.header')

    <!-- Banner / Carousel (Dibatasi max width dan dipusatkan) -->
    <div class="max-w-7xl mx-auto mt-4 rounded-lg overflow-hidden shadow-lg">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/banner1.png') }}" alt="Banner 1" class="w-full h-[400px] object-cover">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/banner2.png') }}" alt="Banner 2" class="w-full h-[400px] object-cover">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/banner3.png') }}" alt="Banner 3" class="w-full h-[400px] object-cover">
                </div>
            </div>
            <!-- Navigasi Swiper -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

<!-- Konten Berita -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            @php
                $thumbnail = $post->thumbnail_url;

                if (!$thumbnail) {
                    preg_match('/<img[^>]+src="([^">]+)"/', $post->post_content, $matches);
                    $imagePath = $matches[1] ?? null;

                    if ($imagePath) {
                        if (str_starts_with($imagePath, '/wp-content')) {
                            $thumbnail = 'https://daftarkampus.spmb.teknokrat.ac.id' . $imagePath;
                        } elseif (str_starts_with($imagePath, 'http')) {
                            $thumbnail = $imagePath;
                        } else {
                            $thumbnail = 'https://daftarkampus.spmb.teknokrat.ac.id/wp-content/uploads/' . ltrim($imagePath, '/');
                        }
                    } else {
                        $thumbnail = 'https://via.placeholder.com/600x400?text=No+Image';
                    }
                }
            @endphp

            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden flex flex-col">
                <img src="{{ $thumbnail }}" alt="Thumbnail" class="w-full h-52 sm:h-56 object-cover">
                <div class="p-5 flex-1 flex flex-col">
                    <h2 class="text-lg font-bold text-gray-800 hover:text-blue-600 transition-colors duration-200 mb-2">
                        <a href="{{ route('post.show', ['slug' => $post->slug]) }}">
                            {{ $post->post_title }}
                        </a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-3 flex-1">
                        {{ \Illuminate\Support\Str::limit(strip_tags($post->post_content), 130, '...') }}
                    </p>
                    <div class="text-xs text-gray-500 mt-auto">
                        {{ \Carbon\Carbon::parse($post->post_date)->translatedFormat('d F Y') }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center">
        {{ $posts->links('pagination::tailwind') }}
    </div>
</div>

@include('layouts.footer')
