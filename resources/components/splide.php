<div id="splide-slider" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <!-- การ์ดกลุ่ม 1 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="https://picsum.photos/300/200?random=1" alt="School News & Events" class="card-thumbnail">
                    <div class="card-content">
                        <h3>School News & Events</h3>
                        <p>Highlights from sports events, festivals, etc.</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/dQw4w9WgXcQ')">Watch Video</button>
                    </div>
                </div>
            </li>

            <!-- การ์ดกลุ่ม 2 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="https://picsum.photos/300/200?random=2" alt="Educational Content" class="card-thumbnail">
                    <div class="card-content">
                        <h3>Educational Content</h3>
                        <p>Skill-building activities, trending topics (AI, climate change).</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/3JZ_D3ELwOQ')">Watch Video</button>
                    </div>
                </div>
            </li>

            <!-- การ์ดกลุ่ม 3 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="https://picsum.photos/300/200?random=3" alt="Student Achievements" class="card-thumbnail">
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
                    <img src="https://picsum.photos/300/200?random=4" alt="Creative Content" class="card-thumbnail">
                    <div class="card-content">
                        <h3>Creative Content</h3>
                        <p>Short film, music videos, animation, advertisement.</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/C0DPdy98e4c')">Watch Video</button>
                    </div>
                </div>
            </li>

            <!-- การ์ดกลุ่ม 5 -->
            <li class="splide__slide">
                <div class="brutalist-card">
                    <img src="https://picsum.photos/300/200?random=5" alt="Special Topic" class="card-thumbnail">
                    <div class="card-content">
                        <h3>Special Topic</h3>
                        <p>Insights into climate change, AI, and future challenges.</p>
                        <button class="btn-solid" onclick="openModal('https://www.youtube.com/embed/tgbNymZ7vqY')">Watch Video</button>
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
        <iframe id="modalIframe" src="" frameborder="0" allowfullscreen></iframe>
        
        <!-- Like and Comment Section -->
        <div class="interaction-section mt-3">
            <!-- Like Button -->
            <div class="like-button">
                <button id="likeBtn" class="btn btn-outline-primary" onclick="toggleLike()">👍 Like (<span id="likeCount">0</span>)</button>
            </div>
            
            <!-- Comment Section -->
            <div class="comment-section mt-4">
                <h5>Comments</h5>
                <div id="commentsList" class="comments-list">
                    <p class="text-muted">No comments yet. Be the first to comment!</p>
                </div>
                <textarea id="commentInput" class="form-control mt-3" rows="2" placeholder="Write a comment..."></textarea>
                <button class="btn btn-primary mt-2" onclick="addComment()">Post Comment</button>
            </div>
        </div>
    </div>
</div>


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