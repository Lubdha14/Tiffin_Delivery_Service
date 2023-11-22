<!DOCTYPE html>
<html>
<head>
    <title>FlavorWheels</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            font-size: 36px;
            margin-top: 20px;
        }

        p {
            color: #666;
            font-size: 18px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 10px;
            font-size: 20px;
        }

        /* Style for the image carousel */
        .image-carousel {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            margin: 30px 0;
        }

        .slide {
            display: none;
        }

        /* Additional styles for the carousel images */
        .slide img {
            width: 900px;
            height: 900px;
            border-radius: 9px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 7.8);
        }

        /* Styles for information and footer */
        .information {
            margin: 20px;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Welcome to FlavorWheels</h1>
    <p>Discover the most delicious flavors with FlavorWheels.</p>
    <p>Join our community to explore and share your culinary adventures.</p>
    <button onclick="window.location.href='menu.php'">Menu</button><br>
    <button onclick="window.location.href='register.php'">Register</button>
    <button onclick="window.location.href='login.php'">Login</button>

    <!-- Image carousel -->
    <div class="image-carousel">
        <img class="slide" src="images/img1.jpeg" alt="Image 1" />
        <img class="slide" src="images/img2.jpeg" alt="Image 2" />
        <img class="slide" src="images/img3.jpg" alt="Image 3" />
        <img class="slide" src="images/img4.jpg" alt="Image 4" />
        <img class="slide" src="images/img1.jpeg" alt="Image 5" />
        <img class="slide" src="images/img3.jpg" alt="Image 6" />
        <img class="slide" src="images/img9.jpeg" alt="Image 7" />
    </div>


    <!-- Information -->
    <div class="information">
        <h2>About Us</h2>
        <p>FlavorWheels is your one-stop destination for exploring diverse culinary experiences. Discover the most delicious flavors from around the world and share your culinary adventures with our community.</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 FlavorWheels</p>
    </div>


    <script>
        // JavaScript for rotating images
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(slideIndex) {
            slides.forEach((slide, index) => {
                slide.style.display = index === slideIndex ? 'block' : 'none';
            });
        }

        function rotateImages() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Automatically rotate images every 3 seconds (3000 milliseconds)
        setInterval(rotateImages, 2000);
    </script>
</body>
</html>
