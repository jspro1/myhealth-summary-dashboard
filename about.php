<?php
// Page Title - About myHealth Dashboard
$page_title = "About myHealth Dashboard";
?>

<?php include 'includes/header.php'; ?>

<main class="about-page">
    <div class="container">
        <div class="about-hero">
            <div class="hero-image-placeholder"></div>
            <div class="hero-content">
                <h1>About myHealth Dashboard</h1>
                <p class="lead">A proof-of-concept patient health summary based on International Patient Summary (IPS) standards.</p>
            </div>
        </div>

        <section class="about-content">
            <div class="content-grid">
                <div class="feature-card">
                    <div class="feature-icon summary-icon"></div>
                    <h2>Patient Summary</h2>
                    <p>Displays key health information including medications, allergies, and active medical problems following IPS data standards.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon integration-icon"></div>
                    <h2>Integrated Data</h2>
                    <p>Connects with national clinical repositories to provide comprehensive immunization history and vaccination records.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon privacy-icon"></div>
                    <h2>Privacy First</h2>
                    <p>Built with healthcare privacy standards in mind. All data shown is dummy/test data for demonstration purposes only.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon responsive-icon"></div>
                    <h2>Responsive Design</h2>
                    <p>Clean, modern interface that works seamlessly across desktop and mobile devices with card-based layouts.</p>
                </div>
            </div>

            <div class="tech-stack">
                <h2>Technical Implementation</h2>
                <ul>
                    <li><strong>Backend:</strong> PHP with JSON data storage</li>
                    <li><strong>Frontend:</strong> HTML5, CSS3 with CSS Grid and Flexbox</li>
                    <li><strong>Data Standards:</strong> International Patient Summary (IPS)</li>
                    <li><strong>Integration:</strong> Mock national clinical data repository connection</li>
                </ul>
            </div>
        </section>
    </div>
</main>

<?php include 'includes/footer.php'; ?>