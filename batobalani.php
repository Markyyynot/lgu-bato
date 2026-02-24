<?php include 'includes/header.php'; ?>
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
</style>
<!-- HERO SECTION -->
<section class="hero-section">
    <img src="assets/icons/bg.jpg" alt="Batobalani Hero" class="hero-image">
    <div class="hero-text">
        <h2 class="mayor-title">Batobalani Tourist Spots</h2>
        <p class="mayor-title">Explore the beautiful attractions of Bato, Leyte</p>
    </div>
</section>

<!-- TOURIST SPOTS -->
<section class="tourist-section">

    <div class="tourist-card">
        <div class="tourist-image-side">
            <img src="assets/images/spot1.jpg" alt="Spot 1">
        </div>
        <div class="tourist-text-side">
            <h3>GUNHUBAN FALLS</h3>
            <p>Gunhuban Falls is a beautiful, tiered waterfall in Brgy. Buli, Bato, Leyte, 
                known as a hidden gem with lush surroundings, cool, refreshing waters perfect for swimming, 
                and a tranquil atmosphere, though accessibility can vary, and it has faced closure due to past incidents,
                making it a charming but sometimes quiet spot for nature lovers. 
                It's relatively easy to reach from the town proper with a short trek, offering natural pools, wildlife,
                and opportunities for picnics amidst verdant scenery. </p>
        </div>
    </div>

    <div class="tourist-card">
        <div class="tourist-image-side">
            <img src="assets/images/spot2.jpg" alt="Spot 2">
        </div>
        <div class="tourist-text-side">
            <h3>TUMPAG FALLS</h3>
            <p>Tumpag Falls is a hidden gem in Barangay Buli, Bato, Leyte, known for its cascading waters, 
                cool blue lagoon, and serene atmosphere, accessible with a short trek from the main road and 
                offering multiple mini-falls perfect for photos, bathing, and relaxing, making it a great spot 
                for a quick escape with no entrance fees and minimal crowds. </p>
        </div>
    </div>

    <div class="tourist-card">
        <div class="tourist-image-side">
            <img src="assets/images/spot3.jpg" alt="Spot 3">
        </div>
        <div class="tourist-text-side">
            <h3>BATO BAYWALK</h3>
            <p>The Bato Baywalk in Bato, Leyte, is a popular waterfront recreational area that started as a 
                breakwater and evolved into a vibrant tourist spot, offering seaside relaxation, family fun with playgrounds,
                food trips with local snacks and BBQ, and stunning sunset views,
                making it a go-to place for locals and visitors for bonding and enjoying the sea breeze. </p>
        </div>
    </div>

    <div class="tourist-card">
        <div class="tourist-image-side">
            <img src="assets/images/spot4.jpg" alt="Spot 4">
        </div>
        <div class="tourist-text-side">
            <h3>MINI PALAWAN</h3>
            <p>Mini Palawan in Bato, Leyte, refers to the stunning Domagocdoc-Imelda Water Reservoir, 
                a natural spring and river area known for its clear, cool waters and lush green surroundings,
                offering a tranquil, Palawan-like experience without the travel, featuring a no-entrance-fee policy and
                a great spot for nature lovers to swim and relax amidst simple island vibes. </p>
        </div>
    </div>

</section>

<button id="backToTop" title="Go to top">↑ Top</button>


<?php include 'includes/footer.php'; ?>

<!-- SCROLL ANIMATION SCRIPT -->
<script>
    const touristCards = document.querySelectorAll('.tourist-card');

    function scrollAnimation() {
        const triggerBottom = window.innerHeight / 1.1;

        touristCards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;

            if(cardTop < triggerBottom) {
                card.classList.add('scroll-in');
            } else {
                card.classList.remove('scroll-in');
            }
        });
    }

    window.addEventListener('scroll', scrollAnimation);
    window.addEventListener('load', scrollAnimation);

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
