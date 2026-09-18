<section class="reviews-section py-5">
    <div class="container">
        <div class="head-title text-center mb-5">
            <span class="text-white">Testimonials</span>
            <h2 class="text-white">What Our Clients Say</h2>
        </div>
        <div class="reviews-slider">
            <!-- Review 1 -->
            <div class="review-card d-flex align-items-center p-4 shadow rounded">
                <div class="google-icon me-3">
                    <img src="assets/images/user/google-reviews.webp" alt="Google" width="50">
                </div>
                <div class="review-content">
                    <div class="stars mb-2">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                    <p>"A&T Tensile Techworks installed our car parking shed perfectly. Strong, durable, and stylish!"
                    </p>
                    <div class="reviewer-name text-muted">- Rajesh Kumar</div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="review-card d-flex align-items-center p-4 shadow rounded">
                <div class="google-icon me-3">
                    <img src="assets/images/user/google-reviews.webp" alt="Google" width="50">
                </div>
                <div class="review-content">
                    <div class="stars mb-2">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Professional team, on-time delivery, and our tensile structure looks amazing!"</p>
                    <div class="reviewer-name text-muted">- Priya Singh</div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="review-card d-flex align-items-center p-4 shadow rounded">
                <div class="google-icon me-3">
                    <img src="assets/images/user/google-reviews.webp" alt="Google" width="50">
                </div>
                <div class="review-content">
                    <div class="stars mb-2">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Amazing tensile roof for our showroom. Looks elegant and was installed very efficiently."</p>
                    <div class="reviewer-name text-muted">- Ankit Verma</div>
                </div>
            </div>

            <!-- Review 4 -->
            <div class="review-card d-flex align-items-center p-4 shadow rounded">
                <div class="google-icon me-3">
                    <img src="assets/images/user/google-reviews.webp" alt="Google" width="50">
                </div>
                <div class="review-content">
                    <div class="stars mb-2">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                    <p>"High-quality work and excellent customer support. Very satisfied with the tensile structure."
                    </p>
                    <div class="reviewer-name text-muted">- Meena Rani</div>
                </div>
            </div>

            <!-- Review 5 -->
            <div class="review-card d-flex align-items-center p-4 shadow rounded">
                <div class="google-icon me-3">
                    <img src="assets/images/user/google-reviews.webp" alt="Google" width="50">
                </div>
                <div class="review-content">
                    <div class="stars mb-2">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Reliable and professional service. Tensile structure exceeded our expectations."</p>
                    <div class="reviewer-name text-muted">- Suresh Patel</div>
                </div>
            </div>

            <!-- Review 6 -->
            <div class="review-card d-flex align-items-center p-4 shadow rounded">
                <div class="google-icon me-3">
                    <img src="assets/images/user/google-reviews.webp" alt="Google" width="50">
                </div>
                <div class="review-content">
                    <div class="stars mb-2">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                    <p>"Installation was smooth and the structure looks perfect. Highly recommend A&T Tensile
                        Techworks."</p>
                    <div class="reviewer-name text-muted">- Ritu Sharma</div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .reviews-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(assets/images/background/2.jpg);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .review-card {
        background: #fff;
        margin-bottom: 20px;
        flex: 0 0 400px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .review-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .stars {
        color: #FFD700;
        font-size: 1.1rem;
    }

    .review-content p {
        font-size: 1rem;
        margin: 0.2rem 0;
    }

    .reviewer-name {
        font-size: 0.9rem;
    }

    .google-icon img {
        display: block;
    }

    .reviews-slider {
        display: flex;
        overflow-x: auto;
        gap: 20px;
        scroll-behavior: smooth;
        padding-bottom: 10px;
    }

    .reviews-slider::-webkit-scrollbar {
        display: none;
        /* hide scrollbar */
    }

    /* Responsive */
    @media (max-width: 768px) {
        .review-card {
            flex: 0 0 80%;
        }
    }
</style>

<script>
    const slider = document.querySelector('.reviews-slider');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => { isDown = false; slider.classList.remove('active'); });
    slider.addEventListener('mouseup', () => { isDown = false; slider.classList.remove('active'); });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;
    });

    // Touch events for mobile swipe
    slider.addEventListener('touchstart', (e) => {
        isDown = true;
        startX = e.touches[0].pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('touchend', () => { isDown = false; });
    slider.addEventListener('touchmove', (e) => {
        if (!isDown) return;
        const x = e.touches[0].pageX - slider.offsetLeft;
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;
    });
</script>