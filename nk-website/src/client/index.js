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
    hireMeSection = document.getElementById('hire-me');
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

// Main-Style
import '../client/styles/style.scss'
// /Main-Style