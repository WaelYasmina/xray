//window.alert('Hello World !');
const heroImg = document.querySelector('.single-post .hero img') ||
document.querySelector('.home-container .hero img');
if(heroImg) {
    const imageSrc = heroImg.getAttribute('src');
    const hero = document.querySelector('.single-post .hero') ||
    document.querySelector('.home-container .hero');
    hero.style.backgroundImage = 'url(' + imageSrc + ')';
}