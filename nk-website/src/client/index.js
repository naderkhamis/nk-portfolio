// Import-Library
import mixitup from "mixitup";
// /Import-Library

// Import-Photos
import header_logo from "../client/media/headerlogo.png";
import landing_image_lg from "../client/media/nader-khamis-lg.png";
import about_image from "../client/media/nader-khamis-about.png";
import like from "../client/media/like.png";
import love from "../client/media/love.png";
import wow from "../client/media/wow.png";
import skills from "../client/media/skills.png";
import adobe_xd from "../client/media/adobe-xd.png";
import adobe_ill from "../client/media/adobe-ill.png";
import adobe_photoshop from "../client/media/adobe-photoshop.png";
import adobe_indesign from "../client/media/adobe-indesign.png";
import hire_image from "../client/media/hire-me-bg.png";
import ui_design from "../client/media/ui-design.jpg";
import web_design from "../client/media/web-design.jpg";
import web_development from "../client/media/web-development.jpg";
import seo_optimization from "../client/media/seo-optimization.jpg";
import traveler from "../client/media/traveler.jpeg";
import hostingo from "../client/media/hostingo.jpeg";
import aroma_clinic from "../client/media/aroma-clinic.jpeg";
import process from "../client/media/process.png";
import statistics from "../client/media/statistics.png";
import footer_logo from "../client/media/footerlogo.png";
import clients_says from "../client/media/clients-says.gif";
import client1 from "../client/media/client1.jpg";
import client2 from "../client/media/client2.jpg";
import client3 from "../client/media/client3.jpg";
// /Import-Photos
// Images-Paths
let servicesImagesUrl = [
  ui_design,
  web_design,
  web_development,
  seo_optimization,
];
let webProjectsImagesUrl = [traveler, hostingo, aroma_clinic];
let uiProjectsImagesUrl = [traveler, hostingo, aroma_clinic];
let logoProjectsImagesUrl = [traveler, hostingo, aroma_clinic];
let clientsImagesUrl = [client1, client2, client3];
// /Images-Paths
// Dom-Manipulation
let favIcon = document.getElementById("fav-icon"),
  main = document.getElementsByName("main"),
  spinner = document.getElementById("spinner-img"),
  headerLogo = document.getElementById("header-logo"),
  landingImageLg = document.getElementById("nader-image-lg"),
  aboutImage = document.getElementById("about-image"),
  likeImage = document.getElementById("react-like"),
  loveImage = document.getElementById("react-love"),
  wowImage = document.getElementById("react-wow"),
  skillsImage = document.getElementById("skills-image"),
  adobeXdImage = document.getElementById("adobe-xd"),
  adobeIllImage = document.getElementById("adobe-ill"),
  adobePhotoshopImage = document.getElementById("adobe-photoshop"),
  adobeIndesignImage = document.getElementById("adobe-in"),
  hireMeSection = document.getElementById("hire-me"),
  servicesImages = document.getElementsByClassName("service-img"),
  webProjectsImages = document.getElementsByClassName("web-project-img"),
  uiProjectsImages = document.getElementsByClassName("ui-project-img"),
  logoProjectsImages = document.getElementsByClassName("logo-project-img"),
  processImage = document.getElementById("process-image"),
  statisticImage = document.getElementById("statistic-image"),
  footerLogo = document.getElementById("footer-logo"),
  clientSays = document.getElementById("client-says-bg"),
  clientsImages = document.getElementsByClassName("client-img");
// /Dom-Manipulation

$(document).ready(function () {
  // progress-bar
  $(window).scroll(function () {
    var wintop = $(window).scrollTop(),
      docheight = $("body").height(),
      winheight = $(window).height();
    var totalScroll = (wintop / (docheight - winheight)) * 100;
    $(".header-progress-bar").css("width", totalScroll + "%");
    // navbar-shadow
    if ($(window).scrollTop() > 10) {
      $(".navbar").addClass("nav-shadow");
    } else {
      $(".navbar").removeClass("nav-shadow");
    }
    // /navbar-shadow
  });
  // /progress-bar
  // ScrollToTopBtn
  var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
  var rootElement = document.documentElement;
  function handleScroll() {
    // Do something on scroll - 0.15 is the percentage the page has to scroll before the button appears
    // This can be changed - experiment
    var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
    if (rootElement.scrollTop / scrollTotal > 0.01) {
      // Show button
      scrollToTopBtn.classList.add("showBtn");
    } else {
      // Hide button
      scrollToTopBtn.classList.remove("showBtn");
    }
  }
  function scrollToTop() {
    // Scroll to top logic
    rootElement.scrollTo({
      top: 0,
    });
  }
  scrollToTopBtn.addEventListener("click", scrollToTop);
  document.addEventListener("scroll", handleScroll);
  // /ScrollToTopBtn
  // OverlayScrollbars(document.querySelectorAll("body"), {
  //   scrollbars: {
  //     autoHide: "scroll",
  //   },
  // });
  // Spinner
  $(".spinner").delay(1000).fadeOut("slow");
  // Spinner
  // Use-Photos
  favIcon.href = headerLogo.src = spinner.src = header_logo;
  landingImageLg.src = landing_image_lg;
  aboutImage.src = about_image;
  likeImage.src = like;
  loveImage.src = love;
  wowImage.src = wow;
  skillsImage.src = skills;
  adobeXdImage.src = adobe_xd;
  adobeIllImage.src = adobe_ill;
  adobePhotoshopImage.src = adobe_photoshop;
  adobeIndesignImage.src = adobe_indesign;
  hireMeSection.style.backgroundImage = `url(${hire_image})`;
  processImage.src = process;
  statisticImage.src = statistics;
  footerLogo.src = footer_logo;
  clientSays.style.backgroundImage = `url(${clients_says})`;
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
  // navbar-toggler
  $("#nav-icon").click(function () {
    $(this).toggleClass("open");
  });
  // /navbar-toggler

  // $(".progress-value > span").each(function () {
  //   $(this)
  //     .prop("Counter", 0)
  //     .animate(
  //       {
  //         Counter: $(this).text(),
  //       },
  //       {
  //         duration: 1500,
  //         easing: "swing",
  //         step: function (now) {
  //           $(this).text(Math.ceil(now));
  //         },
  //       }
  //     );
  // });

  // Swiper-Initialization
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoHeight: true,
  });
  var webSlider = new Swiper(".project-slider", {
    lazy: true,
    slidesPerView: 1,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 360px
      360: {
        slidesPerView: 1.25,
      },
      // when window width is >= 600px
      600: {
        slidesPerView: 1.5,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 2.3,
      },
    },
  });
  var clientSlider = new Swiper(".clientSaySlider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    initialSlide: 1,
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 800,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 768px
      768: {
        slidesPerView: 2,
      },
    },
  });
  // /Swiper-Initialization
  // MixItUp-Initialization
  var mixer = mixitup(".box-list", {
    load: {
      filter: ".web-development",
    },
  });
  // /MixItUp-Initialization
});
// Main-Style
import "../client/styles/style.scss";
// /Main-Style
