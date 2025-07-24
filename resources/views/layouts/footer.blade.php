<!-- SwiperJS Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>


@include('layouts.swiper')
<!-- Footer -->
<footer class="bg-white text-gray-800 border-t mt-12">
    <div class="text-center py-4">
        <img src="{{ asset('images/logofooter.png') }}" alt="Logo" class="w-20 mx-auto">
    </div>
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm py-6 border-t">
        <div>
            <h3 class="text-red-700 font-semibold mb-2">CONTACT</h3>
            <p><i class="fas fa-map-marker-alt"></i> Universitas Teknokrat Indonesia</p>
            <p>Jl. Zainal Abidin Pagaralam, No.9-11 Labuhan Ratu</p>
            <p>Kota Bandar Lampung Provinsi Lampung, 35132</p>
            <p><i class="fas fa-phone"></i> (+62721) 702022 (Hunting)</p>
            <p><i class="fab fa-whatsapp"></i> +62 822-7992-0145 (Chat Only)</p>
            <p><i class="fas fa-envelope"></i> uti@teknokrat.ac.id</p>
        </div>
        <div>
            <h3 class="text-red-700 font-semibold mb-2">UNITS</h3>
            <ul class="space-y-1">
                <li>Library</li>
                <li>Student Affair</li>
                <li>Quality Assurance</li>
                <li>Career and Training Center</li>
                <li>Pusat Inkubator Bisnis</li>
                <li>Satgas PPKS Teknokrat</li>
            </ul>
        </div>
        <div>
            <h3 class="text-red-700 font-semibold mb-2">SERVICES</h3>
            <ul class="space-y-1">
                <li>Academics</li>
                <li>Online Learning (SPADA)</li>
                <li>Competence Based Test</li>
                <li>e-Jurnal</li>
                <li>e-Parent</li>
                <li>e-Certificate</li>
                <li>Alumni</li>
            </ul>
        </div>
        <div>
            <h3 class="text-red-700 font-semibold mb-2">ADMISSION</h3>
            <ul class="space-y-1">
                <li>Register Now</li>
                <li>Tuition fee</li>
                <li>Scholarship</li>
            </ul>
        </div>
    </div>
    <div class="text-center text-xs text-yellow-400 bg-red-800 py-3">
        © COPYRIGHT 2025. ALL RIGHTS RESERVED BY <span class="text-white">UNIVERSITAS TEKNOKRAT INDONESIA</span>
    </div>
</footer>
  
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({once: true});
</script>
</body>












