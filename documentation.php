<?php 
$currentPage = 'documentation.php'; 
include 'includes/header.php'; 
?>

<style>
body {
    background-color: #f5f0e6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b2a4e;
}

/* TITLE */
.mayor-title {
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-align: center;
    margin: 30px 0 60px;
}

/* CONTENT */
.content-section {
    max-width: 1000px;
    margin: 0 auto 60px;
    padding: 0 20px;
    text-align: center;
}

/* CARD BOX */
.noa-card {
    background: #ffffff;
    max-width: 520px;
    margin: 0 auto;
    padding: 35px 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(27, 42, 78, 0.15);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.noa-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 30px rgba(27, 42, 78, 0.25);
}

.noa-card p {
    font-size: 18px;
    margin-bottom: 20px;
}

/* LINK */
.noa-link {
    display: inline-block;
    font-size: 20px;
    font-weight: 600;
    color: #1b2a4e;
    text-decoration: none;
    padding: 12px 20px;
    border: 2px solid #1b2a4e;
    border-radius: 8px;
    transition: background 0.2s ease, color 0.2s ease;
}

.noa-link:hover {
    background: #1b2a4e;
    color: #ffffff;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .mayor-title {
        font-size: 32px;
    }

    .noa-card {
        padding: 30px 20px;
    }

    .noa-card p {
        font-size: 16px;
    }

    .noa-link {
        font-size: 18px;
        padding: 10px 18px;
    }
}

@media (max-width: 480px) {
    .mayor-title {
        font-size: 28px;
    }

    .noa-link {
        font-size: 16px;
        padding: 10px 16px;
    }
}
</style>

<section>
    <h2 class="mayor-title"><i class="fa-solid fa-file-contract"></i>Procurement Documentation</h2>

    <div class="content-section">
        <div class="noa-card">
            <p>Click below to view or download the official procurement document:</p>

<a href="noa.php" class="noa-link">
    📄 View Notices of Award
</a>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
