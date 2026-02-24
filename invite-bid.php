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


/* =======================
   Page Colors and Typography
======================= */
body {
    background-color: #f5f0e6; /* beige background */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b2a4e; /* deep blue text */
}

.mayor-title {
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-align: center;
    margin: 30px 0 60px;
    position: relative;
}

.content-section {
    max-width: 1000px;
    margin: 0 auto 60px;
    padding: 0 20px;
    font-size: 18px;
    line-height: 1.8;
    text-align: center;
}

/* =======================
   Table Styling
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
    background-color: #e6e0d6; /* light beige rows */
}

table a {
    color: #1b2a4e;
    text-decoration: none;
}

table a:hover {
    text-decoration: underline;
}

/* =======================
   Responsive
======================= */
@media (max-width: 768px) {
    .mayor-title { font-size: 32px; }
    .content-section { font-size: 16px; }
    table th, table td { font-size: 14px; padding: 10px 8px; }
}
@media (max-width: 480px) {
    .mayor-title { font-size: 28px; }
    .content-section { font-size: 14px; padding: 0 10px; }
    table th, table td { font-size: 12px; padding: 8px 6px; }
}
</style>

<section>
    <h2 class="mayor-title"><i class="fa-solid fa-envelope-open-text"></i>Invitation to BID</h2>
    <div class="content-section">
        <p>Here you can view all current Invitations to BID from the municipality. Each invitation provides details about upcoming projects, deadlines, and requirements for prospective bidders.</p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Bid Reference No.</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Construction of Municipal Hall</td>
                        <td>BID-2026-001</td>
                        <td>Feb 28, 2026</td>
                        <td><a href="#">View Document</a></td>
                    </tr>
                    <tr>
                        <td>Procurement of School Supplies</td>
                        <td>BID-2026-002</td>
                        <td>Mar 5, 2026</td>
                        <td><a href="#">View Document</a></td>
                    </tr>
                </tbody>
            </table>
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
