<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=1.1">
    <link rel="icon" href="img/drprem-icon.png" type="image/png">
    <!-- <link rel="preload" href="img/code one-black-01.webp" as="image"> -->

    <style>
        .process {
            position: relative;
            background: url(img/service-bg-4.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .process::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .process * {
            position: relative;
            z-index: 2;
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

                <a href="index.php" class="logo"><img src="img/drprem-logo.png" alt="logo"></a>

                <nav class="nav">
                    <a href="index.php">home</a>
                    <a href="services.php">services</a>
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

    <section class="services-lst" id="fillers">

        <h1 class="heading-services">Fillers & Botox</h1>

        <div class="box-container container">

            <div class="box">
                <h3>Botox for forehead<br />wrinkles</h3>
                <div class="service-img">
                    <img src="img/botox_forehead.jpg" alt="service-img" />
                </div>
                <p>
                    Smooth out forehead lines and achieve a youthful, refreshed look with precision 
                    Botox treatments designed to relax wrinkles for a natural, vibrant appearance.
                </p>
            </div>

            <div class="box">
                <h3>gummy smile<br />correction</h3>
                <div class="service-img">
                    <img src="img/gummy_slime.jpg" alt="service-img" />
                </div>
                <p>
                Enhance your smile by reducing excess gum display, giving you a balanced, 
                confident smile that highlights your teeth beautifully.
                </p>
            </div>

            <div class="box">
                <h3>dark circle eyes <br />treatments</h3>
                <div class="service-img">
                    <img src="img/dark_circle_eye.jpeg" alt="service-img" />
                </div>
                <p>
                Revitalize tired eyes and reduce dark circles with targeted treatments to 
                brighten the under-eye area and rejuvenate your appearance.
                </p>
            </div>

            <div class="box">
                <h3>facial <br />slimming</h3>
                <div class="service-img">
                    <img src="img/facial_slimming.jpeg" alt="service-img" />
                </div>
                <p>
                Contour and enhance facial definition with non-surgical techniques that 
                create a refined, slender face shape.
                </p>
            </div>

            <div class="box">
                <h3>thread lifting for <br />face</h3>
                <div class="service-img">
                    <img src="img/thread_lifting.jpeg" alt="service-img" />
                </div>
                <p>
                Lift and tighten sagging skin with thread lifting, a minimally invasive treatment 
                that restores a youthful and firm appearance to your face.
                </p>
            </div>

            <div class="box">
                <h3>liquid face <br />lifting</h3>
                <div class="service-img">
                    <img src="img/liquid_face_lifting.jpeg" alt="service-img" />
                </div>
                <p>
                Achieve a subtle, full-face rejuvenation with liquid face lifting, designed to restore 
                volume and smoothness without surgery.
                </p>
            </div>

            <div class="box">
                <h3>excessive <br />underarms sweating</h3>
                <div class="service-img">
                    <img src="img/excessive_underarms_sweating.png" alt="service-img" />
                </div>
                <p>
                Feel comfortable and confident with long-lasting treatment options to reduce excessive 
                sweating and keep you fresh all day.
                </p>
            </div>

            <div class="box">
                <h3>eye brows </br />lifting</h3>
                <div class="service-img">
                    <img src="img/eye_brows_lifting.jpeg" alt="service-img" />
                </div>
                <p>
                Open up and lift your brows for a bright, refreshed look with a 
                non-surgical eyebrow lift that enhances eye area definition.
                </p>
            </div>

            <div class="box">
                <h3>double chin <br />reduction</h3>
                <div class="service-img">
                    <img src="img/double_chin_reduction.jpeg" alt="service-img" />
                </div>
                <p>
                Say goodbye to stubborn double chin with effective, targeted treatments 
                that contour and streamline the jawline for a defined profile.
                </p>
            </div>

            <div class="box">
                <h3>hand rejuvenation <br />treatment</h3>
                <div class="service-img">
                    <img src="img/hand_rejuvenation_treatment.jpeg" alt="service-img" />
                </div>
                <p>
                Restore youthful volume and smooth texture to your hands, diminishing the 
                appearance of wrinkles and veins for rejuvenated hands.
                </p>
            </div>

            <div class="box">
                <h3>smile line <br />fillers</h3>
                <div class="service-img">
                    <img src="img/smile_line_fillers.jpeg" alt="service-img" />
                </div>
                <p>
                Soften smile lines with dermal fillers that smoothen deep folds 
                around the mouth, leaving you with a refreshed, natural look.
                </p>
            </div>

            <div class="box">
                <h3>fillers for lips, eyes, cheek, chin, nose reshaping, etc.</h3>
                <div class="service-img">
                    <img src="img/fillers.jpg" alt="service-img" />
                </div>
                <p>
                Enhance and sculpt facial features with versatile fillers designed to add 
                volume, define contours, and achieve balanced, harmonious facial proportions.
                </p>
            </div>

        </div>

    </section>

    <section class="services-lst" id="acne">

        <h1 class="heading-services">Acne & Pigmentation</h1>

        <div class="box-container container">

            <div class="box">
                <h3>acne <br />treatments</h3>
                <div class="service-img">
                    <img src="img/acne_Treatments.jpg" alt="service-img" />
                </div>
                <p>
                Target and treat active acne with customized solutions to clear breakouts, prevent future 
                ones, and achieve healthier, smoother skin.
                </p>
            </div>

            <div class="box">
                <h3>acne scar </br />treatments</h3>
                <div class="service-img">
                    <img src="img/acne_scar_treatments.jpeg" alt="service-img" />
                </div>
                <p>
                Minimize acne scars with advanced treatments that improve skin texture and tone, restoring 
                a smoother complexion.
                </p>
            </div>

            <div class="box">
                <h3>LED light therapy </br />for acne</h3>
                <div class="service-img">
                    <img src="img/LED_therapy.jpeg" alt="service-img" />
                </div>
                <p>
                Non-invasive LED therapy helps reduce acne and inflammation, promoting clearer 
                skin with natural healing light technology.
                </p>
            </div>

            <div class="box">
                <h3>pigmentation <br />correction</h3>
                <div class="service-img">
                    <img src="img/pigmentation_correction.jpg" alt="service-img" />
                </div>
                <p>
                Even out skin tone and diminish dark spots with pigmentation correction 
                treatments for a brighter, more uniform complexion.
                </p>
            </div>

            <div class="box">
                <h3>keloid scar </br />reduction</h3>
                <div class="service-img">
                    <img src="img/keloid_scar_reduction.jpg" alt="service-img" />
                </div>
                <p>
                Flatten and soften raised keloid scars using specialized treatments that reduce 
                scar size and improve skin texture.
                </p>
            </div>

            <div class="box">
                <h3>stretch mark <br />reduction</h3>
                <div class="service-img">
                    <img src="img/stretch_mark _reduction.jpg" alt="service-img" />
                </div>
                <p>
                Fade and smooth stretch marks with treatments designed to enhance skin elasticity 
                and tone, restoring natural skin texture.
                </p>
            </div>

            <div class="box">
                <h3>chemical </br />peels</h3>
                <div class="service-img">
                    <img src="img/chemical_peels.jpg" alt="service-img" />
                </div>
                <p>
                Revitalize your skin with tailored chemical peels that exfoliate and renew 
                the skin, revealing a brighter, fresher layer beneath.
                </p>
            </div>

            <div class="box">
                <h3>dark lips <br />lightening</h3>
                <div class="service-img">
                    <img src="img/dark_lip.jpg" alt="service-img" />
                </div>
                <p>
                Lighten dark lips with safe treatments to enhance natural color and achieve a 
                balanced, even lip tone.
                </p>
            </div>

            <div class="box">
                <h3>skin glowing <br />treatments</h3>
                <div class="service-img">
                    <img src="img/skin-glowing-treatments.jpg" alt="service-img" />
                </div>
                <p>
                Achieve a radiant, healthy glow with treatments focused on boosting hydration, 
                clarity, and skin vitality.
                </p>
            </div>

            <div class="box">
                <h3>skin <br />polishing</h3>
                <div class="service-img">
                    <img src="img/skin_polishing.jpg" alt="service-img" />
                </div>
                <p>
                Smooth and refine skin texture with skin polishing treatments that 
                leave you with a soft, luminous complexion.
                </p>
            </div>

            <div class="box">
                <h3>skin lightening and brightening treatments</h3>
                <div class="service-img">
                    <img src="img/skin_lightening.png" alt="service-img" />
                </div>
                <p>
                Enhance your skin’s natural glow with treatments that lighten and brighten 
                dull or uneven areas, resulting in a more radiant look.
                </p>
            </div>

            <div class="box">
                <h3>warts and skin tags treatments</h3>
                <div class="service-img">
                    <img src="img/warts_and_skin_tags.jpeg" alt="service-img" />
                </div>
                <p>
                Safely remove unwanted warts and skin tags with minimally invasive techniques, 
                restoring smooth, clear skin.
                </p>
            </div>

        </div>

    </section>

    <section class="services-lst" id="hair">

        <h1 class="heading-services">Hair Growth Treatments</h1>

        <div class="box-container container">

            <div class="box">
                <h3>hair growth treatment</h3>
                <div class="service-img">
                    <img src="img/hair_growth_treatment.jpeg" alt="service-img" />
                </div>
                <p>
                Stimulate natural hair growth with effective treatments that strengthen hair 
                follicles, promoting thicker, healthier hair.
                </p>
            </div>

            <div class="box">
                <h3>hair loss treatment</h3>
                <div class="service-img">
                    <img src="img/hair_loss_treatment.jpeg" alt="service-img" />
                </div>
                <p>
                Address hair loss at its root with customized therapies designed to slow down 
                shedding and encourage regrowth for a fuller head of hair.
                </p>
            </div>

            <div class="box">
                <h3>laser hair reduction</h3>
                <div class="service-img">
                    <img src="img/laser_hair_reduction.jpeg" alt="service-img" />
                </div>
                <p>
                Achieve smooth, hair-free skin with laser hair reduction, a long-lasting solution 
                that minimizes unwanted hair growth safely and effectively.
                </p>
            </div>

            <div class="box">
                <h3>beard growth</h3>
                <div class="service-img">
                    <img src="img/beard_growth.jpg" alt="service-img" />
                </div>
                <p>
                Enhance beard thickness and fill in sparse areas with targeted treatments 
                that encourage healthy, even beard growth.
                </p>
            </div>

            <div class="box">
                <h3>alopecia areata treatment</h3>
                <div class="service-img">
                    <img src="img/alopecia_areata_treatment.jpg" alt="service-img" />
                </div>
                <p>
                Manage alopecia areata with specialized treatments aimed at reducing patchy hair 
                loss and encouraging regrowth for a more consistent appearance.
                </p>
            </div>

            <div class="box">
                <h3>dandruff clearing</h3>
                <div class="service-img">
                    <img src="img/dandruff_clearing.jpeg" alt="service-img" />
                </div>
                <p>
                Eliminate dandruff and promote a healthier scalp with treatments that address 
                flaking and scalp irritation, leaving hair refreshed.
                </p>
            </div>

        </div>

    </section>

    <?php include "components/footer.php" ?>

    <script src="js/script.js"></script>

</body>

</html>