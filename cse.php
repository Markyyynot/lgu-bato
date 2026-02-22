<?php 
$currentPage = 'cse.php'; 
include 'includes/header.php'; 
?>

<style>
/* ===========================
   BASE STYLES
=========================== */
body {
    background-color: #f5f0e6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b2a4e;
    margin: 0;
    padding: 0;
}

/* FLEX CONTAINER FOR BACK + TITLE */
.page-header {
    display: flex;
    align-items: center;
    justify-content: center; /* center title & button */
    gap: 20px;
    flex-wrap: wrap; /* wrap on small screens */
    margin: 30px 0 60px;
}

/* TITLE */
.mayor-title {
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-align: center;
    margin: 0;
}

/* BACK BUTTON */
.back-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    font-weight: 700;
    color: #1b2a4e;
    background: #ffffff;
    padding: 10px 16px;
    border-radius: 30px;
    box-shadow: 0 6px 15px rgba(27,42,78,0.15);
    transition: all 0.3s ease;
}

.back-btn i {
    font-size: 1.1rem;
}

.back-btn span {
    font-size: 16px;
}

.back-btn:hover {
    background: #1b2a4e;
    color: #fff;
    transform: translateX(-5px);
}

/* CONTENT WRAPPER */
.content-section {
    max-width: 1000px;
    margin: 0 auto 80px;
    padding: 0 20px;
    text-align: center;
}

/* DOCUMENT CARD */
.document-card {
    background: #ffffff;
    padding: 40px 30px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(27, 42, 78, 0.15);
    max-width: 600px;
    margin: 0 auto;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.document-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(27, 42, 78, 0.2);
}

.document-card p {
    font-size: 18px;
    line-height: 1.8;
}

/* BUTTON */
.document-card a {
    display: inline-block;
    margin-top: 20px;
    padding: 14px 24px;
    font-size: 16px;
    font-weight: 600;
    color: #1b2a4e;
    border: 2px solid #1b2a4e;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.2s ease;
}

.document-card a:hover {
    background: #1b2a4e;
    color: #fff;
}

/* ===========================
   RESPONSIVE
=========================== */

/* Tablets */
@media (max-width: 992px) {
    .mayor-title {
        font-size: 36px;
    }
    .document-card p {
        font-size: 16px;
    }
    .document-card a {
        font-size: 15px;
        padding: 12px 22px;
    }
    .back-btn {
        padding: 8px 14px;
        gap: 6px;
    }
    .back-btn i {
        font-size: 1rem;
    }
    .back-btn span {
        font-size: 15px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .mayor-title {
        font-size: 32px;
    }
    .document-card {
        padding: 30px 20px;
    }
    .document-card p {
        font-size: 15px;
    }
    .document-card a {
        font-size: 14px;
        padding: 12px 20px;
    }
    .back-btn {
        padding: 7px 12px;
        gap: 5px;
    }
    .back-btn i {
        font-size: 0.95rem;
    }
    .back-btn span {
        font-size: 14px;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .mayor-title {
        font-size: 28px;
    }
    .document-card p {
        font-size: 14px;
    }
    .document-card a {
        font-size: 13px;
        padding: 10px 18px;
    }
    .back-btn {
        padding: 6px 10px;
        gap: 4px;
    }
    .back-btn i {
        font-size: 0.85rem;
    }
    .back-btn span {
        font-size: 13px;
    }
}
</style>

<section>
    <!-- BACK + TITLE FLEX -->
    <div class="page-header">
        <div class="back-btn" onclick="history.back()">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back</span>
        </div>
        <h2 class="mayor-title"><i class="fa-solid fa-clipboard-list"></i>Supplemental APP-CSE</h2>
    </div>

    <!-- DOCUMENT CARD -->
    <div class="content-section">
        <div class="document-card">
            <p>
                View the Supplemental Annual Procurement Plan for Common-Use Supplies and Equipment.
            </p>
            <a href="documents/supplemental-app-cse.pdf" target="_blank">📄 View Document</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
