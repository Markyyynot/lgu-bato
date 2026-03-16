<?php
$currentPage = 'citizens-charter.php';
include 'includes/header.php';
?>

<link rel="icon" type="image/png" href="assets/images/seal2.png">

<style>
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
        <img src="assets/citizens/issuanceofmunicaplclearance.jpeg" alt="Citizens Charter" class="charter-image">
        <img src="assets/citizens/issuanceofmunicaplclearance.jpeg" alt="Citizens Charter" class="charter-image">
        <img src="assets/citizens/issuanceofmunicaplclearance.jpeg" alt="Citizens Charter" class="charter-image">
        <img src="assets/citizens/issuanceofmunicaplclearance.jpeg" alt="Citizens Charter" class="charter-image">
</div>
    <a href="view-downloadableform.php?file=citizens-charter.pdf" target="_blank" class="charter-card">
        <i class="fa-solid fa-file-pdf"></i>
        <span>VIEW CITIZENS CHARTER</span>
    </a>
</section>

<?php include 'includes/footer.php'; ?>