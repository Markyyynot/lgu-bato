<?php 
$currentPage = 'pmr.php'; 
include 'includes/header.php'; 
?>

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
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
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

/* ===========================
   CONTENT GRID (FIXED)
=========================== */
.content-section {
    max-width: 1100px;
    margin: 0 auto 80px;
    padding: 0 20px;

    display: grid;
    grid-template-columns: repeat(2, 1fr); /* horizontal layout */
    gap: 30px;
    justify-items: center;
}

/* DOCUMENT CARD */
.document-card {
    background: #ffffff;
    padding: 40px 30px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(27, 42, 78, 0.15);
    width: 100%;
    max-width: 500px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    text-align: center;
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

/* Stack cards on tablet/mobile */
@media (max-width: 900px) {
    .content-section {
        grid-template-columns: 1fr;
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
    <!-- BACK + TITLE -->
    <div class="page-header">
        <div class="back-btn" onclick="history.back()">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back</span>
        </div>

        <h2 class="mayor-title">
            <i class="fa-solid fa-scroll"></i>
            Procurement Monitoring Report
        </h2>
    </div>

    <!-- DOCUMENT GRID -->
    <div class="content-section">

        <div class="document-card">
            <img src="assets/pmr/1.jpeg" alt="PMR Cover"style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Department of Budget and Management Annual Procurement Plan JAN-JUN-2023</p>
            <a href="assets/pmr/DepartmentofBudgetandManagementAnnualProcurementPlanJAN-JUN-2023.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/pmr/2.jpeg" alt="PMR Cover"style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Department of Budget and Management Annual Procurement Plan JAN-DEC-2023</p>
            <a href="assets/pmr/DepartmentofBudgetandManagementAnnualProcurementPlanJAN-DEC-2023.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

    </div>
</section>

<button id="backToTop" title="Go to top">↑ Top</button>


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