<?php include 'includes/header.php'; ?>
<style>

/* ===============================
   SCROLL ANIMATION
================================ */
.scroll-animate {
    opacity: 0;
    transform: translateY(60px);
    transition: opacity 0.8s ease-out,
                transform 0.8s cubic-bezier(.22,1,.36,1);
}

.scroll-animate.show {
    opacity: 1;
    transform: translateY(0);
}

/* EMERGENCY HOTLINE SECTION */
.emergency-section {
    width: 100%;
    max-width: 1200px;
    margin: 60px auto;
    text-align: center;
    padding: 0 20px;
}

.emergency-card {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #c0392b, #e74c3c);
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    color: white;
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.4s ease, color 0.4s ease;
}

.emergency-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    background: white;
    color: red;
}

.emergency-image {
    width: 180px;
    max-width: 90%;
    height: auto;
    object-fit: cover;
    margin: 20px;
    border-radius: 12px;
}

.emergency-content {
    padding: 25px 30px;
    text-align: left;
    max-width: 600px;
}

.emergency-content h2 {
    font-size: 2rem;
    margin-bottom: 15px;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
}

.emergency-content p {
    font-size: 1.1rem;
    margin-bottom: 15px;
    line-height: 1.5;
}

.emergency-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.emergency-content ul li {
    font-size: 1.05rem;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* HERO SECTION – KEEP EXACTLY AS IS */
.hero-section {
    width: 100vw;
    height: 100vh;
    margin-left: calc(-50vw + 50%);
    position: relative;
    overflow: hidden;
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(65%);
}

.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255, 255, 255, 0.85);
    color: #1b2a4e;
    padding: 25px 30px;
    border-radius: 12px;
    text-align: center;
    max-width: 90%;
}

.hero-text h2 {
    font-size: 2.3rem;
    margin-bottom: 15px;
}

.hero-text p {
    font-size: 1.1rem;
}

/* NEWS SECTION */
.news-section {
    padding: 50px 20px;
    background-color: white;
    text-align: center;
}

.news-section h2 {
    font-size: 2.5rem;
    color: rgb(184, 0, 0);
    margin-bottom: 40px;
    text-transform: uppercase;
    font-weight: 700;
}

.news-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    justify-content: center;
}

.news-card {
    display: block;
    width: 300px;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-decoration: none;
    color: #1b2a4e;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.news-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.news-content {
    padding: 20px;
    text-align: left;
}

.news-content h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.news-content p {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.5;
}

.news-date {
    display: block;
    margin-top: 10px;
    font-size: 0.85rem;
    color: #888;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .news-card { width: 45%; }
}

@media (max-width: 768px) {
    .news-card { width: 90%; }
    .news-section h2 { font-size: 2rem; }

    .emergency-card {
        flex-direction: column;
        text-align: center;
    }

    .emergency-content {
        padding: 20px;
    }

    .emergency-content h2 {
        font-size: 1.8rem;
    }

    .emergency-content p,
    .emergency-content ul li {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .news-content h3 { font-size: 1.1rem; }
    .news-content p { font-size: 0.9rem; }
}
</style>

<!-- HERO SECTION – KEEP EXACTLY AS IS -->
<section class="hero-section">
    <img src="assets/images/bato.jpg" alt="LGU Bato" class="hero-image">
    <div class="hero-text">
        <h2 class="mayor-title">Welcome to the Official Website of LGU Bato</h2>
        <p class="mayor-title">
            Serving the people with transparency, integrity, and dedication.
            Stay updated with the latest news, events, and announcements from our municipality.
        </p>
    </div>
</section>

<!-- NEWS SECTION -->
<section class="news-section scroll-animate">
    <h2 class="scroll-animate">News</h2>
    <div class="news-cards">
        <a href="https://www.facebook.com/photo?fbid=122225496356261967&set=a.122198165498261967" class="news-card scroll-animate">
            <img src="assets/news/news1.jpg" alt="Community Health Program">
            <div class="news-content">
                <h3>Suspension of Classes</h3>
                <p>Declaring the temporary suspension of classes at all levels and all school-related operations in both public and private schools within the Municipality of Bato, Leyte on February 5 and 6, 2026.</p>
                <span class="news-date">Feb 6, 2026</span>
            </div>
        </a>

        <a href="https://www.facebook.com/photo?fbid=122224183826261967&set=a.122198165498261967" class="news-card scroll-animate">
            <img src="assets/news/news2.jpg" alt="Road Rehabilitation Project">
            <div class="news-content">
                <h3>Grand Kasadya Night 2026</h3>
                <p>Get ready, Bato! One epic night. One electrifying stage. 💥 Catch Kent Eublera, Kit, and Dwight Mativo as they light up the Baywalk with music, energy, and pure kasadya! 📅 January 25, 2026 | 8:00 PM onwards 📍 Bato Baywalk Grounds.</p>
                <span class="news-date">Jan 24, 2026</span>
            </div>
        </a>

        <a href="https://www.facebook.com/photo?fbid=122223842774261967&set=a.122198165498261967" class="news-card scroll-animate">
            <img src="assets/news/news3.jpg" alt="Town Festival Schedule">
            <div class="news-content">
                <h3>Grand Champion – Batobalani Barangay Idol 2026</h3>
                <p>Your voice, passion, and dedication brought pride to Barangay Tinago, Bato, Leyte. This victory is truly well-deserved! 🌟🎤 Padayon sa pag-lambo, Idol! The whole Bato is proud of you! 💙👏</p>
                <span class="news-date">Jan 20, 2026</span>
            </div>
        </a>

        <a href="https://www.facebook.com/photo?fbid=122223778976261967&set=a.122198165498261967" class="news-card scroll-animate">
            <img src="assets/news/news4.jpg" alt="Town Festival Schedule">
            <div class="news-content">
                <h3>🔥🎶 VESPER JAMMING! 🎶🔥</h3>
                <p>🎸 1st BATOBALANI BATTLE OF THE BANDS 🎸 with APIKISESH 📅 January 24, 2026 ⏰ 7:00 PM 📍 Bato Baywalk Grounds. Get ready for an electrifying night of music, talent, and jamming vibes as bands battle it out on stage!</p>
                <span class="news-date">Jan 20, 2026</span>
            </div>
        </a>

        <a href="https://www.facebook.com/photo/?fbid=122223593882261967&set=pcb.122223594350261967" class="news-card scroll-animate">
            <img src="assets/news/news5.jpg" alt="Town Festival Schedule">
            <div class="news-content">
                <h3>🎤✨ Who will be the next Batobalani Barangay Idol? ✨🎤</h3>
                <p>The stage is set and the voices are ready! Witness the BATOBALANI BARANGAY IDOL – GRAND FINALS and cheer for your favorite finalists as they battle it out for the title! 📅 January 20, 2026 ⏰ 7:30 PM 📍 Bato Baywalk Grounds.</p>
                <span class="news-date">Jan 18, 2026</span>
            </div>
        </a>

        <a href="https://www.facebook.com/photo/?fbid=122223331736261967&set=a.122198165498261967" class="news-card scroll-animate">
            <img src="assets/news/news6.jpg" alt="Town Festival Schedule">
            <div class="news-content">
                <h3>2026 Bato Town Fiesta | Grand Opening Salvo 🎉</h3>
                <p>Join us this January 16, 2026 (Friday) for the Grand Opening Salvo of the Bato Town Fiesta—featuring the Pontifical Mass, Grand Parade, Opening Program, and the Inter-Town DLBC Competition. Let us come together in faith, culture, and celebration in honor of Señor Sto. Niño. Viva Señor Sto. Niño! 🙏✨</p>
                <span class="news-date">Jan 15, 2026</span>
            </div>
        </a>
    </div>
</section>

<!-- EMERGENCY HOTLINE -->
<section class="emergency-section scroll-animate">
    <a href="https://www.facebook.com/profile.php?id=100064524829094" target="_blank" class="emergency-card">
        <img src="assets/emergency/emergency.png" alt="Emergency Hotline" class="emergency-image">
        <div class="emergency-content">
            <h2>Emergency Hotline</h2>
            <p>If you are in need of urgent assistance, please contact our emergency services immediately.</p>
            <p><strong>Hotline Numbers:</strong></p>
            <ul>
                <li>🚑 MDRRMO: 09163952414 (Globe/TM)</li>
                <li>🚒 BFP: 09125711407 (Smart/TNT) | 09261954414 (Globe/TM)</li>
                <li>🚔 PNP: 09985986485 (Smart/TNT)</li>
            </ul>
        </div>
    </a>
</section>

<?php include 'includes/footer.php'; ?>

<!-- SCROLL SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.scroll-animate');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    }, { threshold: 0.15 });

    elements.forEach(el => observer.observe(el));
});
</script>