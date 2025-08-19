<?php
// Page Title - About myHealth Summary
$page_title = "About myHealth Summary";
?>

<?php include 'includes/header.php'; ?>

<main class="about-page">
    <div class="container">
        <div class="about-hero">
            <div class="hero-image-placeholder"></div>
            <div class="hero-content">
                <h1>About myHealth Summary</h1>
                <p class="lead">A proof-of-concept patient health summary based on the International Patient Summary (IPS) standard.</p>
            </div>
        </div>
        <!-- Patient Summary -->
        <section class="about-content">
            <div class="content-grid">
                <div class="feature-card">
                    <div class="feature-icon summary-icon"></div>
                    <h2>Patient Summary</h2>
                    <p>Displays key health information including medications, allergies, and active medical problems following the IPS data standard.</p>
                </div>

                <!-- Integrated Data -->
                <div class="feature-card">
                    <div class="feature-icon integration-icon"></div>
                    <h2>Integrated Data</h2>
                    <p>Connects with national clinical repositories to provide comprehensive immunization history and vaccination records.</p>
                </div>
                
                <!-- Privacy First -->
                <div class="feature-card">
                    <div class="feature-icon privacy-icon"></div>
                    <h2>Privacy First</h2>
                    <p>Built with healthcare privacy standards in mind. All data shown is dummy/test data for demonstration purposes only.</p>
                </div>
                
                <!-- Responsive Design -->
                <div class="feature-card">
                    <div class="feature-icon responsive-icon"></div>
                    <h2>Responsive Design</h2>
                    <p>Clean, modern interface that works seamlessly across desktop and mobile devices with card-based layout.</p>
                </div>
                
                <!-- Healthcare Interoperability Standards -->
                <div class="feature-card">
                    <div class="feature-icon responsive-icon"></div>
                    <h2>Healthcare Interoperability</h2>
                    <p>Designed as a proof-of-concept to demonstrate healthcare interoperability with HL7v2 & FHIR Resource concepts.</p>
                </div>
                
            </div>
            
            <!-- Technical Implementation (POC) -->
            <div class="tech-stack">
                <h2>Technical Implementation</h2>
                <ul>
                    <li><strong>Backend:</strong> PHP with lightweight JSON file storage (sample patient summary data for PoC)</li>
                    <li><strong>Frontend:</strong> HTML5, CSS3 with CSS Grid and Flexbox</li>
                    <li><strong>Data Standards:</strong> Based on International Patient Summary (IPS), HL7v2, FHIR API concepts for data exchange</li>
                    <li><strong>Integration:</strong> Mock National Clinical Data Repository connection</li>
                </ul>
            </div>
        </section>
    </div>
</main>

<?php include 'includes/footer.php'; ?>