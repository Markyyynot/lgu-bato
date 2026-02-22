<?php 
$currentPage = 'executive-order.php'; 
include 'includes/header.php'; 
?>

<style>
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
    margin: 30px 0 40px;
}

.content-section {
    max-width: 1200px;
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
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
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
    <h2 class="mayor-title"><i class="fa-solid fa-file-circle-check"></i> Executive Orders</h2>
    <div class="content-section">
        <p>List of recent executive orders issued by the municipality. Each EO provides guidelines and instructions for public administration, health, safety, and local development.</p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>EO Number</th>
                        <th>Title</th>
                        <th>Date Issued</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>EO No. 01-2026</td>
                        <td>Local Health and Safety Measures</td>
                        <td>Jan 5, 2026</td>
                        <td><a href="#">View Document</a></td>
                    </tr>
                    <tr>
                        <td>EO No. 02-2026</td>
                        <td>Environmental Protection Guidelines</td>
                        <td>Jan 12, 2026</td>
                        <td><a href="#">View Document</a></td>
                    </tr>
                    <tr>
                        <td>EO No. 03-2026</td>
                        <td>Tourism Development Plan</td>
                        <td>Feb 1, 2026</td>
                        <td><a href="#">View Document</a></td>
                    </tr>
                    <tr>
                        <td>EO No. 04-2026</td>
                        <td>Traffic and Road Safety Measures</td>
                        <td>Feb 10, 2026</td>
                        <td><a href="#">View Document</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
