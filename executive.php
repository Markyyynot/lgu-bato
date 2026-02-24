<?php include 'includes/header.php'; ?>

<section class="officials-section ">
    <h2 class="mayor-title"><i class="fa-solid fa-user-tie"></i>Executive Department</h2>

    <div class="officials-grid">

        <a href="mayor.php" class="official-card office-card scroll-animate">
            <img src="assets/mayor/mayor1.png" alt="Municipal Mayor’s Office">
            <p class="office-name">Municipal Mayor’s Office</p>
        </a>

        <a href="budget.php" class="official-card office-card scroll-animate">
            <img src="assets/budget/budget.png" alt="Municipal Budget Office">
            <p class="office-name">Municipal Budget Office</p>
        </a>

        <a href="civil-registrar.php" class="official-card office-card scroll-animate">
            <img src="assets/civil/civil.png" alt="Civil Registrar Office">
            <p class="office-name">Municipal Civil Registrar Office</p>
        </a>

        <a href="treasurer.php" class="official-card office-card scroll-animate">
            <img src="assets/treasurer/treasurer.png" alt="Municipal Treasurer’s Office">
            <p class="office-name">Municipal Treasurer’s Office</p>
        </a>

        <a href="assessor.php" class="official-card office-card scroll-animate">
            <img src="assets/assessor/assessor.png" alt="Assessor’s Office">
            <p class="office-name">Municipal Assessor’s Office</p>
        </a>

        <a href="accounting.php" class="official-card office-card scroll-animate">
            <img src="assets/accounting/accounting.png" alt="Accounting Office">
            <p class="office-name">Municipal Accounting Office</p>
        </a>

        <a href="planning.php" class="official-card office-card scroll-animate">
            <img src="assets/planning/planning.png" alt="Planning and Development Office">
            <p class="office-name">Municipal Planning & Development Coordinator Office</p>
        </a>

        <a href="social_welfare.php" class="official-card office-card scroll-animate">
            <img src="assets/social/social.png" alt="Social Welfare and Development Office">
            <p class="office-name">Municipal Social Welfare & Development Office</p>
        </a>

        <a href="hrm.php" class="official-card office-card scroll-animate">
            <img src="assets/human/hrmo.png" alt="Human Resources Management Office">
            <p class="office-name">Municipal Human Resources Management Office</p>
        </a>

        <a href="agriculture.php" class="official-card office-card scroll-animate">
            <img src="assets/agriculture/agriculture.png" alt="Agriculture Office">
            <p class="office-name">Municipal Agriculture Office</p>
        </a>

        <a href="engineering.php" class="official-card office-card scroll-animate">
            <img src="assets/engineering/engineering.png" alt="Engineering Office">
            <p class="office-name">Municipal Engineering Office</p>
        </a>

        <a href="rural_health.php" class="official-card office-card scroll-animate">
            <img src="assets/rhu/rural.png" alt="Rural Health Unit">
            <p class="office-name">Rural Health Unit</p>
        </a>

    </div>
</section>

<button id="backToTop" title="Go to top">↑ Top</button>


<style>

#backToTop {
    position: fixed;
    top: -70px; /* hidden above screen */
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

/* SHOW ANIMATION */
#backToTop.show {
    top: 20px;
    opacity: 1;
}

/* Hover animation */
#backToTop:hover {
    background-color: #ffffff;
    color: #1b2a4e;
    transform: translateY(-3px) scale(1.05);
}

.scroll-animate {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s ease-out, transform 0.9s ease-out;
}

.scroll-animate.show {
    opacity: 1;
    transform: translateY(0);
}

.official-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.18);
}
</style>

<script>
const elements = document.querySelectorAll('.scroll-animate');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show'); // smooth up and down scroll
        }
    });
}, { threshold: 0.1 });

elements.forEach(el => observer.observe(el));

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