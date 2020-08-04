//indicator scroll
const elemHeight = document.getElementsByClassName("mainContent")[0].clientHeight; 
 
const scrollIndicatorElt = document.getElementById('scrollIndicator');
const maxScrollableHeight = elemHeight- window.innerHeight;
window.addEventListener('scroll', moveScrollIndicator);

function moveScrollIndicator() {

const percentage = ((window.scrollY) / maxScrollableHeight) * 100;
scrollIndicatorElt.style.width = percentage + '%';
}