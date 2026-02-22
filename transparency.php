<?php include 'includes/header.php'; ?>

<style>
/* ===============================
   TRANSPARENCY & PUBLIC DOCUMENTS
================================ */
section {
    background: #f5f1e6; /* beige background */
    font-family: "Merriweather", "Segoe UI", serif;
    max-width: 1200px;
    margin: auto;
    padding: 0 1rem 5rem; /* top padding removed, bottom kept */
}

/* TITLE (same style as other pages) */
.mayor-title {
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #1b2a4e; /* Deep blue for authority */
    text-align: center;
    margin: 30px 0 60px;
    position: relative;
}

/* GRID CARDS */
section ul {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.5rem;
    list-style: none;
    padding: 0;
    margin: 0;
}

section ul li {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
}

section ul li a {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    text-align: center;
    text-decoration: none;
    color: #1f4e79;
    font-weight: 700;
    font-size: 1.2rem; /* bigger font */
    gap: 1rem;
    min-height: 150px;
    transition: color 0.3s;
}

section ul li a i {
    font-size: 2.5rem; /* icon size */
    color: #1b2a4e;
}

section ul li:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    color: #0f2a4d;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    section ul {
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    }
}

@media (max-width: 600px) {
    section ul {
        grid-template-columns: 1fr;
    }
    
    .mayor-title {
        font-size: 1.8rem;
        flex-direction: column;
        margin-bottom: 40px; /* maintain some space on mobile */
    }
}
</style>

<section>
    <h2 class="mayor-title"><i class="fa-solid fa-file-lines"></i> Transparency & Public Documents</h2>
    <ul>
        <li>
            <a href="full-disclosure.php">
                <i class="fa-solid fa-eye"></i>
                Full Disclosure Policy
            </a>
        </li>
        <li>
            <a href="executive-orders.php">
                <i class="fa-solid fa-scroll"></i>
                Executive Orders
            </a>
        </li>
        <li>
            <a href="ordinance.php">
                <i class="fa-solid fa-gavel"></i>
                Ordinances
            </a>
        </li>
        <li>
            <a href="resolutions.php">
                <i class="fa-solid fa-file-circle-check"></i>
                Resolutions
            </a>
        </li>
    </ul>
</section>

<?php include 'includes/footer.php'; ?>
