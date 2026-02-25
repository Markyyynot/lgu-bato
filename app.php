<?php 
$currentPage = 'app.php'; 
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

/* FLEX CONTAINER FOR BACK + TITLE */
.page-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin: 30px 0 100px;
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
   DOCUMENT GRID (HORIZONTAL)
=========================== */
.documents-wrapper {
    max-width: 1100px;
    margin: 0 auto 80px;
    padding: 0 20px;

    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
}

/* DOCUMENT CARD */
.document-card {
    background: #ffffff;
    padding: 40px 30px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(27, 42, 78, 0.15);
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
@media (max-width: 992px) {
    .mayor-title {
        font-size: 36px;
    }
    .document-card p {
        font-size: 16px;
    }
}

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
}

@media (max-width: 480px) {
    .mayor-title {
        font-size: 28px;
    }
    .document-card p {
        font-size: 14px;
    }
}

/* ===========================
   SEARCH BAR
=========================== */
.search-box {
    position: relative;
}

.search-box input {
    padding: 10px 38px 10px 14px;
    border-radius: 30px;
    border: 2px solid #1b2a4e;
    outline: none;
    font-size: 15px;
    width: 260px;
    transition: 0.3s ease;
}

.search-box input:focus {
    box-shadow: 0 0 8px rgba(27,42,78,0.3);
}

.search-box i {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #1b2a4e;
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
        <i class="fa-solid fa-file-lines"></i>
        Annual Procurement Plan (APP)
    </h2>

    <!-- SEARCH BAR -->
    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Search document...">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>

</div>

    <!-- DOCUMENT GRID -->
    <div class="documents-wrapper">

        <div class="document-card">
            <img src="assets/app/1.jpeg" alt="APP Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of Two- Unit TV Set for Mayor's Office of LGU- Bato, Leyte</p>
            <a href="assets/app/1.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app/2.jpeg" alt="APP Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Construction of Septic Tank, Brgy. Iniguihan, Bato, Leyte</p>
            <a href="assets/app/2.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app/3.jpeg" alt="APP Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Construction of Naga Spillway, Brgy. Naga, Bato, Leyte</p>
            <a href="assets/app/3.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app/4.jpeg" alt="APP Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of Drugs and Medicines for RHU- Bato, Leyte</p>
            <a href="assets/app/4.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app/5.jpeg" alt="APP Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Procurement of 2- unit Floor Mounted Air- Conditioning Unit for use at the Third Floor Function Hall, Municipality of Bato, Leyte</p>
            <a href="assets/app/5.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

        <div class="document-card">
            <img src="assets/app/6.jpeg" alt="APP Cover" style="width:100%; border-radius:8px; margin-bottom:20px;">
            <p>Construction of Perimeter Fence for Infirmarty Super Health Center & RHU Annex at Brgy. Iniguihan, Bato, Leyte</p>
            <a href="assets/app/6.xlsx" target="_blank">📄 DOWNLOAD</a>
        </div>

    </div>
</section>

<button id="backToTop" title="Go to top">↑ Top</button>


<script>
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

/* SEARCH FUNCTION */
const searchInput = document.getElementById("searchInput");
const cards = document.querySelectorAll(".document-card");

searchInput.addEventListener("keyup", function () {
    const searchValue = this.value.toLowerCase();

    cards.forEach(card => {
        const text = card.innerText.toLowerCase();

        if (text.includes(searchValue)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>