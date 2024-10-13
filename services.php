<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .process {
            background: url(img/home-bg-5.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .process .box {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <a href="index.php" class="logo">Dr.Prem<span>TheCosmeticPhysician.</span></a>

                <nav class="nav">
                    <a href="index.php">home</a>
                    <a href="services.php">services</a>
                    <a href="index.php#reviews">reviews</a>
                    <a href="index.php#about">about</a>
                    <a href="#footer">contact</a>
                </nav>

                <a href="index.php#contact" class="link-btn">make appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <section class="process" id="process">

        <h1 class="heading">our services</h1>

        <div class="box-container container">

            <a href="#fillers">
                <div class="box">
                    <img src="img/process-5.png" alt="">
                    <h3>Fillers & Botox</h3>
                    <p>Treatments that reduce wrinkles and enhance facial features. Botox relaxes muscles to reduce wrinkles, while fillers restore volume and smooth out lines.</p>
                    <h4>more<i class="fas fa-long-arrow-alt-right"></i></h4>
                </div>
            </a>

            <a href="#acne">
                <div class="box">
                    <img src="img/process-6.png" alt="">
                    <h3>Acne & Pigmentation</h3>
                    <p>Treatments for skin conditions. Acne treatments address breakouts and scars, while pigmentation treatments reduce dark spots and promote even skin tone.</p>
                    <h4>more<i class="fas fa-long-arrow-alt-right"></i></h4>
                </div>
            </a>

            <a href="#hair">
                <div class="box">
                    <img src="img/process-4.png" alt="">
                    <h3>Hair Growth Treatments</h3>
                    <p>We provide various types of hair treatments for hair growth, reduction and other types of treatment like dandruff clearing and alopecia areata treatment.</p>
                    <h4>more<i class="fas fa-long-arrow-alt-right"></i></h4>
                </div>
            </a>

        </div>

    </section>

    <section class="services" id="fillers">

        <h1 class="heading">Fillers & Botox</h1>

        <div class="box-container container">

            <div class="box">
                <h3>Botox for forehead wrinkles</h3>
            </div>

            <div class="box">
                <h3>gummy smile correction</h3>
            </div>

            <div class="box">
                <h3>dark circle eyes treatments</h3>
            </div>

            <div class="box">
                <h3>facial slimming</h3>
            </div>

            <div class="box">
                <h3>thread lifting for face</h3>
            </div>

            <div class="box">
                <h3>liquid face lifting</h3>
            </div>

            <div class="box">
                <h3>excessive underarms sweating</h3>
            </div>

            <div class="box">
                <h3>eye brows lifting</h3>
            </div>

            <div class="box">
                <h3>double chin reduction</h3>
            </div>

            <div class="box">
                <h3>hand rejuvenation treatment</h3>
            </div>

            <div class="box">
                <h3>smile line fillers</h3>
            </div>

            <div class="box">
                <h3>fillers for lips, eyes, cheek, chin, nose reshaping, jawline, etc.</h3>
            </div>

        </div>

    </section>

    <section class="services" id="acne">

        <h1 class="heading">Acne & Pigmentation</h1>

        <div class="box-container container">

            <div class="box">
                <h3>acne treatments</h3>
            </div>

            <div class="box">
                <h3>acne scar treatments</h3>
            </div>

            <div class="box">
                <h3>LED light therapy for acne</h3>
            </div>

            <div class="box">
                <h3>pigmentation correction</h3>
            </div>

            <div class="box">
                <h3>keloid scar reduction</h3>
            </div>

            <div class="box">
                <h3>stretch mark reduction</h3>
            </div>

            <div class="box">
                <h3>chemical peels</h3>
            </div>

            <div class="box">
                <h3>dark lips lightening</h3>
            </div>

            <div class="box">
                <h3>skin glowing treatments</h3>
            </div>

            <div class="box">
                <h3>skin polishing</h3>
            </div>

            <div class="box">
                <h3>skin lightening and brightening treatments</h3>
            </div>

            <div class="box">
                <h3>warts and skin tags treatments</h3>
            </div>

        </div>

    </section>

    <section class="services" id="hair">

        <h1 class="heading">Hair Growth Treatments</h1>

        <div class="box-container container">

            <div class="box">
                <h3>hair growth treatment</h3>
            </div>

            <div class="box">
                <h3>hair loss treatment</h3>
            </div>

            <div class="box">
                <h3>laser hair reduction</h3>
            </div>

            <div class="box">
                <h3>beard growth</h3>
            </div>

            <div class="box">
                <h3>alopecia areata treatment</h3>
            </div>

            <div class="box">
                <h3>dandruff clearing</h3>
            </div>

        </div>

    </section>

    <?php include "components/footer.php" ?>

    <script src="js/script.js"></script>

</body>

</html>