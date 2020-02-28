//window.alert('Hello World !');
const heroImg = document.querySelector('.single-post .hero img') ||
document.querySelector('.home-container .hero img');
if(heroImg) {
    const imageSrc = heroImg.getAttribute('src');
    const hero = document.querySelector('.single-post .hero') ||
    document.querySelector('.home-container .hero');
    hero.style.backgroundImage = 'url(' + imageSrc + ')';
}

const mobileNav = document.querySelector('header nav .mobile-nav');
const nav = document.querySelector('header nav');
const navItems = document.querySelector('header nav .menu-nav-1-container');
mobileNav.addEventListener('click', () => {
    mobileNav.style.display = 'none';
    nav.style.flexDirection = 'column';
    navItems.style.display = 'flex';
});

const section = document.querySelector('section');
section.addEventListener('click', () => {
    mobileNav.style.display = 'flex';
    nav.style.flexDirection = 'row';
    navItems.style.display = 'none';
});