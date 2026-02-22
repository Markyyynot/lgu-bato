<?php include 'includes/header.php'; ?>
<style>

    .official-card a {
    text-decoration: none; /* removes underline */
    color: inherit;         /* keeps the h3 color */
}

/* Optional: keep hover effect without underline */
.official-card a:hover {
    text-decoration: none;
}

</style>

<section class="officials-section">
    <h2 class="mayor-title"><i class="fa-solid fa-scale-balanced"></i>Legislative Department</h2>

    <div class="officials-grid">
        <!-- SB and Vice Mayor Office -->
        <div class="official-card">
            <a href="sb_vice_mayor.php">
                <img src="assets/vice/vice2.png" alt="SB and Vice Mayor Office">
<p style="font-family: fantasy; text-transform: uppercase; color: #1b2a4e; text-align: center;">Vice Mayor's Office</p>
            </a>
        </div>

        <!-- Office of the SB Secretary -->
        <div class="official-card">
            <a href="sb_secretary.php">
                <img src="assets/sb/sb.png" alt="Office of the SB Secretary">
<p style="font-family: fantasy; text-transform: uppercase; color: #1b2a4e; text-align: center;">Office of the sb secretary</p>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
