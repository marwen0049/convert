<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Video Converter</title>
1.separrer le fichier de style css et le fichier header et footer 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            margin: 0;
            padding: 0;
        }

        /* Header and Navigation */
        header {
            background-color: rgba(0, 150, 136, 0.85);
            backdrop-filter: blur(10px);
            color: #fff;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background-color: #388E3C;
        }

        /* Hero Section */
        .hero {
            padding: 120px 20px 40px;
            text-align: center;
        }

        .hero h1 {
            font-size: 36px;
            color: #333;
            margin: 0;
        }

        .hero p {
            font-size: 20px;
            color: #555;
            margin: 20px 0;
        }

        .cta-button {
            font-size: 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            padding: 12px 30px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background-color: #388E3C;
        }

        /* Social Media Section Containers */
        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            width: 90%;
            max-width: 400px;
            margin: 40px auto;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: scale(1.05);
        }

        h2 {
            font-size: 26px;
            color: #333;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .social-icon {
            font-size: 40px;
            color: #4CAF50;
            margin-bottom: 15px;
        }

        /* Input Box and Download Button */
        .input-box {
            display: flex;
            flex-direction: column;
            margin: 20px 0;
        }

        .url-input {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .download-button {
            padding: 12px;
            font-size: 18px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .download-button:hover {
            background-color: #388E3C;
        }

        /* Footer Section */
        footer {
            background-color: rgba(0, 150, 136, 0.85);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

        footer p {
            margin: 5px 0;
            font-size: 16px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #e0f7fa;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 28px;
            }

            nav a {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="index.html"><i class="fas fa-home"></i> Home</a>
            <a href="youtube.html"><i class="fab fa-youtube"></i> YouTube</a>
            <a href="facebook.html"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="instagram.html"><i class="fab fa-instagram"></i> Instagram</a>
        </nav>
    </header>

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

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Social Media Video Converter. All rights reserved.</p>
        <p>
            <a href="privacy.html">Privacy Policy</a> |
            <a href="terms.html">Terms of Service</a> |
            <a href="contact.html">Contact Us</a>
        </p>
    </footer>

</body>
</html>
