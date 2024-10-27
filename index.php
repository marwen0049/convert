<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Video Converter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header Include -->
    <?php include 'header.html'; ?>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Convert and Download Social Media Videos Instantly</h1>
        <p>Fast, secure, and easy way to download videos from YouTube, Facebook, and Instagram!</p>
        <a href="#facebook" class="cta-button">Get Started</a>
    </div>

    <!-- Facebook Video Downloader Section -->
    <div id="facebook" class="container">
        <div class="social-icon"><i class="fab fa-facebook"></i></div>
        <h2>Facebook Video Downloader</h2>
        <p>Download videos from Facebook effortlessly!</p>
        <div class="input-box">
            <input type="text" class="url-input" placeholder="Enter Facebook video URL here">
            <button class="download-button">Download</button>
        </div>
    </div>

    <!-- YouTube Video Downloader Section -->
    <div id="youtube" class="container">
        <div class="social-icon"><i class="fab fa-youtube"></i></div>
        <h2>YouTube Video Downloader</h2>
        <p>Convert and download videos from YouTube in a snap!</p>
        <div class="input-box">
            <input type="text" class="url-input" placeholder="Enter YouTube video URL here">
            <button class="download-button">Download</button>
        </div>
    </div>

    <!-- Instagram Video Downloader Section -->
    <div id="instagram" class="container">
        <div class="social-icon"><i class="fab fa-instagram"></i></div>
        <h2>Instagram Video Downloader</h2>
        <p>Seamlessly grab videos from Instagram!</p>
        <div class="input-box">
            <input type="text" class="url-input" placeholder="Enter Instagram video URL here">
            <button class="download-button">Download</button>
        </div>
    </div>

    <!-- Footer Include -->
    <?php include 'footer.html'; ?>
</body>
</html>