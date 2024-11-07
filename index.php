

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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <style>
        input[type="number"] {
            -moz-appearance: textfield; /* Firefox */
            -webkit-appearance: none;   /* Chrome, Safari */
            appearance: none;           /* Other browsers */
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

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

    <!-- <section class="ad-slider" id="ad-slider">
        <div class="slides">
            <div class="slide">
                <img src="img/ad-one.jpg" alt="Ad one" />
            </div>
            <div class="slide">
                <img src="img/ad-two.jpg" alt="Ad two" />
            </div>
            <div class="slide">
                <img src="img/ad-three.jpg" alt="Ad three" />
            </div>
            <div class="slide">
            <img src="img/ad-4.jpg" alt="Ad four" />
            </div>
            <div class="slide">
                <img src="img/ad-5.jpg" alt="Ad five" />
            </div>
            <div class="slide">
                <img src="img/ad-6.jpg" alt="Ad six" />
            </div>
            <div class="slide">
                <img src="img/ad-7.jpg" alt="Ad seven" />
            </div>
            <div class="slide">
                <img src="img/ad-8.jpg" alt="Ad eight" />
            </div>
            <div class="slide">
                <img src="img/ad-9.jpg" alt="Ad nine" />
            </div>
        </div>
    </section> -->

    <section class="ad-slider" id="ad-slider">
    <div class="wrapper">
        <!-- Initialize Swiper -->
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/ad-one.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-two.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-three.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-4.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-5.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-6.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-7.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-8.jpg" alt="ad" draggable="false">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/ad-9.jpg" alt="ad" draggable="false">
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>


    <section class="about" id="about">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="img/elegance-logo.jpeg" class="w-100 mb-5 mb-md-0" alt="">
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

        
        <form id="appointmentForm">
        <div id="message" class="message"></div>
            <span>name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>message :</span>
            <textarea name="message" placeholder="enter your message" class="box" required></textarea>
            <button type="submit" class="link-btn animate-btn-contact" id="submitButton">Make Appointment</button>
        </form>

    </section>

    <section class="services" id="services">

        <h1 class="heading-services">our services</h1>

        <div class="box-container container">

            <div class="box-ser">
            <img src="img/smile-line-fillers.png" alt="smile-line-fillers"/>
                <h3>Smile Line Fillers</h3>
                <p>Smooth and rejuvenate smile lines, reducing wrinkles for a more youthful look.</p>
            </div>

            <div class="box-ser">
                <img src="img/laser-hair-reduction.png" alt="laser-hair-reduction">
                <h3>Laser Hair Reduction</h3>
                <p>Attain long-lasting reduction in unwanted hair growth for smoother skin.</p>
            </div>

            <div class="box-ser">
                <img src="img/skin-glow-treatment.png" alt="skin-glow-treatment">
                <h3>Skin Glowing Treatments</h3>
                <p>Enhance the skin's radiance and promote a healthy, luminous complexion.</p>
            </div>

            <div class="box-ser">
                <img src="img/keloid-scar-reduction.png" alt="keloid-scar-reduction">
                <h3>Keloid Scar Reduction</h3>
                <p>Minimize the appearance of raised and thickened scars for improved skin texture.</p>
            </div>

            <div class="box-ser">
                <img src="img/stretch-mark-reduction.png" alt="stretch-mark-reduction">
                <h3>Stretch Mark Reduction</h3>
                <p>Reduce the visibility of stretch marks caused by rapid weight gain or growth.</p>
            </div>

            <div class="box-ser">
                <img src="img/wart-removal.png" alt="warts-and-skin-tag-removal">
                <h3>Warts & Skin Tags Removal</h3>
                <p>Remove unwanted skin growths, such as warts and skin tags, for a smoother and blemish-free appearance.</p>
            </div>

        </div>

    </section>

    <section class="process-ser" id="process-ser">

        <h1 class="heading-process">more services</h1>

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

    <!-- <section class="reviews" id="reviews">

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

    </section> -->

    <?php include "components/footer.php" ?>

    <script>
    document.getElementById("appointmentForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form from reloading the page

        const submitButton = document.getElementById("submitButton"); // Get the submit button
        submitButton.disabled = true; // Disable the button to prevent multiple clicks
        submitButton.textContent = 'Sending...'; // Change button text

        // Create a FormData object with the form fields
        const formData = new FormData(this);

        // Send the AJAX request
        fetch("submit_appointment.php", {
            method: "POST",
            body: formData,
        })
        .then(response => response.json()) // Parse JSON response
        .then(data => {
            // Display message based on response
            const messageDiv = document.getElementById("message");
            messageDiv.textContent = data.message;
            messageDiv.style.color = data.success ? "green" : "red";

            if (data.success) {
            document.getElementById("appointmentForm").reset();
            }
        })
        .catch(error => {
            console.error("Error:", error);
        })
        .finally(() => {
            // Re-enable the submit button after processing
            submitButton.disabled = false;
            submitButton.textContent = 'Make Appointment'; // Reset button text
        });
    });
    </script>

    <script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true, // Enable continuous loop mode
        autoplay: {
            delay: 2500, // Time between slides (in ms)
            disableOnInteraction: false, // Keep autoplay running after user interactions
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Make pagination bullets clickable
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 3, // Number of slides to show at once
        spaceBetween: 10, // Space between slides
        breakpoints: {
            640: {
                slidesPerView: 2, // 1 slide for screens smaller than 640px
            },
            768: {
                slidesPerView: 3, // 2 slides for screens larger than 640px
            },
            0: {
                slidesPerView: 1, // 3 slides for larger screens
            },
        },
    });
</script>


    <script src="js/script.js" defer></script>

</body>

</html>