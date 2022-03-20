// Import-Photos
import header_logo from "../client/media/headerlogo.png"
import landing_image from "../client/media/nader-khamis.png"
import landing_border from "../client/media/landing-border.png"
import about_image from "../client/media/nader-khamis-about.png"
import like from "../client/media/like.png"
import love from "../client/media/love.png"
import wow from "../client/media/wow.png"
let favIcon = document.getElementById('fav-icon'),
    headerLogo = document.getElementById('header-logo'),
    landingImage = document.getElementById('nader-image'),
    landingBorder = document.getElementById('landing-border'),
    aboutImage = document.getElementById('about-image'),
    likeImage = document.getElementById('react-like'),
    loveImage = document.getElementById('react-love'),
    wowImage = document.getElementById('react-wow');

// Use-Photos
favIcon.href = headerLogo.src = header_logo;
landingImage.src = landing_image;
landingBorder.src = landing_border;
aboutImage.src = about_image;
likeImage.src = like;
loveImage.src = love;
wowImage.src = wow;

// Main-Style
import '../client/styles/style.scss'
// /Main-Style