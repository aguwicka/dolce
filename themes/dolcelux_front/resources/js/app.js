// JS
// import UIkit from 'uikit/dist/js/uikit.min';
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';
UIkit.use(Icons);

// SCSS
import '../scss/main.scss'

// CSS (example)
// import './assets/css/main.css'

//SvgStore
const __svg__ = { path: 'assets/img/**/icon-*.svg', name: 'assets/img/icons.svg' };
require('webpack-svgstore-plugin/src/helpers/svgxhr')(__svg__);

//modile menu
document.querySelector('.burger-icon').addEventListener('click', function(){
	this.classList.toggle('show');
})

//filter
document.querySelectorAll('.filter-values').forEach(item => {
    const currentTab = item.closest('.filter-values').previousElementSibling.firstElementChild;
    let defaultTab = item.firstElementChild.firstElementChild.textContent;
    currentTab.textContent = defaultTab;
    item.addEventListener('click', function(e){
        currentTab.textContent = e.target.textContent;
    })
})

//change header background
window.addEventListener('scroll', function(){
    const header = document.querySelector('.header__desktop');
    if(window.pageYOffset > 20){
        header.classList.add('bg');
    } else{
        header.classList.remove('bg');
    }
})

//slider
function initSlider(){
    if(document.querySelector('.news').clientWidth < 1023){
        UIkit.slider('.slider').$destroy();
    } else{
        UIkit.slider('.slider');
    }
}

initSlider();

window.addEventListener('resize', initSlider);
