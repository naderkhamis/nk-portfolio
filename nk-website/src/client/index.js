import header_logo from "../client/media/headerlogo.png"
import landing_image from "../client/media/nader-khamis.png"
import landing_border from "../client/media/landing-border.png"
let favIcon = document.getElementById('fav-icon'),
    headerLogo = document.getElementById('header-logo'),
    landingImage = document.getElementById('nader-image'),
    landingBorder = document.getElementById('landing-border');

favIcon.href = headerLogo.src = header_logo;
landingImage.src = landing_image;
landingBorder.src = landing_border;

// Main-Style
import '../client/styles/style.scss'
// /Main-Style