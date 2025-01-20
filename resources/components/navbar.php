<style>
:root {
    --primary-color: #F5F5F5; /* Light Gray */
    --secondary-color: #003B73; /* Navy Blue */
    --accent-color: #FFC107; /* Golden Yellow */
    --text-color: #333; /* สีตัวอักษรหลัก */
    --hover-color: #0056b3; /* สี Hover ที่เข้ากับ Navy Blue */
}

/* ปรับ Navbar ให้ใช้พาเลตต์ */
.navbar {
    background-color: var(--primary-color);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

.navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--secondary-color);
    text-transform: uppercase;
}

.navbar-toggler {
    border: none;
}

.navbar-toggler .fas {
    font-size: 1.2rem;
    color: var(--secondary-color);
}

.navbar-nav .nav-link {
    font-size: 1rem;
    font-weight: 500;
    color: var(--text-color);
    transition: color 0.2s ease;
}

.navbar-nav .nav-link:hover {
    color: var(--accent-color);
}

/* Dropdown */
.navbar-nav .dropdown-menu {
    background-color: var(--primary-color);
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar-nav .dropdown-item {
    font-size: 0.9rem;
    padding: 10px 15px;
    color: var(--text-color);
    transition: background-color 0.2s ease, color 0.2s ease;
}

.navbar-nav .dropdown-item:hover {
    background-color: var(--accent-color);
    color: #fff;
}

/* ปรับปุ่ม Sign in ให้เด่น */
.nav-item .btn-rounded {
    border-radius: 30px;
    font-size: 0.9rem;
    padding: 8px 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.nav-item .btn-rounded.btn-dark {
    background-color: var(--secondary-color);
    color: #fff;
    border: none;
}

.nav-item .btn-rounded.btn-dark:hover {
    background-color: var(--accent-color);
    color: #fff;
}

/* Navbar เมื่อ Scroll */
.navbar.scrolled {
    background-color: var(--primary-color);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
}

/* เพิ่มสไตล์สำหรับหน้าจอมือถือ */
@media (max-width: 768px) {
    .navbar-nav .nav-link {
        text-align: center;
        padding: 10px 0;
    }

    .dropdown-menu {
        position: static;
        float: none;
        width: 100%;
    }

    .dropdown-item {
        text-align: center;
    }
}
</style>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            CPVC News
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Dropdown for Groups
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-2" href="#" id="groupsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-plus-circle pe-2"></i>Groups
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="groupsDropdown">
                        <li><a class="dropdown-item" href="/group/1">Group 1</a></li>
                        <li><a class="dropdown-item" href="/group/2">Group 2</a></li>
                        <li><a class="dropdown-item" href="/group/3">Group 3</a></li>
                        <li><a class="dropdown-item" href="/group/4">Group 4</a></li>
                        <li><a class="dropdown-item" href="/group/5">Group 5</a></li>
                    </ul>
                </li> -->
                <!-- Sign in button
                <li class="nav-item ms-3">
                    <a class="btn btn-dark btn-rounded" href="/auth/login">Sign in</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});
</script>
