<?php include __DIR__ . '/../../../resources/components/header.php'; ?>

<header>
    <?php include __DIR__ . '/../../../resources/components/navbar.php'; ?>
</header>

<div class="container">
    <!-- About Website Section -->
    <section class="breaking-news my-5">
        <div class="breaking-banner p-4 bg-secondary text-white">
            <h2>
                <i class="bi bi-megaphone-fill"></i> Welcome to Chumphon Vocational College News Portal
            </h2>
            <p>
                This platform is dedicated to providing the latest updates, announcements, 
                and achievements of Chumphon Vocational College. Stay informed about academic events, 
                extracurricular activities, student projects, and opportunities that support 
                the development of our students and community.
            </p>
            <p>
                Whether you're a student, parent, or educator, explore our content to discover 
                what makes Chumphon Vocational College a hub of innovation and excellence in education.
            </p>
        </div>
    </section>



    <!-- Featured News Section -->
    <section class="featured-news my-5">
        <h2 class="section-title mb-4">
            <i class="bi bi-star-fill text-warning"></i> Featured News
        </h2>
        <div class="row">
            <?php include __DIR__ . '/../../../resources/components/splide.php'; ?>
        </div>
    </section>


    <!-- Recent News Section -->
    <div class="recent-news my-5">
        <h2 class="section-title mb-4">
            <i class="bi bi-clock-history text-primary"></i> Recent News
        </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="news-item">
                    <h3>
                        <i class="bi bi-lightning-fill text-danger"></i> Technology in Food: AI in the Kitchen
                    </h3>
                    <p>How artificial intelligence is transforming the way we cook and eat.</p>
                    <a href="#" class="text-primary">
                        Read More <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="news-item">
                    <h3>
                        <i class="bi bi-shop-window"></i> Top 10 Restaurants of 2025
                    </h3>
                    <p>A list of the best dining experiences you can't miss this year.</p>
                    <a href="#" class="text-primary">
                        Read More <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include __DIR__ . '/../../../resources/components/footer.php'; ?>
