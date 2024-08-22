<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message']){

        $message =$_SESSION['message'];
        echo "<script type='text/javascript'>
        alert('$message');
        
        </script>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college website</title>
    <!--google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!--header section starts-->
<header>
    <div id="menu" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-user-graduate"></i>MyCollegeErp</a>
    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#course">Courses</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>
    <div id="login" class="fas fa-user-circle"></div>

</header>

<!--login form starts-->
<div class="login-form">
    <form action="config.php" method="POST">
        <h3>Login</h3>
        <h4>
            <?php

            error_reporting(0);
            session_start();
            session_destroy();

        echo $_SESSION['loginMessage'];

            ?>
        </h4>
        <input type="email" placeholder="username" class="box" name="email">
        <input type="password" placeholder="password" class="box" name="password">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">register now</a></p>
        <input type="submit" class="btn" value="login">
        <i class="fas fa-times"></i>
    </form>
</div>

<!--home section starts-->
<section class="home" id="home">
    <h1>world class education institute!!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quia similique pariatur omnis animi saepe quas blanditiis fuga mollitia? Unde exercitationem atque rerum, sequi saepe iste nam quas corrupti? Velit!</p>
    <a href="#"><button class="btn">get started</button></a>

</section>

<!--about section starts-->
<section class="about" id="about">
    <div class="image">
        <img src="images/Studying-cuate.svg" alt="">
    </div>

    <div class="content">
        <h3>Why Choose Us?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae illum ratione numquam est dicta dolorem, deserunt atque omnis harum eaque, architecto totam nisi dolorum inventore eveniet sed, obcaecati a impedit!</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section>

<!--course section starts-->

<section class="course" id="course">
    <h1 class="heading">our popular courses</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/10423564.jpg" alt="">
            <h3 class="price">Rs.5,00,000</h3>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="title">learn the fundamentals of computer science</a>
                <p>In this course you will learn the concepts such as DBMS, MICROPROCESSOR, DAA, C, PYTHON etc</p>
                <div class="info">
                    <h3><i class="far fa-clock"></i> 6 hours</h3>
                    <h3><i class="far fa-calendar-alt"></i> 4 years</h3>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/4884421.jpg" alt="">
            <h3 class="price">Rs.3,00,000</h3>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <a href="#" class="title">learn the fundamentals of computer applications</a>
                <p>In this course you will learn the concepts such as DBMS, C, PYTHON etc</p>
                <div class="info">
                    <h3><i class="far fa-clock"></i> 4 hours</h3>
                    <h3><i class="far fa-calendar-alt"></i> 3 years</h3>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/30663.jpg" alt="">
            <h3 class="price">Rs.6,00,000</h3>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="title">learn the fundamentals of business</a>
                <p>In this course you will learn the concepts such as business studies, accounting etc</p>
                <div class="info">
                    <h3><i class="far fa-clock"></i> 6 hours</h3>
                    <h3><i class="far fa-calendar-alt"></i> 2 years</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--students life starts-->
<section class="student" id="student">
    <h1 class="heading">Student's life</h1>
    <p>Campus facilities and amenities,
        Clubs and organizations,
        Student services (counseling, health services, career services),
        Housing options.</p>
        <a href="#"><button class="btn">learn more</button></a>
</section>

<!--contact section starts-->
<section class="contact">
    <h1 class="heading">contact us</h1>
    <div class="row">
        <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="0a254a56-b66a-4bbf-bb5f-0144b55bd94f">
            <input type="text" placeholder="full name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <input type="number" placeholder="your number" class="box">
            <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
            <input type="submit" class="btn" value="send now">
        </form>

        <div class="image">
            <img src="images/lady.png" alt="">
        </div>
    </div>
</section>

<!--footer section starts-->
<div class="footer">
    <div class="box-container">
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Agra</a>
            <a href="#">Noida</a>
            <a href="#">lucknow</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about us</a>
            <a href="#">courses</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p><i class="fas fa-map-marker-alt"></i>Agra, India 282004</p>
            <p><i class="fas fa-envelope"></i>example@gmail.com</p>
            <p><i class="fas fa-phone"></i>+123-456-7890</p>
        </div> 
    </div>

    <h1 class="credit">created by <a href="#"> Admin </a>All rights reserved.</h1>
</div>
















    <!--jquery cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--custom js file link-->
    <script src="script.js"></script>
</body>
</html>