<?php include 'includes/header.php'; ?>

<style>
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
    width: 100%;
    max-width: 1100px;
    margin: 3rem auto;
    padding: 2.6rem 3rem;
    background: var(--card-bg);
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(30, 58, 138, 0.12);
}

/* ===============================
   SCROLL ANIMATION (ADDED)
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
   HEADINGS
================================ */
.about-section h2 {
    font-size: clamp(1.6rem, 3vw, 2.4rem);
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
    font-size: 1.05rem;
    line-height: 1.85;
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

.mv-box h3 {
    margin-top: 0;
    color: var(--blue-primary);
}

/* ===============================
   POPULATION
================================ */
.population-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.6rem;
}

.population-box {
    background: #f8fafc;
    border-radius: 16px;
    padding: 2rem 1.5rem;
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
    height: 420px;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(30,58,138,0.15);
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border: 0;
}
</style>

<!-- ABOUT -->
<section class="about-section scroll-animate">
    <h2 class="mayor-title">About the Municipality of Bato</h2>
    <p>
Bato (IPA: [bɐˈto]), officially known as the Municipality of Bato (Cebuano: Lungsod sa Bato; Waray: Bungto han Bato; Tagalog: Bayan ng Bato), is a municipality located in the province of Leyte, Philippines. According to the 2024 census, it has a population of 39,275 people.

The municipality is bordered by Matalom to the south, Hilongos to the north, and Bontoc to the east. Together with Hilongos, Bato serves as an important center of commerce, trade, and education in the southwestern part of Leyte.
    </p>
</section>

<!-- MISSION & VISION -->
<section class="about-section scroll-animate">
    <h2>Mission and Vision</h2>

    <div class="mission-vision">
        <div class="mv-box">
            <h3>Mission</h3>
            <p>
                To provide efficient, transparent, and people-centered public
                service through sustainable development programs and responsible governance.
            </p>
        </div>

        <div class="mv-box">
            <h3>Vision</h3>
            <p>
                A progressive and resilient Municipality of Bato with empowered citizens,
                sustainable growth, and inclusive development.
            </p>
        </div>
    </div>
</section>

<!-- POPULATION -->
<section class="about-section scroll-animate">
    <h2>Population</h2>
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
    <h2>Location</h2>
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
    <h2>Historical Timeline</h2>
    <div class="timeline">
        <p><strong>Pre-Spanish Era:</strong> Early settlers relied on fishing and farming.</p>
        <p><strong>Spanish Period:</strong> The town became organized under Spanish governance.</p>
        <p><strong>Modern Day:</strong> Bato continues to grow as a regional hub.</p>
    </div>
</section>

<!-- MAP -->
<section class="about-section scroll-animate">
    <h2>Municipality Map</h2>
    <div class="map-container">
        <iframe src="https://www.google.com/maps?q=Bato%2C%20Leyte&output=embed"></iframe>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

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
</script>