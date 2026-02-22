<?php
$currentPage = 'bpls.php';
include 'includes/header.php';
?>

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

/* PAGE CONTENT */
.page-content {
    max-width: 900px;
    margin: 0 auto 80px;
    padding: 0 20px;
    text-align: center;
    font-size: 16px;
    line-height: 1.8;
}

/* BUTTON STYLE */
.btn {
    display: inline-block;
    margin-top: 20px;
    padding: 14px 28px;
    font-size: 16px;
    font-weight: 600;
    color: #1b2a4e;
    border: 2px solid #1b2a4e;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.2s ease;
    background: #ffffff;
}

.btn:hover {
    background: #1b2a4e;
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(27, 42, 78, 0.2);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .page-title {
        font-size: 32px;
    }
    .btn {
        font-size: 15px;
        padding: 12px 24px;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 28px;
    }
    .btn {
        font-size: 14px;
        padding: 10px 20px;
    }
}
</style>

<section class="page-header">
    <h1 class="page-title"><i class="fa-solid fa-briefcase"></i>Business Permit & Licensing System (BPLS)</h1>
</section>

<section class="page-content">
    <p>Access and process business permits online through BPLS.</p>
    <a href="https://bpls.lgu-link.com" target="_blank" class="btn">Go to BPLS</a>
</section>

<?php include 'includes/footer.php'; ?>
