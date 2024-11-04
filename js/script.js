let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');

// const slidesContainer = document.querySelector(".ad-slider .slides");
// const slides = document.querySelectorAll(".ad-slider .slide");
// const totalSlides = slides.length;
// let index = 0;

// function showNextSlide() {
//     index = (index + 1) % totalSlides;
//     slidesContainer.style.transform = `translateX(-${index * 100}%)`;
// }

// setInterval(showNextSlide, 3000); 



menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        header.classList.add('active');
    }else{
        header.classList.remove('active');
    }
}

const aboutSection = document.querySelector('.about');

const observerAbout = new IntersectionObserver(
    (entries, observerAbout) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observerAbout.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.2,
    }
);

observerAbout.observe(aboutSection);

// Contact section
const contactSection = document.querySelector('.contact');

const observerContact = new IntersectionObserver(
    (entries, observerContact) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observerContact.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.2,
    }
);

observerContact.observe(contactSection);

// Services section
const servicesSection = document.querySelector('.services');

const observerServices = new IntersectionObserver(
    (entries, observerServices) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observerServices.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.2,
    }
);

observerServices.observe(servicesSection);


// Process section
const processSection = document.querySelector('.process-ser');

const observerProcess = new IntersectionObserver(
    (entries, observerProcess) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observerProcess.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.2,
    }
);

observerProcess.observe(processSection);


// // Process section
// const reviewSection = document.querySelector('.reviews');

// const observerReview = new IntersectionObserver(
//     (entries, observerReview) => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 entry.target.classList.add('animate');
//                 observerReview.unobserve(entry.target);
//             }
//         });
//     },
//     {
//         threshold: 0.2,
//     }
// );

// observerReview.observe(reviewSection);