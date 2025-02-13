

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemetery Mapping</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">     
    
</head>
<body> 

<!-- HEADER / NAVBAR -->
<header>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <nav class="navbar section-content">
        <a href="#" class="nav-logo">
            <h2 class="logo-text">💐Ethernal</h2>
        </a>
        <ul class="nav-menu">    
            <button id="menu-close-button" class="fas fa-times"></button>

            <li class="nav-item">
                <a href="#home" class="nav-link">Home</a>
            </li>
            
            <li class="nav-item">
                <a href="map-page.php" class="nav-link">Map</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
            </li>
        </ul>
        <button id="menu-open-button" class="fas fa-bars"></button>
    </nav>
</header>

<main>
    <!-- HERO SECTION -->
    <section id="home" class="hero-section">
        <div class="section-content">
            <div class="hero-details">
                <h1 class="title">Discover, Explore, Remember</h1>
                <p class="description">Find the final resting places of your loved ones and explore their history.</p>
            
                <div class="buttons">
                <a href="map-page.php" class="button exploring">Start Exploring</a>
            </div>
            </div>
        </div>
    </section>


    <!-- ABOUT SECTION -->
    <section id="about" class="about-section">
        <div class="section-content">
            <div class="about-image-wrapper">
                <img src="about.jpg" alt="About" class="about-image">                  
            </div>
            <div class="about-details">
                <h2 class="section-title">About Us</h2>
                <p class="text">Welcome to our Cemetery Mapping website, 
                    dedicated to providing an organized and accessible way 
                    to navigate Ethernal Cemetery in Davao City. 
                    Our platform helps visitors locate gravesites 
                    with ease, preserving the memory of loved ones
                    while ensuring a seamless experience for families and 
                    researchers. With a user-friendly interface and 
                    accurate mapping, we aim to honor the past 
                    while embracing technology to assist the present.
                </p>
                <div class="social-link-list">
                    <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </section>

    
   
    <!-- CONTACT SECTION -->
<section id="contact" class="contact-section">
    <h2 class="section-title">Contact Us</h2>
    <div class="section-content">
        <ul class="contact-info-list">
            <li class="contact-info">
                <i class="fa-solid fa-location-crosshairs"></i>
                <p>Toril Memorial Park Inc., 2FRV+HX7, Purok 1, Lubogan, Toril, Davao City, 8000 Davao del Sur</p>
            </li>
            <li class="contact-info">
                <i class="fa-solid fa-phone"></i>
                <p>09123456789</p>
            </li>
            <li class="contact-info">
                <i class="fa-regular fa-clock"></i>
                <p>Monday - Sunday : 9:00 AM - 5:00 PM</p>
            </li>
        </ul>

        <!-- Modified form -->
        <form action="send-email.php" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Your name" class="form-input" required>
            <input type="email" name="email" placeholder="Your email" class="form-input" required>
            <textarea name="message" placeholder="Your message" class="form-input" required></textarea>
            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </div>
</section>


    <!-- FOOTER SECTION -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Ethernal Cemetery Mapping. All rights reserved.</p>
            <p>Developed by <a href="https://github.com/yourprofile" target="_blank">Nazlah and Hazel</a></p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </footer>
</main>

<script src="script.js"></script>

</body>
</html>