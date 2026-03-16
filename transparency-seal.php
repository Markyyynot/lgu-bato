<?php
$currentPage = 'transparency-seal.php';
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

/* PAGE HEADER */
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

/* IMAGE ROW */
.transparency-row {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 30px;
    margin: 40px 0;
}

.transparency-image {
    max-width: 250px;
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(27, 42, 78, 0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.transparency-image:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 35px rgba(27, 42, 78, 0.25);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .page-title {
        font-size: 32px;
    }
    .transparency-image {
        max-width: 200px;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 28px;
    }
    .transparency-image {
        max-width: 150px;
    }
}
</style>

<section class="page-header">
    <h1 class="page-title">
        <i class="fa-solid fa-shield-halved"></i> Transparency Seal
    </h1>
</section>

<section class="page-content">
    <div class="transparency-row">
        <!-- Clickable Transparency Seal Image -->
        <a href="assets/transparency/transparency-seal.pdf" target="_blank">
            <img src="assets/icons/transparency.png" alt="Transparency Seal" class="transparency-image">
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>