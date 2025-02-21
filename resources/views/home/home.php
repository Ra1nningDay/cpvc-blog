<?php include __DIR__ . '/../../../resources/components/header.php'; ?>

<header>
    <?php include __DIR__ . '/../../../resources/components/navbar.php'; ?>
</header>

<!-- Hero Section -->
<div class="hero-section position-relative mb-5">
    <div class="hero-gradient position-relative" style="height: 500px; background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
        <!-- Animated pattern overlay -->
        <div class="hero-pattern"></div>
        
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-4 fw-bold text-shadow">Chumphon Vocational College News</h1>
                    <p class="lead mb-4">Our Source for Vocational Updates and Achievements</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Breaking News Section -->
    <section class="breaking-news mb-5">
        <div class="breaking-banner p-4 rounded-3 shadow-sm" style="background: linear-gradient(135deg, #0062cc, #0096ff);">
            <span class="badge bg-danger mb-2">BREAKING NEWS</span>
            <h2 class="text-white h3 mb-3">
                <i class="bi bi-megaphone-fill"></i> Latest Updates from CPVC
            </h2>
            <div class="text-white opacity-90">
                <p class="lead">
                    Stay connected with the latest developments at Chumphon Vocational College. 
                    From academic achievements to campus events, find all the important news here.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured News Section -->
    <section class="featured-news mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title h3">
                <i class="bi bi-star-fill text-warning"></i> Featured Stories
            </h2>
            <a href="#" class="btn btn-outline-primary btn-sm">View All</a>
        </div>
        <div class="featured-slider">
            <?php include __DIR__ . '/../../../resources/components/splide.php'; ?>
        </div>
    </section>

    <!-- Recent News Section -->
    <section class="recent-news mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title h3">
                <i class="bi bi-clock-history text-primary"></i> Latest Articles
            </h2>
            <a href="#" class="btn btn-outline-primary btn-sm">More News</a>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <img src="/images/ai-kitchen.jpg" class="card-img-top" alt="AI in Kitchen">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Technology</span>
                        <h3 class="card-title h4">
                            <i class="bi bi-lightning-fill text-danger"></i> Technology in Food: AI in the Kitchen
                        </h3>
                        <p class="card-text text-muted">How artificial intelligence is transforming the way we cook and eat.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="bi bi-calendar3"></i> March 15, 2024</small>
                            <a href="#" class="btn btn-link text-primary p-0">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <img src="/images/restaurant.jpg" class="card-img-top" alt="Top Restaurants">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Dining</span>
                        <h3 class="card-title h4">
                            <i class="bi bi-shop-window"></i> Top 10 Restaurants of 2025
                        </h3>
                        <p class="card-text text-muted">A list of the best dining experiences you can't miss this year.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="bi bi-calendar3"></i> March 14, 2024</small>
                            <a href="#" class="btn btn-link text-primary p-0">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Add this CSS to your stylesheet -->
<style>
.hover-shadow:hover {
    transform: translateY(-5px);
}
.transition {
    transition: all 0.3s ease;
}
.opacity-90 {
    opacity: 0.9;
}
.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%),
                      linear-gradient(-45deg, rgba(255,255,255,0.1) 25%, transparent 25%),
                      linear-gradient(45deg, transparent 75%, rgba(255,255,255,0.1) 75%),
                      linear-gradient(-45deg, transparent 75%, rgba(255,255,255,0.1) 75%);
    background-size: 20px 20px;
    opacity: 0.1;
}

.text-shadow {
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

@media (max-width: 768px) {
    .hero-gradient {
        height: 400px;
    }
    
    .display-4 {
        font-size: 2.5rem;
    }
}
</style>

<?php include __DIR__ . '/../../../resources/components/footer.php'; ?>
