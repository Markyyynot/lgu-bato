<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LGU Bato, Leyte | Official Website Of Government Of Bato</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="icon" type="image/png" href="assets/images/seal2.png">

<style>
/* ===============================
   NAVBAR
================================ */
.main-navbar {
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    background-color: #1b2a4e;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding-top: 12px;
    position: relative;
    z-index: 10;
}

.main-navbar i {
    margin-right: 6px;
    font-size: 0.9rem;
}

.main-navbar a,
.main-navbar .dropbtn {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 6px 16px;
    text-transform: uppercase;
    position: relative;
    display: inline-flex;
    align-items: center;
    background: none;
    border: none;
    cursor: pointer;
}

/* LEFT → RIGHT UNDERLINE (original animation) */
.main-navbar a::after,
.main-navbar .dropbtn::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 4px;
    background-color: white;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.6s ease;
}

.main-navbar a:hover::after,
.main-navbar a.active::after,
.main-navbar .dropbtn:hover::after {
    transform: scaleX(1);
}

/* DIVIDERS */
.main-navbar > a:not(:last-child),
.main-navbar > .dropdown:not(:last-child) {
    border-right: 1px solid rgba(255, 255, 255, 0.5);
}

/* ===============================
   DROPDOWN
================================ */
.dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #1b2a4e;
    min-width: 220px;
    display: none;
    flex-direction: column;
    border-radius: 0 0 6px 6px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    z-index: 9999;
}

.dropdown-menu a {
    padding: 10px 15px;
    font-size: 0.85rem;
    border-right: none;
}

.dropdown-menu a:hover {
    background-color: #002f6c;
}

/* Hover on desktop */
.dropdown:hover .dropdown-menu {
    display: flex;
}

/* ===============================
   MOBILE STYLES
================================ */
.menu-toggle {
    display: none;
    background: none;
    border: none;
    color: white;
    font-size: 1.8rem;
    cursor: pointer;
    padding: 10px 15px;
}

@media (max-width: 768px) {
    .menu-toggle {
        display: block;
    }

    .main-navbar a,
    .main-navbar .dropdown {
        display: none;
        width: 100%;
    }

    .main-navbar.active a,
    .main-navbar.active .dropdown {
        display: block;
    }

    .dropdown-menu {
        position: static;
        max-height: 0;
        overflow: hidden;
        flex-direction: column;
        transition: max-height 0.3s ease;
    }

    .dropdown.active .dropdown-menu {
        max-height: 500px; /* adjust if many links */
    }

    /* REMOVE ARROW ROTATION: no ::after changes for mobile */
}
</style>
</head>
<body>

<header>
    <div class="header-container new-header-layout">
        <img src="assets/images/seal2.png" alt="LGU Bato Logo" class="header-logo">
        <div class="header-text">
            <span class="country">Republic of the Philippines</span>
            <h1>LGU BATO, LEYTE</h1>
            <span class="unit">Local Government Unit of Bato, Leyte</span>
            <div class="pst-time" id="pstTime"></div>
        </div>
    </div>
</header>

<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<nav class="main-navbar">
    <button class="menu-toggle" id="menuToggle">
        <i class="fa-solid fa-bars"></i>
    </button>

    <a href="https://www.gov.ph" target="_blank">
        <i class="fa-solid fa-landmark"></i> GOVPH
    </a>

    <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-house"></i> HOME
    </a>

    <!-- GOVERNMENT DROPDOWN -->
    <div class="dropdown">
        <a href="#" class="dropbtn">
            <i class="fa-solid fa-building-columns"></i> GOVERNMENT &#x25BE;
        </a>
        <div class="dropdown-menu">
            <a href="executive.php" class="<?= $currentPage == 'executive.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-user-tie"></i> Executive Department
            </a>
            <a href="legislative.php" class="<?= $currentPage == 'legislative.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-scale-balanced"></i> Legislative Department
            </a>
            <a href="barangay.php" class="<?= $currentPage == 'barangay.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-people-group"></i> Barangay
            </a>
        </div>
    </div>

    <!-- TOURISM DROPDOWN -->
    <div class="dropdown">
        <a href="#" class="dropbtn">
            <i class="fa-solid fa-umbrella-beach"></i> TOURISM &#x25BE;
        </a>
        <div class="dropdown-menu">
            <a href="batobalani.php" class="<?= $currentPage == 'batobalani.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-umbrella-beach"></i> Batobalani
            </a>
        </div>
    </div>

    <!-- TRANSPARENCY DROPDOWN -->
    <div class="dropdown">
        <a href="#" class="dropbtn">
            <i class="fa-solid fa-file-lines"></i> TRANSPARENCY &#x25BE;
        </a>
        <div class="dropdown-menu">
            <a href="full-disclosure.php" class="<?= $currentPage == 'full-disclosure.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-shield-halved"></i> Full Disclosure Policy
            </a>
            <a href="executive-orders.php" class="<?= $currentPage == 'executive-orders.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-file-circle-check"></i> Executive Order
            </a>
            <a href="ordinance.php" class="<?= $currentPage == 'ordinance.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-scroll"></i> Ordinance
            </a>
            <a href="resolutions.php" class="<?= $currentPage == 'resolutions.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-file-signature"></i> Resolutions
            </a>
        </div>
    </div>

    <!-- BAC DROPDOWN -->
    <div class="dropdown">
        <a href="#" class="dropbtn">
            <i class="fa-solid fa-gavel"></i> BAC &#x25BE;
        </a>
        <div class="dropdown-menu">
            <a href="invite-bid.php" class="<?= $currentPage == 'invite-bid.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-envelope-open-text"></i> Invitation to BID
            </a>
            <a href="documentation.php" class="<?= $currentPage == 'documentation.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-file-contract"></i> Procurement Documentation
            </a>
            <a href="reports.php" class="<?= $currentPage == 'reports.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-chart-line"></i> Procurement Reports
            </a>
        </div>
    </div>

    <!-- OTHER LINKS DROPDOWN -->
    <div class="dropdown">
        <a href="#" class="dropbtn">
            <i class="fa-solid fa-link"></i> OTHER LINKS &#x25BE;
        </a>
        <div class="dropdown-menu">
            <a href="downloadable-forms.php" class="<?= $currentPage == 'downloadable-forms.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-file-arrow-down"></i> Downloadable Forms
            </a>
            <a href="bpls.php" class="<?= $currentPage == 'bpls.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-briefcase"></i> BPLS
            </a>
            <a href="bpas.php" class="<?= $currentPage == 'bpas.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-building"></i> BPAS
            </a>
            <a href="gpmts.php" class="<?= $currentPage == 'gpmts.php' ? 'active' : '' ?>">
                <i class="fa-solid fa-boxes-packing"></i> GPMTS
            </a>
        </div>
    </div>

    <a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-circle-info"></i> ABOUT US
    </a>
</nav>

<main class="container">

<script>
// Philippine Standard Time
function updatePST() {
    const options = {
        timeZone: 'Asia/Manila',
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    };
    document.getElementById('pstTime').innerHTML =
        'Philippine Standard Time: ' +
        new Intl.DateTimeFormat('en-PH', options).format(new Date());
}
updatePST();
setInterval(updatePST, 1000);

// MOBILE MENU TOGGLE
const menuToggle = document.getElementById('menuToggle');
const navbar = document.querySelector('.main-navbar');
menuToggle.addEventListener('click', () => {
    navbar.classList.toggle('active');
});

// MOBILE DROPDOWN TOGGLE WITH SLIDE & SINGLE OPEN
const dropdowns = document.querySelectorAll('.dropdown');
dropdowns.forEach(drop => {
    const dropbtn = drop.querySelector('.dropbtn');
    dropbtn.addEventListener('click', e => {
        if(window.innerWidth <= 768){
            e.preventDefault();
            drop.classList.toggle('active');
            dropdowns.forEach(other => {
                if(other !== drop){
                    other.classList.remove('active');
                }
            });
        }
    });
});
</script>

</body>
</html>
