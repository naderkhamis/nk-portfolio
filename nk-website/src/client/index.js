// Import-Library
import mixitup from 'mixitup';
// /Import-Library

// Import-Photos
import header_logo from "../client/media/headerlogo.png"
import landing_image from "../client/media/nader-khamis.png"
import landing_border from "../client/media/landing-border.png"
import about_image from "../client/media/nader-khamis-about.png"
import like from "../client/media/like.png"
import love from "../client/media/love.png"
import wow from "../client/media/wow.png"
import skills from "../client/media/skills.png"
import adobe_xd from "../client/media/adobe-xd.png"
import adobe_ill from "../client/media/adobe-ill.png"
import hire_image from "../client/media/hire-me-bg.png"
import ui_design from "../client/media/ui-design.jpg"
import web_design from "../client/media/web-design.jpg"
import traveler from "../client/media/traveler.jpeg"
import hostingo from "../client/media/hostingo.jpeg"
import aroma_clinic from "../client/media/aroma-clinic.jpeg"
import process from "../client/media/process.png"
import statistics from "../client/media/statistics.png"
import footer_border from "../client/media/footer-border.png"
import footer_logo from "../client/media/footerlogo.png"
import client1 from "../client/media/client1.jpg"
import client2 from "../client/media/client2.jpg"
import client3 from "../client/media/client3.jpg"
// /Import-Photos
// Import-Videos
import client_says_mp4 from "../client/media/clients-says.mp4"
import client_says_ogg from "../client/media/clients-says.ogg"
// /Import-Videos
// Images-Paths
let servicesImagesUrl = [ui_design, web_design];
let webProjectsImagesUrl = [traveler, hostingo, aroma_clinic];
let uiProjectsImagesUrl = [traveler, hostingo, aroma_clinic];
let logoProjectsImagesUrl = [traveler, hostingo, aroma_clinic];
let clientsImagesUrl = [client1, client2, client3];
// /Images-Paths

// Dom-Manipulation
let favIcon = document.getElementById('fav-icon'),
    headerLogo = document.getElementById('header-logo'),
    landingImage = document.getElementById('nader-image'),
    landingBorder = document.getElementById('landing-border'),
    aboutImage = document.getElementById('about-image'),
    likeImage = document.getElementById('react-like'),
    loveImage = document.getElementById('react-love'),
    wowImage = document.getElementById('react-wow'),
    skillsImage = document.getElementById('skills-image'),
    adobeXdImage = document.getElementById('adobe-xd'),
    adobeIllImage = document.getElementById('adobe-ill'),
    hireMeSection = document.getElementById('hire-me'),
    servicesImages = document.getElementsByClassName('service-img'),
    webProjectsImages = document.getElementsByClassName('web-project-img'),
    uiProjectsImages = document.getElementsByClassName('ui-project-img'),
    logoProjectsImages = document.getElementsByClassName('logo-project-img'),
    processImage = document.getElementById('process-image'),
    statisticImage = document.getElementById('statistic-image'),
    footerBorder = document.getElementById('footer-border'),
    footerLogo = document.getElementById('footer-logo'),
    clientSaysMP4 = document.getElementById('client-says-mp4'),
    clientSaysOgg = document.getElementById('client-says-ogg'),
    clientsImages = document.getElementsByClassName('client-img');

// Use-Photos
favIcon.href = headerLogo.src = header_logo;
landingImage.src = landing_image;
landingBorder.src = landing_border;
aboutImage.src = about_image;
likeImage.src = like;
loveImage.src = love;
wowImage.src = wow;
skillsImage.src = skills;
adobeXdImage.src = adobe_xd;
adobeIllImage.src = adobe_ill;
hireMeSection.style.backgroundImage = `url(${hire_image})`;
processImage.src = process;
statisticImage.src = statistics;
footerBorder.src = footer_border;
footerLogo.src = footer_logo;

for (let i = 0; i < servicesImages.length; i++) {
    servicesImages[i].style.backgroundImage = `url(${servicesImagesUrl[i]})`;
}

for (let i = 0; i < webProjectsImages.length; i++) {
    webProjectsImages[i].src = webProjectsImagesUrl[i];
}

for (let i = 0; i < uiProjectsImages.length; i++) {
    uiProjectsImages[i].src = uiProjectsImagesUrl[i];
}

for (let i = 0; i < logoProjectsImages.length; i++) {
    logoProjectsImages[i].src = logoProjectsImagesUrl[i];
}

for (let i = 0; i < clientsImages.length; i++) {
    clientsImages[i].src = clientsImagesUrl[i];
}
// /Use-Photos

// Use-Videos
clientSaysMP4.src = client_says_mp4;
clientSaysOgg.src = client_says_ogg;

// /Dom-Manipulation

// Progress-Bars
$(document).ready(function() {
    $('.progress-value > span').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 1500,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});
// /Progress-Bars

// Swiper-Initialization
var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,

    },
    autoHeight: true
});
var webSlider = new Swiper(".project-slider", {
    lazy: true,
    slidesPerView: 1.1,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
});
var clientSlider = new Swiper(".clientSaySlider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
// /Swiper-Initialization

// MixItUp-Initialization
var mixer = mixitup(".box-list", {
    load: {
        filter: '.web-development'
    }
});
// /MixItUp-Initialization

// Main-Style
import '../client/styles/style.scss'
// /Main-Style