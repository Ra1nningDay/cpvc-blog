<footer class="text-center text-lg-start text-white" style="background-color: #45526e">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- About Us -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        About Us
                    </h6>
                    <p>
                        Welcome to Chumphon Vocational College News Portal. This platform provides updates, announcements, 
                        and achievements from our vibrant community. Stay informed about events and innovations shaping our college.
                    </p>
                </div>
                <!-- Quick Links -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Quick Links</h6>
                    <p><i class="bi bi-arrow-right-circle-fill"></i> <a href="/about" class="text-white">About the College</a></p>
                    <p><i class="bi bi-arrow-right-circle-fill"></i> <a href="/news" class="text-white">News & Announcements</a></p>
                    <p><i class="bi bi-arrow-right-circle-fill"></i> <a href="/events" class="text-white">Upcoming Events</a></p>
                    <p><i class="bi bi-arrow-right-circle-fill"></i> <a href="/contact" class="text-white">Contact Us</a></p>
                </div>
                <!-- Contact -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="bi bi-geo-alt-fill"></i> F5WM+FJ9, Pisit Payaban Road, Tha Taphao, Mueang Chumphon, Chumphon 86000</p>
                    <p><i class="bi bi-telephone-fill"></i> +66 77 511 218</p>
                    <p><i class="bi bi-envelope-fill"></i> info@chumphonvc.ac.th</p>
                </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Social Media & Copyright -->
        <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
                <!-- Copyright -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <div class="p-3">
                        © 2025 Chumphon Vocational College. All Rights Reserved.
                    </div>
                </div>
                <!-- Social Media -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <a href="https://www.facebook.com" class="btn btn-outline-light btn-floating m-1" role="button">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://twitter.com" class="btn btn-outline-light btn-floating m-1" role="button">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com" class="btn btn-outline-light btn-floating m-1" role="button">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com" class="btn btn-outline-light btn-floating m-1" role="button">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- Section: Social Media & Copyright -->
    </div>
    <!-- Grid container -->
</footer>


<!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#splide-slider', {
            type: 'loop',         // วนซ้ำ
            perPage: 3,           // แสดง 3 การ์ดพร้อมกัน
            focus: 'center',      // การ์ดตรงกลางเน้นโฟกัส
            gap: '1rem',          // ระยะห่างระหว่างการ์ด
            autoplay: true,       // เล่นอัตโนมัติ
            interval: 3000,       // เวลาระหว่างแต่ละการ์ด (ms)
            pagination: false,
            breakpoints: {
                768: {
                    perPage: 1,   // แสดง 1 การ์ดเมื่อหน้าจอเล็กกว่า 768px
                },
            },
        }).mount();
    });
</script>

</body>
</html>
