<?php 
$currentPage = 'invite-bid.php'; 
include 'includes/header.php'; 
?>

<style>

/* =======================
   BACK TO TOP BUTTON
======================= */
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

/* =======================
   Page Style
======================= */
body {
    background-color: #f5f0e6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b2a4e;
}

.mayor-title {
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

/* =======================
   TITLE + SEARCH BAR
======================= */
.title-search-container {
    max-width: 1000px;
    margin: 30px auto 20px;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

/* Search box with icon */
.search-box {
    position: relative;
    width: 320px;
    max-width: 100%;
}

.search-box i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #1b2a4e;
    font-size: 16px;
    pointer-events: none;
}

.search-box input {
    width: 100%;
    padding: 10px 14px 10px 40px; /* space for icon */
    border: 2px solid #1b2a4e;
    border-radius: 8px;
    font-size: 16px;
    outline: none;
}

.search-box input:focus {
    box-shadow: 0 0 6px rgba(27,42,78,0.3);
}

/* =======================
   CONTENT
======================= */
.content-section {
    max-width: 1000px;
    margin: 0 auto 60px;
    padding: 0 20px;
    font-size: 18px;
    line-height: 1.8;
    text-align: center;
}

/* =======================
   TABLE
======================= */
.table-wrapper {
    overflow-x: auto;
    margin-top: 30px;
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
}

table th, table td {
    border: 1px solid #1b2a4e;
    padding: 12px 10px;
    text-align: left;
    font-size: 16px;
}

table th {
    background-color: #1b2a4e;
    color: #fff;
}

table tr:nth-child(even) {
    background-color: #e6e0d6;
}

table a {
    color: #1b2a4e;
    text-decoration: none;
}

table a:hover {
    text-decoration: underline;
}

/* =======================
   RESPONSIVE
======================= */
@media (max-width: 768px) {
    .mayor-title { font-size: 32px; }

    .title-search-container {
        flex-direction: column;
        align-items: flex-start;
    }

    #searchInput { width: 100%; }

    .content-section { font-size: 16px; }
    table th, table td { font-size: 14px; }
}

@media (max-width: 480px) {
    .mayor-title { font-size: 28px; }
    table th, table td { font-size: 12px; }
}
</style>

<section>

    <!-- TITLE + SEARCH -->
    <div class="title-search-container">
        <h2 class="mayor-title">
            <i class="fa-solid fa-envelope-open-text"></i>
            Invitation to BID
        </h2>

        <div class="search-box">
            <input type="text" id="searchInput"placeholder="Search title, reference no., or date...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

    <div class="content-section">
        <p>
            Here you can view all current Invitations to BID from the municipality.
            Each invitation provides details about upcoming projects, date created,
            and requirements for prospective bidders.
        </p>

        <div class="table-wrapper">
            <table>
                <thead style="text-transform: uppercase;">
                    <tr>
                        <th style="text-align:center;">Title</th>
                        <th>Bid Reference No.</th>
                        <th>Date Created</th>
                        <th>Download</th>
                    </tr>
                </thead>

                <tbody id="bidTable">
                    <tr>
                        <td>Procurement of Office supplies and consumables for the 1st quarter of 2025, Bato, Leyte.</td>
                        <td>11750229</td>
                        <td>Feb 11, 2025</td>
                        <td><a href="assets/itb/itb1.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>DRUGS AND MEDICINES FOR RHU</td>
                        <td>11745907</td>
                        <td>Feb 10, 2025</td>
                        <td><a href="assets/itb/itb2.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>Provision of Sound System Service for the 139th Joint Parish & LGU Founding Anniversary</td>
                        <td>12148748</td>
                        <td>June 19, 2025</td>
                        <td><a href="assets/itb/itb3.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>Provision of Meals for the 139th Joint Parish & LGU Founding Anniversary</td>
                        <td>12148689</td>
                        <td>June 19, 2025</td>
                        <td><a href="assets/itb/itb4.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>Rehabilitation of Bato Wet Market Building</td>
                        <td>11733980</td>
                        <td>Feb 6, 2025</td>
                        <td><a href="assets/itb/itb5.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>Crawler Excavator</td>
                        <td>11750229</td>
                        <td>Feb 11, 2025</td>
                        <td><a href="assets/itb/itb6.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>Post Closure Project Phase II</td>
                        <td>11702986</td>
                        <td>Jan 28, 2025</td>
                        <td><a href="assets/itb/itb7.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>Dumptruck</td>
                        <td>11678513</td>
                        <td>Jan 21, 2025</td>
                        <td><a href="assets/itb/itb8.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>Heavy Duty Glass Crusher</td>
                        <td>11678482</td>
                        <td>Jan 21, 2025</td>
                        <td><a href="assets/itb/itb9.docx">DOWNLOAD</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<button id="backToTop" title="Go to top">↑ Top</button>

<script>
/* =======================
   LIVE SEARCH
======================= */
document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#bidTable tr");

    rows.forEach(function(row) {
        let text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? "" : "none";
    });
});

/* =======================
   BACK TO TOP BUTTON
======================= */
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