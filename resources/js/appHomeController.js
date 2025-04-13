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
    };

    home.homeCategoryList = [
        {
            id : 1,
            title : "Web Development",
            url : "/web-development",
            backgroundColor : "#D8EAD1",
            lists : [
                {
                    name : "UI/UX Design",
                    link : "/web-development",
                    image : "/images/ui-ux-design.jpg"
                },
                {
                    name : "E-Commerce Solutions",
                    link : "/web-development",
                    image : "/images/web_development_main_image.png"
                },
                {
                    name : "SEO Optimization",
                    link : "/web-development",
                    image : "/images/seo.jpg"
                },
                {
                    name : "Database & data management",
                    link : "/web-development",
                    image : "/images/database.jpg"
                },
            ]
        },
        {
            id : 2,
            title : "App Development",
            url : "/app-development",
            backgroundColor : "#FFE4D3",
            lists : [
                {
                    name : "iOs Development",
                    link : "/app-development",
                    image : "/images/ios-development.jpg"
                },
                {
                    name : "Android Development",
                    link : "/app-development",
                    image : "/images/android-development.png"
                },
                {
                    name : "Cross-Platform Apps",
                    link : "/app-development",
                    image : "/images/cross-platform-app.png"
                },
                {
                    name : "App Marketing",
                    link : "/app-development",
                    image : "/images/app-marketing.jpg"
                },
            ]
        },
        {
            id : 3,
            title : "Service",
            url : "/service",
            backgroundColor : "#F7EAD2",
            lists : [
                {
                    name : "CCTV Install",
                    link : "/cctv-install",
                    image : "/images/cctv-install.jpg"
                },
                {
                    name : "Computer",
                    link : "/computer",
                    image : "/images/computer.jpg"
                },
                {
                    name : "Billing Software",
                    link : "/",
                    image : "/images/billing-service.png"
                },
                // {
                //     name : "Pest Control",
                //     link : "/",
                //     image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/pest-control.webp"
                // },
            ]
        }
    ]

    home.popuplarCategoryList = [
        {
            title : "Web Development",
            url : "/web-development"
        },
        {
            title : "App Developemnt",
            url : "/app-development"
        },
        {
            title : "CCTV Install",
            url : "/cctv-install"
        },
        {
            title : "Computer Service",
            url : "/computer"
        }
    ]

    home.viewCategory = (obj) => {
        if(localStorage.hasOwnProperty('recentCatrgies')){
            var index = home.searchCategoryList.findIndex(c => c.title == obj);
            var category = JSON.parse(localStorage.getItem('recentCatrgies'));
            if(index > -1){
                category.splice(index,1);
            }
            category.unshift(obj);
        }else{
            var category = [obj];
        }
        localStorage.setItem('recentCatrgies',JSON.stringify(category));
        window.location.href = window.location.origin+obj.url;
    }

    home.checkSearch = () => {
        return $(".popuplarCatogoryList").length >= 1 ? false : true;
    }

    (()=>{
        if(localStorage.hasOwnProperty('recentCatrgies')){
            home.searchCategoryList = JSON.parse(localStorage.getItem('recentCatrgies'));
        }else{
            home.searchCategoryList = [];
        }
    })();

    window.addEventListener('popstate',()=>{
        if(localStorage.hasOwnProperty('recentCatrgies')){
            home.searchCategoryList = JSON.parse(localStorage.getItem('recentCatrgies'));
        }else{
            home.searchCategoryList = [];
        }
    });

    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    home.appDevWorkprocess = (event)=>{
        var tab = $(event.currentTarget).closest('.tab'),
        index = $(event.currentTarget).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(event.currentTarget).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        event.preventDefault();
    }
}]);
