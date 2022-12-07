<!-- <?php 
require 'function.php';

$coffemenu = query("SELECT * FROM coffemenu");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
        <nav class="nav container">
            <img class="logo" src="img/coffee=”get”.png" alt="logo">
    
            <ul class="nav_links">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <!-- <li><a href="#contact" class="nav-link">Contact</a></li> -->
                <li><a href="menu.php" target="blank" class="nav-menu">Menu</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="homeContainer" id="home">
                <div class="home-text">
                    <h4>Hello</h4>
                    <h1>Welcome</h1>
                    <h3>We are here for coffee lovers, here you can add your entire favorite coffee menu. that way you can explore various kinds of coffee again in the world</h3>
                </div>
                <!-- <div class="home-item">
                    <img src="img/sample.png" alt="">
                </div> -->
        </section>
        <section class="aboutContainer" id="about">
            <h2>About</h2>
            <div class="aboutBox">
                <div class="aboutContent">
                    <h3>Coffee is a drink prepared from roasted coffee beans. Darkly colored, bitter, and slightly acidic, coffee has a stimulating effect on humans, primarily due to its caffeine content. It is the most popular hot drink in the world. Seeds of the Coffea plant's fruits are separated to produce unroasted green coffee beans. The beans are roasted and then ground into fine particles that are typically steeped in hot water before being filtered out, producing a cup of coffee. It is usually served hot, although chilled or iced coffee is common. Coffee can be prepared and presented in a variety of ways (e.g., espresso, French press, caffè latte, or already-brewed canned coffee). Sugar, sugar substitutes, milk, and cream are often used to mask the bitter taste or enhance the flavor.</h3>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
<footer class="footer-container" id="contact">
    <div class="social">
        <a href="#"><i class='bx bxl-linkedin-square'></i></a>
        <a href="#"><i class='bx bxl-github'></i></a>
        <a href="#"><i class='bx bxl-dribbble'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
    </div>
    <!-- Footer Links -->
    <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms Of Use</a>
        <a href="#">Disclaimer</a>
    </div>
    <!-- Copyright -->
    <p class="copyright">
        coffeemenucrud Salsa.r @ 2022
    </p>
</footer>

    
</body>
</html>