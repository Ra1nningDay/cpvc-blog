<div id="splide-slider" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <!-- การ์ดกลุ่ม 1 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="assets/images/1.png" alt="School News & Events" class="card-thumbnail">
                    <div class="card-content">
                        <h3>School News & Events</h3>
                        <p>Highlights from sports events, festivals, etc.</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/6LCSqI0prik?si=G7j8rDRDVoE9Ewum')">Watch Video</button>
                    </div>
                </div>
            </li>

            <!-- การ์ดกลุ่ม 2 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="assets/images/2.png" alt="Educational Content" class="card-thumbnail">
                    <div class="card-content">
                        <h3>Educational Content</h3>
                        <p>Skill-building activities, trending topics (AI, climate change).</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/SSl-Acc4XlI?si=wot9erv38eIcM9oa')">Watch Video</button>
                    </div>
                </div>
            </li>

            <!-- การ์ดกลุ่ม 3 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="assets/images/compt.jpg" alt="Student Achievements" class="card-thumbnail">
                    <div class="card-content">
                        <h3>Student Achievements</h3>
                        <p>Interview with students who participated in competition.</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/ZZ5LpwO-An4')">Watch Video</button>
                    </div>
                </div>
            </li>

            <!-- การ์ดกลุ่ม 4 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="assets/images/4.png" alt="Creative Content" class="card-thumbnail">
                    <div class="card-content">
                        <h3>Creative Content</h3>
                        <p>Short film, music videos, animation, advertisement.</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/7NhFHeaQel4?si=jOnYnEFCgU9knfvN')">Watch Video</button>
                    </div>
                </div>
            </li>

            <!-- การ์ดกลุ่ม 5 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="assets/images/group5.jpg" alt="Special Topic" class="card-thumbnail">
                    <div class="card-content">
                        <h3>Special Topic</h3>
                        <p>Insights into climate change, AI, and future challenges.</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/OG0aK3UQrrU?si=DCnJPSJwX9NuDPB-')">Watch Video</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Modal -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        
        <!-- Article Header -->
        <div class="article-header mb-4">
            <h2 id="modalTitle" class="fw-bold"></h2>
            <div class="article-meta d-flex align-items-center text-muted mb-3">
                <span class="me-3"><i class="bi bi-calendar3"></i> <span id="articleDate"></span></span>
                <span class="me-3"><i class="bi bi-person-circle"></i> Group Members</span>
                <span><i class="bi bi-eye"></i> <span id="viewCount">0</span> views</span>
            </div>
            
            <!-- Tags -->
            <div class="article-tags mb-3">
                <span class="badge bg-primary me-2">News</span>
                <span class="badge bg-secondary me-2">Campus</span>
                <span class="badge bg-info">2024</span>
            </div>
        </div>

        <!-- Video Container -->
        <div class="video-container mb-4">
            <iframe id="modalIframe" src="" frameborder="0" allowfullscreen></iframe>
        </div>

        <!-- Article Description -->
        <div class="article-description mb-4">
            <h4 class="mb-3">About This Story</h4>
            <div class="description-content">
                <p id="modalDescription" class="text-muted">
                    <!-- Description will be inserted here via JavaScript -->
                </p>
            </div>
            
            <!-- Article Stats -->
            <div class="article-stats d-flex justify-content-between text-muted mt-4 pt-3 border-top">
                <div>Reading time: <span id="readingTime">5 min</span></div>
                <div>Category: <span id="articleCategory">Campus News</span></div>
            </div>
        </div>

        <!-- Social Share -->
        <div class="share-buttons mb-4">
            <button class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-facebook"></i> Share</button>
            <button class="btn btn-sm btn-outline-info me-2"><i class="bi bi-twitter"></i> Tweet</button>
            <button class="btn btn-sm btn-outline-success"><i class="bi bi-whatsapp"></i> Share</button>
        </div>

        <!-- Interaction Section -->
        <div class="interaction-section border-top pt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <button id="likeBtn" class="btn btn-outline-primary">
                    <i class="bi bi-hand-thumbs-up"></i> Like (<span id="likeCount">0</span>)
                </button>
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-bookmark"></i> Save
                </button>
            </div>

            <!-- Comments -->
            <div class="comments-section">
                <h5 class="mb-3"><i class="bi bi-chat-square-text"></i> Comments</h5>
                <div class="comment-form mb-4">
                    <textarea id="commentInput" class="form-control mb-2" rows="2" placeholder="Share your thoughts..."></textarea>
                    <button class="btn btn-primary" onclick="addComment()">Post Comment</button>
                </div>
                <div id="commentsList" class="comments-list">
                    <p class="text-muted">No comments yet. Be the first to comment!</p>
                </div>
            </div>
        </div>

        <!-- Related Articles -->
        <div class="related-articles mt-4 pt-4 border-top">
            <h5 class="mb-3">Related Articles</h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="Related">
                        <div class="card-body">
                            <h6 class="card-title">Related Article 1</h6>
                        </div>
                    </div>
                </div>
                <!-- Add more related articles -->
            </div>
        </div>
    </div>
</div>

<style>
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 1050;
    overflow-y: auto;
    padding: 20px;
}

.modal-content {
    max-width: 800px;
    width: 90%;
    margin: 20px auto;
    background: #fff;
    border-radius: 8px;
    padding: 2rem;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
}

.video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    margin-bottom: 1.5rem;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.comments-list {
    max-height: 300px;
    overflow-y: auto;
    padding-right: 10px;
}

@media (max-width: 768px) {
    .modal-content {
        width: 95%;
        padding: 1rem;
        margin: 10px auto;
    }
    
    .article-meta {
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .share-buttons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }
}

@media (max-height: 600px) {
    .modal-content {
        max-height: 95vh;
    }
}

</style>

<script>
    // เปิด Modal พร้อม iframe
    function openModal(videoUrl) {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("modalIframe");
    iframe.src = videoUrl;
    modal.style.display = "flex";
    }

    // ปิด Modal
    function closeModal() {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("modalIframe");
    iframe.src = ""; // ล้าง URL เพื่อหยุดวิดีโอ
    modal.style.display = "none";
    }

</script>