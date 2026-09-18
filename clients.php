<section class="py-5 our-clients">
    <div class="container">
        <div class="row">
            <div class="head-title text-center mb-4">
                <span>Our Clients</span>
                <h2>Clients We've Worked With</h2>
            </div>
        </div>
        <div class="client-slider" id="clientSlider">
            <div class="client-track" id="clientTrack">
                <div class="client-logo"><img src="assets/images/client/1.png" alt="Client 1"></div>
                <div class="client-logo"><img src="assets/images/client/2.png" alt="Client 2"></div>
                <div class="client-logo"><img src="assets/images/client/3.png" alt="Client 3"></div>
                <div class="client-logo"><img src="assets/images/client/4.png" alt="Client 4"></div>
                <div class="client-logo"><img src="assets/images/client/5.png" alt="Client 5"></div>
                <div class="client-logo"><img src="assets/images/client/6.png" alt="Client 6"></div>
                <div class="client-logo"><img src="assets/images/client/7.png" alt="Client 6"></div>
                <div class="client-logo"><img src="assets/images/client/8.png" alt="Client 6"></div>
                <div class="client-logo"><img src="assets/images/client/9.png" alt="Client 6"></div>
                <div class="client-logo"><img src="assets/images/client/10.png" alt="Client 6"></div>
                <div class="client-logo"><img src="assets/images/client/11.png" alt="Client 6"></div>
                <div class="client-logo"><img src="assets/images/client/12.png" alt="Client 6"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .client-slider {
        overflow: hidden;
        width: 100%;
        position: relative;
    }

    .client-track {
        display: flex;
    }

    .client-logo {
        flex: 0 0 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 15px;
    }

    .client-logo img {
        max-width: 100%;
        max-height: 150px;
        object-fit: contain;
        filter: grayscale(100%);
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .client-logo img:hover {
        filter: none;
        transform: scale(1.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .client-logo {
            flex: 0 0 100px;
            margin: 0 10px;
        }
    }
</style>

<script>
    const track = document.getElementById('clientTrack');

    // Clone all logos to enable seamless scroll dynamically
    track.innerHTML += track.innerHTML;

    let position = 0;
    const speed = 1; // adjust scroll speed

    function scrollLogos() {
        position -= speed;
        if (position <= -track.scrollWidth / 2) {
            position = 0; // reset to start
        }
        track.style.transform = `translateX(${position}px)`;
        requestAnimationFrame(scrollLogos);
    }

    scrollLogos();
</script>