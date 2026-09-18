<section class="py-5 our-projects" id="projects">
    <div class="container">
        <div class="row">
            <div class="head-title text-center mb-4">
                <span>Our Projects</span>
                <h2>Check out our previous projects</h2>
            </div>
        </div>
        <div class="project-slider-wrapper position-relative">
            <button class="slider-btn prev-btn">&#10094;</button>
            <div class="project-slider" id="projectSlider">
                <div class="project-track" id="projectTrack">
                    <div class="project-card"><img src="assets/images/gallery/1.jpg" alt="Project 1"></div>
                    <div class="project-card"><img src="assets/images/gallery/2.jpg" alt="Project 2"></div>
                    <div class="project-card"><img src="assets/images/gallery/3.jpg" alt="Project 3"></div>
                    <div class="project-card"><img src="assets/images/gallery/4.jpg" alt="Project 4"></div>
                    <div class="project-card"><img src="assets/images/gallery/5.jpg" alt="Project 5"></div>
                    <div class="project-card"><img src="assets/images/gallery/6.jpg" alt="Project 6"></div>
                    <div class="project-card"><img src="assets/images/gallery/7.jpg" alt="Project 6"></div>
                    <div class="project-card"><img src="assets/images/gallery/8.jpg" alt="Project 6"></div>
                    <div class="project-card"><img src="assets/images/gallery/9.jpg" alt="Project 6"></div>
                    <div class="project-card"><img src="assets/images/gallery/10.jpg" alt="Project 6"></div>
                    <div class="project-card"><img src="assets/images/gallery/11.jpg" alt="Project 6"></div>
                    <div class="project-card"><img src="assets/images/gallery/12.jpg" alt="Project 6"></div>
                </div>
            </div>
            <button class="slider-btn next-btn">&#10095;</button>
        </div>
        <div class="mt-4 text-center">
            <a href="products.php" class="btn">Explore More</a>
        </div>
    </div>
</section>

<style>
    .our-projects{
        background: #eeee;
    }
    .project-slider-wrapper {
        position: relative;
        overflow: hidden;
    }

    .project-track {
        display: flex;
        transition: transform 0.5s ease;
    }

    .project-card {
        flex: 0 0 200px;
        margin: 0 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .project-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .project-card img:hover {
        transform: scale(1.05);
    }

    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 5px;
        z-index: 10;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }

    .slider-btn:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    @media (max-width: 768px) {
        .project-card {
            flex: 0 0 150px;
            margin: 0 10px;
        }
    }
</style>

<script>
    (function () {
        const track = document.getElementById('projectTrack');
        const nextBtn = document.querySelector('.next-btn');
        const prevBtn = document.querySelector('.prev-btn');

        const cards = Array.from(track.children);
        const cardWidth = cards[0].offsetWidth + 30; // include margin
        let index = 0;

        // Clone all cards for seamless loop
        const clones = cards.map(card => card.cloneNode(true));
        clones.forEach(clone => track.appendChild(clone));

        function updatePosition() {
            track.style.transition = 'transform 0.5s ease';
            track.style.transform = `translateX(${-index * cardWidth}px)`;
        }

        function resetPosition() {
            if (index >= cards.length) {
                index = index % cards.length;
                track.style.transition = 'none';
                track.style.transform = `translateX(${-index * cardWidth}px)`;
            }
            if (index < 0) {
                index = cards.length - 1;
                track.style.transition = 'none';
                track.style.transform = `translateX(${-index * cardWidth}px)`;
            }
        }

        nextBtn.addEventListener('click', () => {
            index++;
            updatePosition();
            track.addEventListener('transitionend', resetPosition, { once: true });
        });

        prevBtn.addEventListener('click', () => {
            index--;
            updatePosition();
            track.addEventListener('transitionend', resetPosition, { once: true });
        });

        window.addEventListener('resize', () => {
            track.style.transition = 'none';
            track.style.transform = `translateX(${-index * (track.children[0].offsetWidth + 30)}px)`;
        });
    })();
</script>