<?php

$conn = mysqli_connect('localhost', 'root', '', 'cosmetic_physician') or die('connection failed');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact`(name, email, number, date) 
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'failed to make appointment';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Prem The Cosmetic Physician</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include "components/header.php" ?>

    <section class="home" id="home">

        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>
                        <span class="word">best</span>
                        <span class="word">and</span>
                        <span class="word">latest</span>
                        <span class="word">cosmetic</span>
                        <span class="word">treatments</span>
                    </h3>
                    <p class="animate-text">We offer the best and the latest aesthetic treatments for your hair, face, skin & body related issues</p>
                    <a href="#contact" class="link-btn animate-btn">make appointment</a>
                </div>
            </div>
        </div>

    </section>

    <section class="ad-slider" id="ad-slider">
        <div class="slides">
            <div class="slide">
                <img src="img/ad-one.jpg" alt="Ad one" />
                <img src="img/ad-two.jpg" alt="Ad two" />
                <img src="img/ad-three.jpg" alt="Ad three" />
            </div>
            <div class="slide">
                <img src="img/ad-4.jpg" alt="Ad one" />
                <img src="img/ad-5.jpg" alt="Ad two" />
                <img src="img/ad-6.jpg" alt="Ad three" />
            </div>
            <div class="slide">
                <img src="img/ad-7.jpg" alt="Ad one" />
                <img src="img/ad-8.jpg" alt="Ad two" />
                <img src="img/ad-9.jpg" alt="Ad three" />
            </div>
        </div>
    </section>

    <section class="about" id="about">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="img/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>


                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>
                        <span class="word-about">Providing</span>
                        <span class="word-about">Exceptional</span>
                        <span class="word-about">Cosmetic</span>
                        <span class="word-about">Care</span>
                    </h3>
                    <p class="animate-text-about">We specialize in delivering top-quality cosmetic treatments and procedures to help you achieve your desired aesthetic goals. With our highly skilled proffessional Dr. Prem, we are dedicated to providing personalized care and outstanding results. Our mission is to enhance your natural beauty and boost your self-confidence through a wide range of cosmetic services.</p>
                    <a href="#contact" class="link-btn animate-btn-about">make appointment</a>
                </div>

            </div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading-contact">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <span>name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn animate-btn-contact">
        </form>

    </section>

    <section class="services" id="services">

        <h1 class="heading-services">more services</h1>

        <div class="box-container container">

            <div class="box-ser">
                <img src="img/filler.png" alt="">
                <h3>Smile Line Fillers</h3>
                <p>Smooth and rejuvenate smile lines, reducing wrinkles for a more youthful look.</p>
            </div>

            <div class="box-ser">
                <img src="img/laser.png" alt="">
                <h3>Laser Hair Reduction</h3>
                <p>Attain long-lasting reduction in unwanted hair growth for smoother skin.</p>
            </div>

            <div class="box-ser">
                <img src="img/glow.png" alt="">
                <h3>Skin Glowing Treatments</h3>
                <p>Enhance the skin's radiance and promote a healthy, luminous complexion.</p>
            </div>

            <div class="box-ser">
                <img src="img/scar.png" alt="">
                <h3>Keloid Scar Reduction</h3>
                <p>Minimize the appearance of raised and thickened scars for improved skin texture.</p>
            </div>

            <div class="box-ser">
                <img src="img/stretch-marks.png" alt="">
                <h3>Stretch Mark Reduction</h3>
                <p>Reduce the visibility of stretch marks caused by rapid weight gain or growth.</p>
            </div>

            <div class="box-ser">
                <img src="img/wart.png" alt="">
                <h3>Warts & Skin Tags Removal</h3>
                <p>Remove unwanted skin growths, such as warts and skin tags, for a smoother and blemish-free appearance.</p>
            </div>

        </div>

    </section>

    <section class="process-ser" id="process-ser">

        <h1 class="heading-process">our services</h1>

        <div class="box-container container">

            <a href="services.php#fillers">
                <div class="box">
                    <img src="img/process-5.png" alt="">
                    <h3>Fillers & Botox</h3>
                    <p>Treatments that reduce wrinkles and enhance facial features. Botox relaxes muscles to reduce wrinkles, while fillers restore volume and smooth out lines.</p>
                    <h4>more<i class="fas fa-long-arrow-alt-right"></i></h4>
                </div>
            </a>

            <a href="services.php#acne">
                <div class="box">
                    <img src="img/process-6.png" alt="">
                    <h3>Acne & Pigmentation</h3>
                    <p>Treatments for skin conditions. Acne treatments address breakouts and scars, while pigmentation treatments reduce dark spots and promote even skin tone.</p>
                    <h4>more<i class="fas fa-long-arrow-alt-right"></i></h4>
                </div>
            </a>

            <a href="services.php#hair">
                <div class="box">
                    <img src="img/process-4.png" alt="">
                    <h3>Hair Growth Treatments</h3>
                    <p>We provide various types of hair treatments for hair growth, reduction and other types of treatment like dandruff clearing and alopecia areata treatment.</p>
                    <h4>more<i class="fas fa-long-arrow-alt-right"></i></h4>
                </div>
            </a>

        </div>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="heading-rev"> satisfied clients </h1>

        <div class="box-container container">

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dicta odit nulla molestias rem animi maxime cupiditate optio, fugit ea.</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dicta odit nulla molestias rem animi maxime cupiditate optio, fugit ea.</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dicta odit nulla molestias rem animi maxime cupiditate optio, fugit ea.</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied client</span>
            </div>


        </div>

    </section>

    <?php include "components/footer.php" ?>

    <script src="js/script.js"></script>

</body>

</html>