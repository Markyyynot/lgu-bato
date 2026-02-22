<?php include 'includes/header.php'; ?>

<style>
/* ===============================
   OFFICIALS SECTION
================================ */
.officials-section {
    font-family: "Merriweather", "Segoe UI", serif;
    padding: 2rem 1rem 4rem;
    position: relative;
}

/* TITLE + BACK BUTTON */
.title-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-bottom: 3rem;
}

.back-btn {
    position: absolute;
    left: 0;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    font-weight: 700;
    color: #1f4e79;
    background: #ffffff;
    padding: 10px 18px;
    border-radius: 30px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
    z-index: 10;
}

.back-btn:hover {
    background: #1f4e79;
    color: #ffffff;
    transform: translateX(-5px);
}

/* ===============================
   TOP OFFICIAL (FEATURED)
================================ */
.top-official {
    text-align: center;
    background: #ffffff;
    max-width: 520px;
    margin: 0 auto 4.5rem;
    padding: 2.5rem 2rem;
    border-radius: 28px;
    box-shadow: 0 18px 45px rgba(0,0,0,0.18);
    position: relative;
}

.top-official::before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 130px;
    height: 6px;
    background: #1f4e79;
    border-radius: 0 0 12px 12px;
}

.top-official img {
    width: 260px;
    height: 260px;
    border-radius: 50%;
    object-fit: cover;
    border: 8px solid #1f4e79;
    margin-bottom: 1.4rem;
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
}

.top-official h3 {
    margin-top: 0.8rem;
    font-size: 1.9rem;
    font-weight: 800;
    color: #1f4e79;
}

.top-official p {
    font-size: 1.15rem;
    font-weight: 700;
    color: #555;
    letter-spacing: 0.4px;
}

/* ===============================
   STAFF GRID
================================ */
.officials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2.5rem;
    max-width: 1000px;
    margin: auto;
}

/* STAFF CARD */
.official-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 270px;
}

.official-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.18);
}

.official-card img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #c89b3c;
    margin-bottom: 1.2rem;
    transition: transform 0.3s ease;
}

.official-card:hover img {
    transform: scale(1.05);
}

.official-card h3 {
    font-size: 1.35rem;
    color: #1f4e79;
    font-weight: 700;
    margin-bottom: 0.4rem;
}

.official-card p {
    font-size: 1.05rem;
    color: #555;
    font-weight: 600;
    line-height: 1.4;
}

/* ===============================
   RESPONSIVE
================================ */
@media (max-width: 600px) {

    .title-container {
        flex-direction: column;
        gap: 0.6rem;
        text-align: center;
    }

    .back-btn {
        position: relative;
        margin-bottom: 0.5rem;
    }

    .top-official {
        padding: 2rem 1.5rem;
    }

    .top-official img {
        width: 210px;
        height: 210px;
    }

    .top-official h3 {
        font-size: 1.6rem;
    }

    .top-official p {
        font-size: 1.05rem;
    }

    .official-card img {
        width: 120px;
        height: 120px;
    }
}

/* ===============================
   SCROLL ANIMATION (ADDED ONLY)
================================ */
.scroll-animate {
    opacity: 0;
    transform: translateY(60px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.scroll-animate.show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<section class="officials-section">

    <!-- TITLE + BACK BUTTON -->
    <div class="title-container scroll-animate">
        <div class="back-btn" onclick="history.back()">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back</span>
        </div>
        <h2 class="mayor-title">
            <i class="fa-solid fa-building-columns"></i>
            Office of the SB Secretary
        </h2>
    </div>

    <!-- SB SECRETARY -->
    <div class="top-official scroll-animate">
        <img src="assets/sb/porf1.jpg" alt="SB Secretary">
        <h3>Porferio M. Pitogo II</h3>
        <p>Sangguniang Bayan Secretary</p>
    </div>

    <!-- STAFF -->
    <div class="officials-grid">

        <div class="official-card scroll-animate">
            <img src="assets/sb/abryl.jpg" alt="Information Officer">
            <h3>Abryl T. Gertos</h3>
            <p>Information Officer</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/sb/jerry.jpg" alt="Legislative Staff">
            <h3>Jerry B. Catolico</h3>
            <p>Legislative Staff</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/sb/jerome.jpg" alt="Legislative Staff">
            <h3>Jerome B. Inso</h3>
            <p>Legislative Staff</p>
        </div>

    </div>
</section>

<!-- SCROLL SCRIPT (ADDED ONLY) -->
<script>
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
</script>

<?php include 'includes/footer.php'; ?>
