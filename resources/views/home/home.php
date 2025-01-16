<?php include __DIR__ . '/../../../resources/components/header.php'; ?>

<header>
    <?php include __DIR__ . '/../../../resources/components/navbar.php'; ?>
</header>

<div class="container">
    <div class="home-banner mt-5">
        <div class="banner-grid">
            <h1 class="title mt-auto mb-0">Welcome</h1>
            <p class="subtitle mb-2 mt-auto">
                What we'd love you to know about food chefs, restaurants, news, and the best food in the world
            </p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div id="splide-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card 2" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                            <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card 3" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card 3</h5>
                            <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card 4" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card 4</h5>
                            <p class="card-text">Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card 5" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card 5</h5>
                            <p class="card-text">Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<main class="container py-4">
    <div class="row">
        <!-- บทความเด่นทางซ้าย -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <img src="https://via.placeholder.com/800x400" class="card-img-top rounded-top" alt="Main Article Image">
                <div class="card-body">
                    <h2 class="card-title mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <p class="card-text text-muted mb-2">Lorem · October 20, 2024</p>
                    <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                    <a href="/article/lorem-main" class="btn btn-primary btn-lg">Read More</a>
                </div>
            </div>
        </div>


        <!-- บทความย่อยทางขวา -->
        <div class="col-lg-6">
            <div class="list-group">
                <!-- บทความย่อย 1 -->
                <a href="/article/lorem-paris" class="list-group-item list-group-item-action d-flex align-items-start">
                    <img src="https://via.placeholder.com/100" class="me-3 rounded" alt="Thumbnail">
                    <div>
                        <h5 class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                        <small class="text-muted">Lorem · October 20, 2024</small>
                    </div>
                </a>
                <!-- บทความย่อย 2 -->
                <a href="/article/lorem-barcelona" class="list-group-item list-group-item-action d-flex align-items-start">
                    <img src="https://via.placeholder.com/100" class="me-3 rounded" alt="Thumbnail">
                    <div>
                        <h5 class="mb-1">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                        <small class="text-muted">Lorem · October 20, 2024</small>
                    </div>
                </a>
                <!-- บทความย่อย 3 -->
                <a href="/article/lorem-london" class="list-group-item list-group-item-action d-flex align-items-start">
                    <img src="https://via.placeholder.com/100" class="me-3 rounded" alt="Thumbnail">
                    <div>
                        <h5 class="mb-1">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</h5>
                        <small class="text-muted">Lorem · October 20, 2024</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../../../resources/components/footer.php'; ?>
