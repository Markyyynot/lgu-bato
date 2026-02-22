<footer>
    <div class="footer-container">
        <!-- Left: Logo + Republic -->
        <div class="footer-left">
            <a href="https://www.gov.ph" target="_blank">
                <img src="assets/images/logo.png" alt="Republic Logo">
            </a>
            <p>Republic of the Philippines</p>
        </div>

        <!-- Center: About GOVPH -->
        <div class="footer-center">
            <h4>About GOVPH</h4>
            <br>
            <p>Official website of the Philippine government providing information and services to citizens.</p>
        </div>

        <!-- Right: Government Links -->
        <div class="footer-right">
            <h4>Government Links</h4>
            <br>

            <ul>
                <li><a href="https://www.op.gov.ph" target="_blank">Office of the President</a></li>
                <li><a href="https://www.ovp.gov.ph" target="_blank">Office of the Vice President</a></li>
                <li><a href="https://www.senate.gov.ph" target="_blank">Senate of the Philippines</a></li>
                <li><a href="https://www.congress.gov.ph" target="_blank">House of Representatives</a></li>
                <li><a href="https://www.sc.judiciary.gov.ph" target="_blank">Supreme Court</a></li>
                <li><a href="https://www.oca.judiciary.gov.ph" target="_blank">Court of Appeals</a></li>
                <li><a href="https://sb.judiciary.gov.ph" target="_blank">Sandiganbayan</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-bottom">&copy; <?= date('Y'); ?> All Rights Reserved.</p>
</footer>

<style>
/* =============================== */
/* FOOTER WITH DARK OVERLAY, COPYRIGHT CENTERED, ALL CAPS */
/* =============================== */
footer {
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    position: relative;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    box-sizing: border-box;
    padding: 40px 20px 60px 20px; /* extra bottom padding for copyright */
    color: white;
    overflow: hidden;
    text-transform: uppercase; /* make all text uppercase */
}

/* Gradient background */
footer::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, #2455BF, #28989C, #00BFE6);
    z-index: 1;
}

/* Dark overlay on top of gradient */
footer::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 2;
}

/* Footer content above overlay */
.footer-container {
    position: relative;
    z-index: 3;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: auto;
    gap: 20px;
    text-transform: uppercase; /* ensure all container text is uppercase */
}

.footer-left,
.footer-center,
.footer-right {
    flex: 1 1 250px;
}

.footer-left img {
    width: 200px;
    height: auto;
    display: block;
    margin: 0 auto 10px auto;
    transition: transform 0.3s ease;
}

.footer-left img:hover {
    transform: scale(1.05);
}

.footer-left p {
    margin: 0;
    font-size: 1rem;
    font-weight: bold;
}

.footer-center p {
    max-width: 300px;
    margin: 0 auto;
    font-size: 0.9rem;
    line-height: 1.4;
}

.footer-right ul {
    list-style: none;
    padding: 0;
}

.footer-right ul li {
    margin-bottom: 8px;
}

.footer-right ul li a {
    color: white;
    text-decoration: none;
    position: relative;
    transition: all 0.5s ease;
    font-weight: 500;
}

/* Underline animation on hover (gold accent) */
.footer-right ul li a::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 3px;
    bottom: -3px;
    left: 0;
    background-color: #caa54b;
    transition: width 0.5s ease;
}

.footer-right ul li a:hover::after,
.footer-right ul li a.active::after {
    width: 100%;
}

/* Footer bottom copyright - centered */
.footer-bottom {
    position: relative;
    z-index: 3;
    margin-top: 30px;
    font-size: 0.85rem;
    opacity: 0.9;
    text-align: center;
    text-transform: uppercase; /* make copyright uppercase */
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-center p {
        max-width: 90%;
    }

    .footer-left img {
        width: 150px;
        margin-bottom: 8px;
    }

    .footer-left p {
        font-size: 0.9rem;
    }
}
</style>
