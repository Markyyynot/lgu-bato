<?php 
$currentPage = 'cse.php'; 
include 'includes/header.php'; 
?>

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

/* ===========================
   HEADER SECTION
=========================== */
.page-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    margin: 30px auto 60px;
    max-width: 1200px;
    padding: 0 20px;
}

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

/* SEARCH BOX */
.search-box {
    display: flex;
    align-items: center;
    background: #ffffff;
    padding: 10px 14px;
    border-radius: 30px;
    box-shadow: 0 6px 15px rgba(27,42,78,0.15);
    gap: 8px;
}

.search-box i {
    color: #1b2a4e;
    font-size: 14px;
}

.search-box input {
    border: none;
    outline: none;
    font-size: 15px;
    background: transparent;
    width: 200px;
    color: #1b2a4e;
}

/* ===========================
   CONTENT GRID
=========================== */
.content-section {
    max-width: 1200px;
    margin: 0 auto 80px;
    padding: 0 20px;

    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}

/* DOCUMENT CARD */
.document-card {
    background: #ffffff;
    padding: 40px 30px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(27, 42, 78, 0.15);
    max-width: 600px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.document-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(27, 42, 78, 0.2);
}

.document-card p {
    font-size: 18px;
    line-height: 1.8;
    text-align: center;
}

.document-card a {
    display: block;
    width: fit-content;
    margin: 20px auto 0;
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
@media (max-width: 992px) {
    .mayor-title { font-size: 36px; }
    .document-card p { font-size: 16px; }
    .document-card a {
        font-size: 15px;
        padding: 12px 22px;
    }
    .back-btn { padding: 8px 14px; gap: 6px; }
    .back-btn i { font-size: 1rem; }
    .back-btn span { font-size: 15px; }
}

@media (max-width: 768px) {
    .mayor-title { font-size: 32px; }
    .document-card { padding: 30px 20px; }
    .document-card p { font-size: 15px; }
    .document-card a {
        font-size: 14px;
        padding: 12px 20px;
    }
    .back-btn { padding: 7px 12px; gap: 5px; }
    .back-btn i { font-size: 0.95rem; }
    .back-btn span { font-size: 14px; }
}

@media (max-width: 480px) {
    .mayor-title { font-size: 28px; }
    .document-card p { font-size: 14px; }
    .document-card a {
        font-size: 13px;
        padding: 10px 18px;
    }
    .back-btn { padding: 6px 10px; gap: 4px; }
    .back-btn i { font-size: 0.85rem; }
    .back-btn span { font-size: 13px; }
}

</style>

<section>

    <div class="page-header">
        <div class="back-btn" onclick="history.back()">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back</span>
        </div>

        <h2 class="mayor-title">
            <i class="fa-solid fa-clipboard-list"></i> Supplemental APP-CSE
        </h2>

        <div class="search-box">
            <i class="fa-solid fa-search"></i>
            <input type="text" id="searchInput" placeholder="Search document...">
        </div>
    </div>

    <div class="content-section">

        <!-- DOCUMENT CARD -->
        <div class="document-card">
            <img src="assets/app-cse/11.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>ANNUAL PROCUREMENT PLAN - COMMON-USE SUPPLIES AND EQUIPMENT (APP-CSE) 2024 FORM</p>
            <a href="assets/app-cse/11.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/12.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>ANNUAL PROCUREMENT PLAN - COMMON-USE SUPPLIES AND EQUIPMENT (APP-CSE) 2024 FORM - OTHER ITEMS</p>
            <a href="assets/app-cse/12.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/1.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Rehabilitation of Port Essential Facilities (Guard Post, Male CR, Causeway Damage Portion), Brgy. Kalanggaman & Brgy. Iniguihan, Bato, Leyte</p>
            <a href="assets/app-cse/01.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/2.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Rehabilitation of Port Essential Facilities (Guard Post, Male CR, Causeway Damage Portion), Brgy. Kalanggaman & Brgy. Iniguihan, Bato, Leyte</p>
            <a href="assets/app-cse/02.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/3.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurment of One (1) Unit Brand New Crawler Excavator for use in Solid Waste Management and in the Proposed Sanitary Landfill in Brgy. Tagaytay, Bato, Leyte</p>
            <a href="assets/app-cse/03.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/4.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of One (1) Unit Brand New Heavy Duty Glass Crusher for use in the Solid Waste Management and in the Proposed Sanitary Landfill of Brgy. Tagaytay, Bato, Leyte</p>
            <a href="assets/app-cse/04.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/5.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of One (1)Unit Brand New 4 x 2, 6 Wheeler Dumptruck, 10cu.m. for Solid Waste Management and in the Proposed Sanitary Landfill of Brgy. Tagaytay, Bato, Leyte</p>
            <a href="assets/app-cse/05.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/6.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of Fuel, Oil and Lubricants for use in all Vehicles of LGU (Light and Heavy), Bato, Leyte</p>
            <a href="assets/app-cse/06.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/7.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Rehabilitation of Bato Wet Market Building, Brgy. Iniguihan, Bato, Leyte</p>
            <a href="assets/app-cse/07.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/8.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of Drugs and Medicines for RHU- Bato, Leyte.</p>
            <a href="assets/app-cse/08.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/9.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of Office Supplies and Consumables for the 1st Quarter of 2025, Bato, Leyte</p>
            <a href="assets/app-cse/09.xlsx" target="_blank">📄DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app-cse/10.jpeg" alt="APP-CSE Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of Medical Supplies for Animal Bite Program Services for RHU- Bato, Leyte</p>
            <a href="assets/app-cse/10.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

    </div>
</section>

<button id="backToTop" title="Go to top">↑ Top</button>

<script>
document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();
    let cards = document.querySelectorAll(".document-card");

    cards.forEach(card => {
        let text = card.innerText.toLowerCase();
        card.style.display = text.includes(filter) ? "block" : "none";
    });
});

const backToTopBtn = document.getElementById("backToTop");

window.addEventListener("scroll", function () {
    if (window.scrollY > 250) {
        backToTopBtn.classList.add("show");
    } else {
        backToTopBtn.classList.remove("show");
    }
});

backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>

<?php include 'includes/footer.php'; ?>