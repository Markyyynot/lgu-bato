<?php 
$currentPage = 'procurement-reports.php'; 
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

/* CONTENT */
.content-section {
    max-width: 1100px;
    margin: 0 auto 80px;
    padding: 0 20px;
    text-align: center;
}

/* CARD GRID */
.report-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 30px;
    align-items: stretch;
}

/* LINK WRAPPER */
.report-card-link {
    text-decoration: none;
    color: inherit;
}

/* CARD */
.report-card {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(27, 42, 78, 0.15);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.report-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(27, 42, 78, 0.25);
    cursor: pointer;
}

.report-card h3 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 12px;
}

.report-card p {
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 20px;
}

/* BUTTON (optional) */
.report-link {
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

.report-link:hover {
    background: #1b2a4e;
    color: #ffffff;
}

/* RESPONSIVE STYLES */

/* Tablets */
@media (max-width: 992px) {
    .mayor-title {
        font-size: 36px;
    }
    .report-card h3 {
        font-size: 18px;
    }
    .report-card p {
        font-size: 14px;
    }
    .report-link {
        font-size: 15px;
        padding: 10px 18px;
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
    .report-card {
        padding: 25px 20px;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .mayor-title {
        font-size: 28px;
    }
    .report-card h3 {
        font-size: 16px;
    }
    .report-card p {
        font-size: 13px;
    }
    .report-link {
        font-size: 14px;
        padding: 10px 16px;
    }
}
</style>

<section>
    <h2 class="mayor-title"><i class="fa-solid fa-chart-line"></i>Procurement Reports</h2>

    <div class="content-section">
        <p>
            Access official procurement planning and monitoring documents for transparency and public reference.
        </p>

        <div class="report-grid">

            <!-- APP -->
            <a href="app.php" class="report-card-link">
                <div class="report-card">
                    <h3>Annual Procurement Plan (APP)</h3>
                    <p>The approved Annual Procurement Plan outlining all planned procurements for the fiscal year.</p>
                    <span class="report-link">📄 View APP</span>
                </div>
            </a>

            <!-- PMR -->
            <a href="pmr.php" class="report-card-link">
                <div class="report-card">
                    <h3>Procurement Monitoring Report</h3>
                    <p>Quarterly and annual monitoring report showing the status of procurement activities.</p>
                    <span class="report-link">📄 View PMR</span>
                </div>
            </a>

            <!-- SUPPLEMENTAL APP-CSE -->
            <a href="cse.php" class="report-card-link">
                <div class="report-card">
                    <h3>Supplemental APP-CSE</h3>
                    <p>Supplemental Annual Procurement Plan for Common-Use Supplies and Equipment.</p>
                    <span class="report-link">📄 View Document</span>
                </div>
            </a>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
