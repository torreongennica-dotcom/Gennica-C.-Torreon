
<?php

// ==========================================
// PERSONAL INFORMATION
// ==========================================

$name = "Gennica C. Torreon";
$course = "BSIT 2";
$section = "Section 2";
$school = "Mater Dei College";

$email = "gennica@example.com";
$location = "Bohol, Philippines";

$about = "Hi! I'm Gennica. I am a college student who enjoys learning new things, expressing my creativity, and discovering new experiences. I believe that every day is an opportunity to improve myself, develop my skills, and become closer to achieving my dreams.";

$quote = "Bloom at your own pace.";

// ==========================================
// SKILLS
// ==========================================

$skills = [
    "Creativity" => 85,
    "Designing" => 80,
    "Teamwork" => 90,
    "Problem Solving" => 75
];

// ==========================================
// HOBBIES AND INTERESTS
// ==========================================

$hobbies = [
    "Listening to Music",
    "Watching Movies",
    "Spending Time with Family",
    "Trying New Things"
];

// ==========================================
// GOALS
// ==========================================

$goals = [
    "Finish my studies",
    "Improve my skills",
    "Become more confident",
    "Achieve my dreams"
];

// ==========================================
// SAFE OUTPUT FUNCTION
// ==========================================

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($name); ?> | Personal Profile</title>

    <!-- GOOGLE FONTS -->

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">

    <style>

    /* =====================================
       GENERAL STYLING
    ===================================== */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    :root {
        --pink: #e58caf;
        --dark-pink: #c96591;
        --light-pink: #fff0f5;
        --soft-pink: #fce1eb;
        --cream: #fffaf8;
        --text: #725363;
        --white: #ffffff;
    }

    body {
        font-family: 'DM Sans', sans-serif;
        background: var(--cream);
        color: var(--text);
        line-height: 1.8;
        font-size: 16px;
    }

    /* =====================================
       HEADER AND NAVIGATION
    ===================================== */

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 22px 8%;
        background: white;
        border-bottom: 1px solid #f8dce7;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .logo {
        font-family: 'Playfair Display', serif;
        font-size: 30px;
        color: var(--dark-pink);
        font-weight: bold;
    }

    .logo span {
        color: #eeb4ca;
    }

    nav {
        display: flex;
        gap: 28px;
        flex-wrap: wrap;
    }

    nav a {
        text-decoration: none;
        color: #876a7b;
        font-size: 15px;
        font-weight: 600;
        transition: 0.3s;
    }

    nav a:hover {
        color: var(--pink);
    }

    /* =====================================
       MAIN CONTAINER
    ===================================== */

    .container {
        width: 88%;
        max-width: 1350px;
        margin: auto;
    }

    /* =====================================
       HERO / PROFILE SECTION
    ===================================== */

    .hero {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        align-items: center;
        gap: 75px;
        padding: 75px 0;
        min-height: 650px;
    }

    /* PROFILE PHOTO ON THE LEFT */

    .profile-area {
        position: relative;
        padding: 20px;
    }

    .profile-frame {
        background: linear-gradient(145deg, #f5c4d7, #fbe8ef);
        padding: 15px;
        border-radius: 48% 48% 20px 20px;
        box-shadow: 0 15px 40px #d77fa630;
    }

    .profile-photo {
        display: block;
        width: 100%;
        height: 460px;
        object-fit: cover;
        border-radius: 48% 48% 15px 15px;
        border: 5px solid white;
    }

    .photo-caption {
        position: absolute;
        bottom: 5px;
        right: -10px;
        background: white;
        padding: 15px 25px;
        border-radius: 30px;
        color: var(--dark-pink);
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-size: 16px;
        box-shadow: 0 5px 20px #d77fa620;
    }

    .flower {
        position: absolute;
        color: #e7a0bc;
        font-size: 50px;
    }

    .flower.one {
        top: 0;
        right: -5px;
    }

    .flower.two {
        bottom: 35px;
        left: -5px;
        font-size: 38px;
    }

    /* INTRODUCTION ON THE RIGHT */

    .hero-content {
        padding: 15px 0;
    }

    .welcome {
        display: inline-block;
        padding: 10px 22px;
        background: var(--light-pink);
        border-radius: 30px;
        color: var(--dark-pink);
        font-size: 14px;
        font-weight: bold;
        letter-spacing: 2px;
    }

    .hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: clamp(45px, 4.5vw, 68px);
        line-height: 1.2;
        color: #79566a;
        margin: 25px 0;
    }

    .hero h1 span {
        color: var(--pink);
        font-style: italic;
    }

    .hero-content p {
        font-size: 18px;
        color: #897486;
        max-width: 600px;
        line-height: 1.9;
    }

    .hero-quote {
        margin-top: 20px;
        color: var(--dark-pink) !important;
        font-family: 'Playfair Display', serif;
        font-size: 23px !important;
        font-style: italic;
    }

    .hero-btn {
        display: inline-block;
        margin-top: 30px;
        padding: 15px 32px;
        background: var(--pink);
        color: white;
        text-decoration: none;
        border-radius: 30px;
        font-size: 16px;
        font-weight: bold;
        transition: 0.3s;
    }

    .hero-btn:hover {
        background: var(--dark-pink);
        transform: translateY(-3px);
    }

    /* =====================================
       SECTION HEADINGS
    ===================================== */

    .section-heading {
        margin-bottom: 30px;
    }

    .section-heading small {
        color: var(--pink);
        font-size: 13px;
        font-weight: bold;
        letter-spacing: 3px;
    }

    .section-heading h2 {
        font-family: 'Playfair Display', serif;
        font-size: 38px;
        color: #79566a;
        margin-top: 8px;
    }

    /* =====================================
       ABOUT ME
    ===================================== */

    .about-section {
        padding: 45px;
        background: #fff0f5;
        border-radius: 22px;
        border: 1px solid #f7dce7;
        margin-bottom: 55px;
    }

    .about-section p {
        font-size: 17px;
        color: #806b7b;
        line-height: 1.9;
    }

    .about-decoration {
        color: #e6a1bb;
        font-size: 40px;
        text-align: right;
    }

    /* =====================================
       EDUCATIONAL BACKGROUND
    ===================================== */

    .education-section {
        padding: 30px 0 55px;
    }

    .education-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .education-card {
        background: white;
        padding: 32px;
        border-radius: 18px;
        border: 1px solid #f4dce6;
        box-shadow: 0 5px 18px #d77fa610;
        transition: 0.3s;
    }

    .education-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px #d77fa625;
    }

    .education-icon {
        font-size: 35px;
        margin-bottom: 15px;
    }

    .education-card small {
        color: #b9859d;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .education-card h3 {
        font-family: 'Playfair Display', serif;
        color: #79566a;
        font-size: 21px;
        margin-top: 10px;
    }

    /* =====================================
       SKILLS
    ===================================== */

    .skills-section {
        padding: 50px 0;
    }

    .skills-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .skill {
        margin-bottom: 28px;
    }

    .skill-info {
        display: flex;
        justify-content: space-between;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .skill-info span:last-child {
        color: var(--dark-pink);
    }

    .progress {
        height: 13px;
        background: #f4dce6;
        border-radius: 20px;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #edb0c8, #cf7099);
        border-radius: 20px;
    }

    .skills-note {
        background: #fff0f5;
        padding: 40px;
        border-radius: 22px;
    }

    .skills-note h3 {
        font-family: 'Playfair Display', serif;
        color: #9e6480;
        font-size: 30px;
        margin-bottom: 15px;
    }

    .skills-note p {
        font-size: 16px;
        color: #856f7e;
        line-height: 1.9;
    }

    /* =====================================
       HOBBIES AND INTERESTS
    ===================================== */

    .hobbies-section {
        margin-top: 35px;
        background: white;
        padding: 45px;
        border-radius: 22px;
        border: 1px solid #f4dce6;
    }

    .hobby-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .hobby-item {
        background: #fff4f7;
        padding: 23px;
        border-radius: 14px;
        font-size: 16px;
        color: #89677a;
        transition: 0.3s;
    }

    .hobby-item:hover {
        background: #fce1eb;
        transform: translateY(-3px);
    }

    /* =====================================
       GOALS
    ===================================== */

    .goals-section {
        padding: 65px 0;
    }

    .goal-list {
        list-style: none;
    }

    .goal-list li {
        padding: 20px 25px;
        margin-bottom: 14px;
        background: #fff0f5;
        border-radius: 12px;
        font-size: 16px;
        color: #806b7b;
        transition: 0.3s;
    }

    .goal-list li:hover {
        background: #fce1eb;
        transform: translateX(5px);
    }

    .goal-list li::before {
        content: "♡";
        color: var(--dark-pink);
        font-size: 22px;
        margin-right: 15px;
    }

    /* =====================================
       CONTACT INFORMATION
    ===================================== */

    .contact-section {
        background: white;
        padding: 45px;
        border-radius: 22px;
        border: 1px solid #f4dce6;
        margin-bottom: 55px;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .contact-item {
        background: #fff4f7;
        padding: 22px;
        border-radius: 14px;
        transition: 0.3s;
    }

    .contact-item:hover {
        background: #fce1eb;
        transform: translateY(-4px);
    }

    .contact-item small {
        color: #b9859d;
        font-size: 13px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .contact-item p,
    .contact-item a {
        display: block;
        margin-top: 8px;
        color: #79566a;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        overflow-wrap: anywhere;
    }

    .contact-item a:hover {
        color: var(--dark-pink);
    }

    /* =====================================
       INSPIRATIONAL QUOTE
    ===================================== */

    .quote-section {
        background: linear-gradient(120deg, #f7dce8, #fcecf2, #f5e8f4);
        padding: 65px 25px;
        border-radius: 22px;
        text-align: center;
        margin-bottom: 65px;
    }

    .quote-section h2 {
        font-family: 'Playfair Display', serif;
        font-size: 32px;
        color: #a45f80;
        font-style: italic;
        font-weight: 500;
    }

    .quote-section p {
        font-size: 15px;
        color: #a47c91;
        margin-top: 15px;
    }

    /* =====================================
       FOOTER
    ===================================== */

    footer {
        background: #fff0f5;
        border-top: 1px solid #f5dce7;
        padding: 35px;
        text-align: center;
        color: #98778a;
        font-size: 14px;
    }

    footer span {
        color: #d77fa6;
    }

    /* =====================================
       RESPONSIVE DESIGN
    ===================================== */

    @media (max-width: 900px) {

        header {
            flex-direction: column;
            gap: 15px;
        }

        nav {
            justify-content: center;
            gap: 17px;
        }

        .hero {
            gap: 35px;
            min-height: auto;
            padding: 50px 0;
        }

        .profile-photo {
            height: 350px;
        }

        .hero h1 {
            font-size: 43px;
        }

        .hero-content p {
            font-size: 16px;
        }

        .education-grid {
            grid-template-columns: 1fr;
        }

    }

    @media (max-width: 650px) {

        header {
            padding: 18px 10px;
        }

        nav {
            gap: 12px;
        }

        nav a {
            font-size: 12px;
        }

        .container {
            width: 90%;
        }

        .hero {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 35px;
        }

        .profile-area {
            width: 80%;
            margin: auto;
        }

        .profile-photo {
            height: 320px;
        }

        .hero h1 {
            font-size: 38px;
        }

        .hero-content p {
            margin: auto;
            font-size: 15px;
        }

        .hero-quote {
            font-size: 20px !important;
        }

        .section-heading h2 {
            font-size: 30px;
        }

        .about-section,
        .hobbies-section,
        .contact-section {
            padding: 25px;
        }

        .skills-container {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .hobby-grid,
        .contact-grid {
            grid-template-columns: 1fr;
        }

        .quote-section h2 {
            font-size: 24px;
        }

    }

    </style>

</head>

<body>

    <!-- =====================================
         PAGE HEADER
    ===================================== -->

    <header>

        <div class="logo">
            Gennica<span>.</span> ♡
        </div>

        <nav>
            <a href="#home">Home</a>
            <a href="#about">About Me</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#hobbies">Hobbies</a>
            <a href="#contact">Contact</a>
        </nav>

    </header>

    <main class="container">

        <!-- =====================================
             PROFILE SECTION
        ===================================== -->

        <section class="hero" id="home">

            <!-- PROFILE PHOTO -->

            <div class="profile-area">

                <div class="flower one">✿</div>

                <div class="profile-frame">

                    <img
                        src="profile-gf.jpg"
                        alt="Profile picture of <?php echo e($name); ?>"
                        class="profile-photo"
                    >

                </div>

                <div class="photo-caption">
                    lovely little moments ♡
                </div>

                <div class="flower two">✿</div>

            </div>

            <!-- PERSONAL INTRODUCTION -->

            <div class="hero-content">

                <div class="welcome">
                    ♡ Welcome to my world ♡
                </div>

                <h1>
                    Hello, <br>
                    I'm <span><?php echo e($name); ?></span>
                </h1>

                <p>
                    <?php echo e($about); ?>
                </p>

                <p class="hero-quote">
                    "<?php echo e($quote); ?>"
                </p>

                <a href="#about" class="hero-btn">
                    Get to Know Me ♡
                </a>

            </div>

        </section>

        <!-- =====================================
             ABOUT ME SECTION
        ===================================== -->

        <section class="about-section" id="about">

            <div class="section-heading">

                <small>A LITTLE INTRODUCTION</small>

                <h2>About Me 🌷</h2>

            </div>

            <p>
                <?php echo e($about); ?>
            </p>

            <div class="about-decoration">
                ♡ ✿ ♡
            </div>

        </section>

        <!-- =====================================
             EDUCATIONAL BACKGROUND
        ===================================== -->

        <section class="education-section" id="education">

            <div class="section-heading">

                <small>MY ACADEMIC JOURNEY</small>

                <h2>Educational Background 🎓</h2>

            </div>

            <div class="education-grid">

                <div class="education-card">

                    <div class="education-icon">📚</div>

                    <small>Course and Year</small>

                    <h3><?php echo e($course); ?></h3>

                </div>

                <div class="education-card">

                    <div class="education-icon">🌸</div>

                    <small>Section</small>

                    <h3><?php echo e($section); ?></h3>

                </div>

                <div class="education-card">

                    <div class="education-icon">🎓</div>

                    <small>School</small>

                    <h3><?php echo e($school); ?></h3>

                </div>

            </div>

        </section>

        <!-- =====================================
             SKILLS SECTION
        ===================================== -->

        <section class="skills-section" id="skills">

            <div class="section-heading">

                <small>THINGS I AM GOOD AT</small>

                <h2>My Skills 🦋</h2>

            </div>

            <div class="skills-container">

                <div>

                    <?php foreach ($skills as $skill => $level): ?>

                        <div class="skill">

                            <div class="skill-info">

                                <span><?php echo e($skill); ?></span>

                                <span><?php echo (int)$level; ?>%</span>

                            </div>

                            <div class="progress">

                                <div
                                    class="progress-bar"
                                    style="width: <?php echo (int)$level; ?>%">
                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="skills-note">

                    <h3>Growing Every Day ♡</h3>

                    <p>
                        I believe that learning never stops.
                        Every new experience teaches me something
                        valuable and helps me become a better
                        version of myself.
                    </p>

                </div>

            </div>

        </section>

        <!-- =====================================
             HOBBIES AND INTERESTS
        ===================================== -->

        <section class="hobbies-section" id="hobbies">

            <div class="section-heading">

                <small>MY FAVORITE THINGS</small>

                <h2>Hobbies and Interests 🎧</h2>

            </div>

            <div class="hobby-grid">

                <?php foreach ($hobbies as $hobby): ?>

                    <div class="hobby-item">
                        ♡ <?php echo e($hobby); ?>
                    </div>

                <?php endforeach; ?>

            </div>

        </section>

        <!-- =====================================
             PERSONAL GOALS
        ===================================== -->

        <section class="goals-section" id="goals">

            <div class="section-heading">

                <small>MY DREAMS AND ASPIRATIONS</small>

                <h2>Future Goals 🌷</h2>

            </div>

            <ul class="goal-list">

                <?php foreach ($goals as $goal): ?>

                    <li>
                        <?php echo e($goal); ?>
                    </li>

                <?php endforeach; ?>

            </ul>

        </section>

        <!-- =====================================
             CONTACT INFORMATION
        ===================================== -->

        <section class="contact-section" id="contact">

            <div class="section-heading">

                <small>LET'S CONNECT</small>

                <h2>Contact Information 💌</h2>

            </div>

            <div class="contact-grid">

                <div class="contact-item">

                    <small>✉ Email Address</small>

                    <a href="mailto:<?php echo e($email); ?>">
                        <?php echo e($email); ?>
                    </a>

                </div>

                <div class="contact-item">

                    <small>📍 Location</small>

                    <p>
                        <?php echo e($location); ?>
                    </p>

                </div>

                <div class="contact-item">

                    <small>🎓 School</small>

                    <p>
                        <?php echo e($school); ?>
                    </p>

                </div>

                <div class="contact-item">

                    <small>📖 Course</small>

                    <p>
                        <?php echo e($course); ?> -
                        <?php echo e($section); ?>
                    </p>

                </div>

            </div>

        </section>

        <!-- =====================================
             INSPIRATIONAL QUOTE
        ===================================== -->

        <section class="quote-section">

            <h2>
                "Believe in yourself and let your dreams bloom."
            </h2>

            <p>
                ♡ A little reminder to keep growing ♡
            </p>

        </section>

    </main>

    <!-- =====================================
         PAGE FOOTER
    ===================================== -->

    <footer>

        <p>
            Made with <span>♥</span> by
            <?php echo e($name); ?>
        </p>

        <p>
            &copy; <?php echo date("Y"); ?>
            | My Personal Profile Website
        </p>

    </footer>

</body>

</html>
