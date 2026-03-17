<?php
$currentPage = 'citizens-charter.php';
include 'includes/header.php';
?>

<link rel="icon" type="image/png" href="assets/images/seal2.png">

<style>


/* ===========================
   BACK TO TOP BUTTON
=========================== */
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

/* BASE STYLES */
body {
    background-color: #f5f0e6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b2a4e;
    margin: 0;
    padding: 0;
}

/* TITLE */
.page-header {
    text-align: center;
    margin: 50px 0 30px;
}

.page-title {
    font-size: 36px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin: 0;
}

/* CONTENT */
.page-content {
    max-width: 900px;
    margin: 0 auto 80px;
    padding: 0 20px;
    text-align: center;
    font-size: 16px;
    line-height: 1.8;
}

/* CARD */
.charter-card {
    background: #ffffff;
    padding: 35px 25px;
    border-radius: 14px;
    box-shadow: 0 8px 20px rgba(27, 42, 78, 0.12);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    text-align: center;
    max-width: 300px;
    margin: 40px auto;
    text-decoration: none;
    display: block;
}

.charter-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(27, 42, 78, 0.25);
}

.charter-card i {
    font-size: 40px;
    margin-bottom: 15px;
    color: #1b2a4e;
}

.charter-card span {
    font-size: 18px;
    font-weight: 700;
    color: #1b2a4e;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .page-title {
        font-size: 32px;
    }

        .charter-row {
        gap: 30px;
    }
    .charter-image {
        max-width: 250px;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 28px;
    }

    .charter-row {
        flex-direction: column;  /* stack vertically on very small screens */
        gap: 20px;
    }
    .charter-image {
        max-width: 200px;
    }
}

.charter-row {
    display: flex;
    justify-content: center;  /* center horizontally in the page */
    align-items: center;      /* vertically center image and card */
    gap: 40px;                /* space between image and card */
    flex-wrap: nowrap;        /* prevent wrapping */
    margin: 40px 0 30px; /* 40px top margin, 30px bottom */
}

/* Citizens Charter image */
.charter-image {
    max-width: 200px;   /* adjust size as needed */
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(27, 42, 78, 0.12);
}

/* Downloadable card already styled */
.charter-card {
    max-width: 250px;
}
</style>
<button id="backToTop" title="Go to top">↑ Top</button>


<section class="page-header">
    <h1 class="page-title">
        <i class="fa-solid fa-book-open"></i> Citizens Charter
    </h1>
</section>

<section class="page-content">
    <p>
        The Citizens Charter provides information about the services of the Local Government Unit,
        including requirements, fees, and processing time for each service.
    </p>
    
        <!-- Horizontal container for image + card -->
    <div class="charter-row">
        <!-- Citizens Charter Image -->
        <img src="assets/citizens/issuanceofmunicaplclearance.jpeg" alt="Citizens Charter" class="charter-image">
        <img src="assets/citizens/certificationoftrees.jpeg" alt="Citizens Charter" class="charter-image">
        <img src="assets/citizens/issuanceofpermit.jpeg" alt="Citizens Charter" class="charter-image">
        <img src="assets/citizens/issuanceofpermits.jpeg" alt="Citizens Charter" class="charter-image">
        <img src="assets/citizens/motorcade.jpeg" alt="Citizens Charter" class="charter-image">
</div>
<a href="assets/citizens/CITIZENS-CHARTER.pdf" class="charter-card" download>
    <i class="fa-solid fa-file-pdf"></i>
    <span>DOWNLOAD CITIZENS CHARTER</span>
</a>
</section>

<script>
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