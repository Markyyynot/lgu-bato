<?php include 'includes/header.php'; ?>

<style>

/* =======================
BACK TO TOP BUTTON
======================= */
#backToTop {
    position: fixed;
    top: -70px;
    right: 20px;
    z-index: 999;
    background-color: #1b2a4e;
    color: #fff;
    border: none;
    padding: 10px 16px;
    border-radius: 30px;
    font-size: 14px;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    transition: all 0.4s ease;
    opacity: 0;
}

#backToTop.show {
    top: 20px;
    opacity: 1;
}

#backToTop:hover {
    background-color: #ffffff;
    color: #1b2a4e;
    transform: translateY(-3px) scale(1.05);
}

/* ===============================
COLOR VARIABLES
================================ */
:root {
    --blue-primary: #1e3a8a;
    --blue-accent: #3b82f6;
    --text-dark: #2f2f2f;
    --card-bg: #ffffff;
}

/* ===============================
BASE
================================ */
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: beige;
    color: var(--text-dark);
    overflow-x: hidden;
}

/* ===============================
SECTION CARD
================================ */
.about-section {
    width: 95%;
    max-width: 1100px;
    margin: clamp(1.5rem,4vw,3rem) auto;
    padding: clamp(1.5rem,3vw,2.6rem);
    background: var(--card-bg);
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(30, 58, 138, 0.12);
}

/* ===============================
SCROLL ANIMATION
================================ */
.scroll-animate {
    opacity: 0;
    transform: translateY(60px);
    transition: opacity 0.8s ease-out,
                transform 0.8s cubic-bezier(.22,1,.36,1);
}

.scroll-animate.show {
    opacity: 1;
    transform: translateY(0);
}

/* ===============================
   SEAL LOGO
================================ */
.municipal-seal {
    text-align: center;
    margin-bottom: 1rem;
}

.municipal-seal img {
    width: clamp(90px, 18vw, 140px);
    height: auto;
    object-fit: contain;
}

/* ===============================
HEADINGS
================================ */
.about-section h2 {
    font-size: clamp(1.5rem, 3vw, 2.4rem);
    color: var(--blue-primary);
    margin-bottom: 1.6rem;
    position: relative;
    padding-left: 1rem;
}

.about-section h2::before {
    content: "";
    position: absolute;
    left: 0;
    top: 10%;
    width: 5px;
    height: 80%;
    background: linear-gradient(
        to bottom,
        var(--blue-primary),
        var(--blue-accent)
    );
    border-radius: 5px;
}

.mayor-title {
    text-align: center;
    padding-left: 0;
}

.mayor-title::before {
    display: none;
}

/* ===============================
TEXT
================================ */
.about-section p {
    font-size: clamp(0.95rem,1.2vw,1.05rem);
    line-height: 1.8;
    color: #444;
    text-align: justify;
}

/* ===============================
MISSION & VISION
================================ */
.mission-vision {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 1.6rem;
}

.mv-box {
    background: #f8fafc;
    border-radius: 16px;
    padding: 2rem;
    border-left: 5px solid var(--blue-primary);
    box-shadow: 0 6px 18px rgba(30,58,138,0.1);
    transition: transform 0.3s ease;
}

.mv-box:hover {
    transform: translateY(-5px);
}

/* ===============================
POPULATION
================================ */
.population-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1.6rem;
}

.population-box {
    background: #f8fafc;
    border-radius: 16px;
    padding: 1.8rem 1rem;
    text-align: center;
    box-shadow: 0 6px 18px rgba(30,58,138,0.1);
    border-top: 4px solid var(--blue-primary);
    transition: transform 0.3s ease;
}

.population-box:hover {
    transform: translateY(-5px);
}

/* ===============================
LOCATION
================================ */
.location-list {
    padding-left: 1.2rem;
}

.location-list li {
    margin-bottom: 0.7rem;
}

/* ===============================
TIMELINE
================================ */
.timeline {
    position: relative;
    padding-left: 26px;
}

.timeline::before {
    content: "";
    position: absolute;
    left: 6px;
    top: 0;
    width: 3px;
    height: 100%;
    background: var(--blue-primary);
}

/* ===============================
MAP
================================ */
.map-container {
    width: 100%;
    height: clamp(260px, 50vw, 420px);
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(30,58,138,0.15);
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border: 0;
}

/* ===============================
MOBILE IMPROVEMENTS
================================ */
@media (max-width: 600px) {

    .about-section p {
        text-align: left;
    }

    #backToTop {
        right: 12px;
        padding: 8px 14px;
        font-size: 13px;
    }
}

</style>

<!-- ABOUT -->
<section class="about-section scroll-animate">
        <!-- ✅ MUNICIPAL SEAL -->
    <div class="municipal-seal">
        <img src="assets/icons/seal2.png" alt="Municipality Seal">
    </div>

    <h2 class="mayor-title" style="color: #1b2a4e;">About the Municipality of Bato</h2>
    <p>
Bato (IPA: [bɐˈto]), officially known as the Municipality of Bato (Cebuano: Lungsod sa Bato; Waray: Bungto han Bato; Tagalog: Bayan ng Bato), is a municipality located in the province of Leyte, Philippines. According to the 2024 census, it has a population of 39,275 people.

The municipality is bordered by Matalom to the south, Hilongos to the north, and Bontoc to the east. Together with Hilongos, Bato serves as an important center of commerce, trade, and education in the southwestern part of Leyte.
    </p>
</section>

<!-- MISSION & VISION -->
<section class="about-section scroll-animate">
    <h2 style="color: #1b2a4e; text-transform: uppercase;">Mission and Vision</h2>

    <div class="mission-vision">
        <div class="mv-box">
            <h3>Mission</h3>
            <p>
                To foster a technology-driven and business-friendly environrement in Leyte
                by empowering God-loving Batohanons through inclusive governance, sustainable livelihood programs, disaster
                resilience initiatives and ecological stewardship - ensuring balanced, progressive, and 
                selft-reliant community for present and future generations.
            </p>
        </div>

        <div class="mv-box">
            <h3>Vision</h3>
            <p>
                A technolog-driven business hub in Leyte with empowered and God-loving Batohanons, living in self-sustaining,
                disaster resilient, and ecologically balanced environment advocating good governance.
            </p>
        </div>
    </div>
</section>

<!-- POPULATION -->
<section class="about-section scroll-animate">
    <h2 style="color: #1b2a4e; text-transform: uppercase;">Population</h2>
    <div class="population-grid">
        <div class="population-box">
            <h3>39,275</h3>
            <span>Total Population</span>
        </div>
        <div class="population-box">
            <h3>32</h3>
            <span>Barangays</span>
        </div>
        <div class="population-box">
            <h3>2024</h3>
            <span>Latest Census</span>
        </div>
    </div>
</section>

<!-- LOCATION -->
<section class="about-section scroll-animate">
    <h2 style="color: #1b2a4e; text-transform: uppercase;">Location</h2>
    <ul class="location-list">
        <li><strong>Province:</strong> Leyte</li>
        <li><strong>Region:</strong> Eastern Visayas (Region VIII)</li>
        <li><strong>North:</strong> Hilongos</li>
        <li><strong>South:</strong> Matalom</li>
        <li><strong>East:</strong> Bontoc</li>
        <li><strong>West:</strong> Camotes Sea</li>
    </ul>
</section>

<!-- HISTORY -->
<section class="about-section scroll-animate">
    <h2 style="color: #1b2a4e; text-transform: uppercase;">Historical Timeline</h2>
    <div class="timeline">
        <p><strong>Pre-Spanish Era:</strong> Early settlers relied on fishing and farming.</p>
        <p><strong>Spanish Period:</strong> The town became organized under Spanish governance.</p>
        <p><strong>Modern Day:</strong> Bato continues to grow as a regional hub.</p>
    </div>
</section>

<!-- MAP -->
<section class="about-section scroll-animate">
    <h2 style="color: #1b2a4e; text-transform: uppercase;">Municipality Map</h2>
    <div class="map-container">
        <iframe src="https://www.google.com/maps?q=Bato%2C%20Leyte&output=embed"></iframe>
    </div>
</section>

<button id="backToTop" title="Go to top">↑ Top</button>


<!-- SCROLL SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const elements = document.querySelectorAll('.scroll-animate');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }

        });
    }, { threshold: 0.15 });

    elements.forEach(el => observer.observe(el));

});

const backToTopBtn = document.getElementById("backToTop");

// Show button when scrolling down
window.addEventListener("scroll", function () {
    if (window.scrollY > 250) {
        backToTopBtn.classList.add("show");
    } else {
        backToTopBtn.classList.remove("show");
    }
});

// Smooth scroll to top
backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

</script>

<?php include 'includes/footer.php'; ?>
