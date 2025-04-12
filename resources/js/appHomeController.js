var app = angular.module('myApp',[]);
app.controller('homeController',['$http',function($http){
    var home = this;
    window.home = home;
    home.name = 'Technest India';

    // Scroll reveal animations
    function revealElements() {
        const revealElements = document.querySelectorAll('.reveal');
        for (let i = 0; i < revealElements.length; i++) {
            const windowHeight = window.innerHeight;
            const elementTop = revealElements[i].getBoundingClientRect().top;
            const elementVisible = 150;
            if (elementTop < windowHeight - elementVisible) {
                revealElements[i].classList.add('active');
            }
        }
    }
    // Initial check on page load
    revealElements();
    // Check on scroll
    window.addEventListener('wheel', revealElements);
    // Add animation delay to elements based on data-delay attribute
    document.querySelectorAll('[data-delay]').forEach(el => {
        el.style.transitionDelay = el.getAttribute('data-delay') + 'ms';
    });

    home.movetoprotfolio = ()=>{
        $('#portfolio')[0].scrollIntoView({
            behavior: 'smooth'
        });
        revealElements();
    }
}]);
