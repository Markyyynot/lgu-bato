<?php
$currentPage = 'downloadable-forms.php';
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

/* FORM CARDS GRID */
.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    margin-top: 30px;
}

/* FORM CARD */
.form-card {
    background: #ffffff;
    padding: 25px 20px;
    border-radius: 14px;
    box-shadow: 0 8px 20px rgba(27, 42, 78, 0.12);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    cursor: pointer;
}

.form-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(27, 42, 78, 0.25);
}

.form-card i {
    font-size: 30px;
    margin-bottom: 12px;
    color: #1b2a4e;
}

.form-card span {
    font-size: 16px;
    font-weight: 600;
    color: #1b2a4e;
    text-decoration: none;
    transition: color 0.2s ease;
}

.form-card span:hover {
    color: #163066;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .page-title {
        font-size: 32px;
    }
    .form-card i {
        font-size: 26px;
    }
    .form-card span {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 28px;
    }
    .form-card i {
        font-size: 22px;
    }
    .form-card span {
        font-size: 14px;
    }
}
</style>

<section class="page-header">
    <h1 class="page-title"><i class="fa-solid fa-file-arrow-down"></i>Downloadable Forms</h1>
</section>

<section class="page-content">
    <p>Here you can download all official forms from the LGU.</p>

    <div class="form-grid">
        <a href="forms/form1.pdf" target="_blank" class="form-card">
            <i class="fa-solid fa-file-pdf"></i>
            <span>Form 1</span>
        </a>

        <a href="forms/form2.pdf" target="_blank" class="form-card">
            <i class="fa-solid fa-file-pdf"></i>
            <span>Form 2</span>
        </a>

        <a href="forms/form3.pdf" target="_blank" class="form-card">
            <i class="fa-solid fa-file-pdf"></i>
            <span>Form 3</span>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
