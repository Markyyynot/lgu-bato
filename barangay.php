<?php include 'includes/header.php'; ?>

<section>
    <h2 class="mayor-title" style="text-align: center;"><i class="fa-solid fa-people-group"></i>Barangay Information</h2>

    <div class="officials-grid">
        <?php
        $barangays = [
            "Alegria", "Alejos", "Amagos", "Anahawan", "Bago",
            "Bagong Bayan", "Buli", "Cebuana", "Daan Lungsod", "Dawahon",
            "Himamaa", "Dolho", "Domagocdoc", "Guerrero", "Imelda",
            "Iniguihan", "Kalanggaman", "Katipunan", "Liberty", "Mabini",
            "Marcelo", "Naga", "Osmeña", "Plaridel", "Ponong",
            "Revilla", "San Agustin", "Sto. Niño", "Tabunok", "Tagaytay", "Tinago",
            "Tugas"
        ];

        foreach ($barangays as $index => $barangay) {
            // Default image & FB link
            $img = "assets/images/barangay" . ($index + 1) . ".jpg";
            $fbLink = "https://www.facebook.com/" . str_replace(' ', '', $barangay) . "BatoLeyte";

            // Specific overrides for your data
            if ($index == 0) { $img = "assets/images/barangay1.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=61562210038142"; }
            elseif ($index == 1) { $img = "assets/images/barangay2.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=61565286897587"; }
            elseif ($index == 2) { $img = "assets/images/barangay3.jpeg"; $fbLink = "https://www.facebook.com/people/Amagos-Medios/61576978652732/"; }
            elseif ($index == 3) { $img = "assets/images/barangay4.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=61578713529743"; }
            elseif ($index == 4) { $img = "assets/images/barangay5.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=61555474827039"; }
            elseif ($index == 5) { $img = "assets/images/barangay6.jpeg"; $fbLink = "https://www.facebook.com/ExampleBarangay3"; }
            elseif ($index == 6) { $img = "assets/images/barangay7.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=61554574240985"; }
            elseif ($index == 7) { $img = "assets/images/barangay8.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61561882867686&rdid=TvD6xrqEse7RGYiq&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1ASFYFzPQg%2F#"; }
            elseif ($index == 8) { $img = "assets/images/barangay9.jpeg"; $fbLink = "https://www.facebook.com/barangay.daanlungsod.73"; }
            elseif ($index == 9) { $img = "assets/images/barangay10.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61557760929307"; }
            elseif ($index == 10) { $img = "assets/images/barangay11.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=100064673844423"; }
            elseif ($index == 11) { $img = "assets/images/barangay12.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61553323654581"; }
            elseif ($index == 12) { $img = "assets/images/barangay13.png"; $fbLink = "https://www.facebook.com/profile.php?id=61579205675970"; }
            elseif ($index == 13) { $img = "assets/images/barangay14.jpeg"; $fbLink = "https://www.facebook.com/brgyguerrerobato"; }
            elseif ($index == 14) { $img = "assets/images/barangay15.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=100064439064127"; }
            elseif ($index == 15) { $img = "assets/images/barangay16.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61551678857102"; }
            elseif ($index == 16) { $img = "assets/images/barangay17.jpeg"; $fbLink = "https://www.facebook.com/ExampleBarangay3"; }
            elseif ($index == 17) { $img = "assets/images/barangay18.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=61580141795571"; }
            elseif ($index == 18) { $img = "assets/images/barangay19.jpeg"; $fbLink = "https://www.facebook.com/liberty.bato"; }
            elseif ($index == 19) { $img = "assets/images/barangay20.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61580339577853"; }
            elseif ($index == 20) { $img = "assets/images/barangay21.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=100082233034574"; }
            elseif ($index == 21) { $img = "assets/images/barangay22.jpg"; $fbLink = "https://www.facebook.com/profile.php?id=100069949277532"; }
            elseif ($index == 22) { $img = "assets/images/barangay23.jpeg"; $fbLink = "https://www.facebook.com/osmenabatoleyte"; }
            elseif ($index == 23) { $img = "assets/images/barangay24.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61563310426452"; }
            elseif ($index == 24) { $img = "assets/images/barangay25.jpeg"; $fbLink = "https://www.facebook.com/PonongFbPage"; }
            elseif ($index == 25) { $img = "assets/images/barangay26.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61579596706362"; }
            elseif ($index == 26) { $img = "assets/images/barangay27.jpg"; $fbLink = "https://www.facebook.com/barangay.san.agustin.bato.leyte"; }
            elseif ($index == 27) { $img = "assets/images/barangay28.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=100066807503556"; }
            elseif ($index == 28) { $img = "assets/images/barangay29.jpeg"; $fbLink = "https://www.facebook.com/barangay.tabunok.bato.leyte"; }
            elseif ($index == 29) { $img = "assets/images/barangay30.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=100082834515666"; }
            elseif ($index == 30) { $img = "assets/images/barangay31.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=100082097411325"; }
            elseif ($index == 31) { $img = "assets/images/barangay32.jpeg"; $fbLink = "https://www.facebook.com/profile.php?id=61578936071028"; }

            echo '
            <div class="official-card scroll-animate">
                <a href="' . $fbLink . '" target="_blank">
                    <img src="' . $img . '" alt="' . $barangay . '">
                </a>
                <p class="barangay-name">' . $barangay . '</p>
            </div>
            ';
        }
        ?>
    </div>
</section>

<style>
/* Grid layout (reuse your existing style if needed) */
.officials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 2rem auto;
}

/* Scroll Animation */
.scroll-animate {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s ease-out, transform 0.9s ease-out;
}

.scroll-animate.show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<script>
// Intersection Observer for smooth up/down animation
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll('.scroll-animate');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    }, { threshold: 0.1 });
    elements.forEach(el => observer.observe(el));
});
</script>

<?php include 'includes/footer.php'; ?>