<?php include 'includes/header.php'; ?>

<style>
/* ===============================
   OFFICIALS SECTION
================================ */
.officials-section {
    font-family: "Merriweather", "Segoe UI", serif;
    padding: 2rem 1rem 4rem;
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
   TOP OFFICIAL (MAYOR – FEATURED)
================================ */
.top-official {
    text-align: center;
    background: #ffffff;
    max-width: 560px;
    margin: 0 auto 4.5rem;
    padding: 2.8rem 2.2rem;
    border-radius: 30px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.20);
    position: relative;
}

.top-official::before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 6px;
    background: #1f4e79;
    border-radius: 0 0 14px 14px;
}

.top-official img {
    width: 280px;
    height: 280px;
    border-radius: 50%;
    object-fit: cover;
    border: 9px solid #1f4e79;
    margin-bottom: 1.6rem;
    box-shadow: 0 14px 35px rgba(0,0,0,0.30);
}

.top-official h3 {
    margin-top: 0.6rem;
    font-size: 2rem;
    font-weight: 900;
    color: #1f4e79;
}

.top-official p {
    font-size: 1.2rem;
    font-weight: 700;
    color: #555;
    letter-spacing: 0.4px;
}

/* ===============================
   OFFICIALS GRID
================================ */
.officials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2.5rem;
    max-width: 1100px;
    margin: auto;
}

/* OFFICIAL CARD */
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
}

.official-card h3 {
    font-size: 1.3rem;
    color: #1f4e79;
    font-weight: 700;
    margin-bottom: 0.4rem;
}

.official-card p {
    font-size: 1.05rem;
    color: #555;
    font-weight: 600;
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
        padding: 2.2rem 1.6rem;
    }

    .top-official img {
        width: 220px;
        height: 220px;
    }

    .top-official h3 {
        font-size: 1.7rem;
    }

    .top-official p {
        font-size: 1.1rem;
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
            Municipal Mayor’s Office
        </h2>
    </div>

    <!-- MAYOR -->
    <div class="top-official scroll-animate">
        <img src="assets/mayor/mayor.png" alt="Municipal Mayor">
        <h3>Hon. Bryan Nile A. Gertos</h3>
        <p>Municipal Mayor</p>
    </div>

    <!-- OFFICIALS GRID -->
    <div class="officials-grid">

        <div class="official-card scroll-animate">
            <img src="assets/mayor/gilbert.jpg">
            <h3>Gilbert Pajulio Buzon</h3>
            <p>Municipal Administrator</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/ma.jpg">
            <h3>Ma. Virgillia M. Aseniero</h3>
            <p>Revenue Officer III</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/nin.jpg">
            <h3>Gerard Niño Fe</h3>
            <p>PESO Officer</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/angelie.jpg">
            <h3>Angelie Napala</h3>
            <p>Tourism Operation Office</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/lydo.png">
            <h3>Dexter T. Ramirez</h3>
            <p>Local Youth Development Officer I</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/gab.jpg">
            <h3>Gabriel G. Tavera</h3>
            <p>ICT Officer</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/leo.jpg">
            <h3>Leo C. Baguhin</h3>
            <p>ICT Officer</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/sil.jpg">
            <h3>Silvestre G. Aseniero</h3>
            <p>Book Binder II</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/danilo.jpg">
            <h3>Danilo A. Pitogo</h3>
            <p>SG II</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/girl.png">
            <h3>Stephanie Adolfo</h3>
            <p>Staff / Job Order</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/des.jpg">
            <h3>Desiree Mae Adlawan</h3>
            <p>Staff / Job Order</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/boy.png">
            <h3>Alberto Raagas</h3>
            <p>Staff / Job Order</p>
        </div>

        <div class="official-card scroll-animate">
            <img src="assets/mayor/boy.png">
            <h3>Anthony Saruda Bonote</h3>
            <p>Staff / Job Order</p>
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