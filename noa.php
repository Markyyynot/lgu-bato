<?php 
$currentPage = 'noa.php'; 
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
.mayor-title {
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-align: center;
    margin: 30px 0 60px;
}

/* CONTENT WRAPPER */
.content-section {
    max-width: 1100px;
    margin: 0 auto 80px;
    padding: 0 20px;
}

/* CARD GRID */
.noa-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

/* CARD */
.noa-card {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(27, 42, 78, 0.15);
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.noa-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(27, 42, 78, 0.25);
}

.noa-card h3 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
}

.noa-card p {
    font-size: 15px;
    margin-bottom: 20px;
    line-height: 1.6;
}

/* BUTTON */
.noa-link {
    display: inline-block;
    padding: 12px 22px;
    font-size: 16px;
    font-weight: 600;
    color: #1b2a4e;
    border: 2px solid #1b2a4e;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
}

.noa-link:hover {
    background: #1b2a4e;
    color: #ffffff;
}

/* RESPONSIVE STYLES */

/* Tablets */
@media (max-width: 992px) {
    .mayor-title {
        font-size: 36px;
    }
    .noa-card h3 {
        font-size: 18px;
    }
    .noa-card p {
        font-size: 14px;
    }
    .noa-link {
        font-size: 15px;
        padding: 12px 20px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .mayor-title {
        font-size: 32px;
        margin-bottom: 40px;
    }
    .content-section {
        padding: 0 15px;
    }
    .noa-card {
        padding: 25px 20px;
    }
    .noa-card h3 {
        font-size: 17px;
    }
    .noa-card p {
        font-size: 14px;
    }
    .noa-link {
        font-size: 14px;
        padding: 10px 18px;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .mayor-title {
        font-size: 28px;
    }
    .noa-card h3 {
        font-size: 16px;
    }
    .noa-card p {
        font-size: 13px;
    }
    .noa-link {
        font-size: 13px;
        padding: 10px 16px;
    }
}
</style>

<section>
    <h2 class="mayor-title"><i class="fa-solid fa-file-contract"></i>Notice of Award</h2>

    <div class="content-section">
        <div class="noa-grid">

            <!-- NOA CARD 1 -->
            <div class="noa-card">
                <h3>Municipal Hall Construction</h3>
                <p>Notice of Award for the construction of the Municipal Hall.</p>
                <a href="documents/noa-municipal-hall.pdf" class="noa-link" target="_blank">
                    📄 View NOA
                </a>
            </div>

            <!-- NOA CARD 2 -->
            <div class="noa-card">
                <h3>School Supplies Procurement</h3>
                <p>Notice of Award for the procurement of school supplies.</p>
                <a href="documents/noa-school-supplies.pdf" class="noa-link" target="_blank">
                    📄 View NOA
                </a>
            </div>

            <!-- NOA CARD 3 -->
            <div class="noa-card">
                <h3>Road Maintenance Project</h3>
                <p>Notice of Award for barangay road maintenance works.</p>
                <a href="documents/noa-road-maintenance.pdf" class="noa-link" target="_blank">
                    📄 View NOA
                </a>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
