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
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container">
        <!-- โลโก้และชื่อแบรนด์ -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/images/cpvc-logo.jpg" alt="CPVC Logo" width="40" height="40" class="me-2">
            <span>CPVC News</span>
        </a>

        <!-- ปุ่มแฮมเบอร์เกอร์ -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- เนื้อหาใน Navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Groups Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-2" href="#" id="groupsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-people-fill pe-2"></i>Groups
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="groupsDropdown">
                        <li><a class="dropdown-item" href="#" onclick="openGroupModal(1, 'School News & Events', 'https://www.youtube.com/embed/6LCSqI0prik?si=G7j8rDRDVoE9Ewum')">Group 1: School News</a></li>
                        <li><a class="dropdown-item" href="#" onclick="openGroupModal(2, 'Educational Content', 'https://www.youtube.com/embed/SSl-Acc4XlI?si=wot9erv38eIcM9oa')">Group 2: Educational</a></li>
                        <li><a class="dropdown-item" href="#" onclick="openGroupModal(3, 'Student Achievements', 'https://www.youtube.com/embed/ZZ5LpwO-An4')">Group 3: Achievements</a></li>
                        <li><a class="dropdown-item" href="#" onclick="openGroupModal(4, 'Creative Content', 'https://www.youtube.com/embed/C0DPdy98e4c')">Group 4: Creative</a></li>
                        <li><a class="dropdown-item" href="#" onclick="openGroupModal(5, 'Special Topic', 'https://www.youtube.com/embed/OG0aK3UQrrU?si=DCnJPSJwX9NuDPB-')">Group 5: Special</a></li>
                    </ul>
                </li>

                <!-- ตัวอย่างปุ่ม Sign In -->
                <li class="nav-item ms-3">
                    <a class="btn btn-dark btn-rounded" href="/auth/login">
                        <i class="bi bi-box-arrow-in-right"></i> Sign in
                    </a>
                </li>
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

function openGroupModal(groupId, title, videoUrl) {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("modalIframe");
    
    // Insert title before iframe
    iframe.parentNode.insertBefore(modalTitle, iframe);
    
    // Set video URL
    iframe.src = videoUrl;
    modal.style.display = "flex";
    
    // Reset likes and comments for new group
    document.getElementById("likeCount").textContent = "0";
    document.getElementById("commentsList").innerHTML = '<p class="text-muted">No comments yet. Be the first to comment!</p>';
}
</script>
