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
            title : "Home",
            url : "/home",
            backgroundColor : "#D8EAD1",
            lists : [
                {
                    name : "Bull/Sell",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/property-lawyer.webp"
                },
                {
                    name : "Rent",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/home-rent.webp"
                },
                {
                    name : "Relocate",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/modular-kitchen.webp"
                },
                {
                    name : "Interiors",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/interior-services.webp"
                },
            ]
        },
        {
            id : 2,
            title : "Education",
            url : "/eduction",
            backgroundColor : "#FFE4D3",
            lists : [
                {
                    name : "Playscholls",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/playschool.webp"
                },
                {
                    name : "Schools",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/school.webp"
                },
                {
                    name : "School Tuitions",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/entrance-exam-coaching.webp"
                },
                {
                    name : "Colleges",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/job-training.webp"
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
                    name : "Cleaning",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/home-cleaning.webp"
                },
                {
                    name : "Loans",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/personal-loan.webp"
                },
                {
                    name : "Security",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/security-guard.webp"
                },
                {
                    name : "Pest Control",
                    link : "/",
                    image : "https://sulcdn.azureedge.net/content/images/sulekha-home/v1/pest-control.webp"
                },
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

    home.sendMail = async (event)=>{
        var form = document.getElementById("contactForm");
        const status = document.getElementById('status');
        event.preventDefault();
        const formData = new FormData(form);
        const action ="https://formspree.io/f/xeoandry"

        try {
            const response = await fetch(action, {
              method: 'POST',
              body: formData,
              headers: {
                'Accept': 'application/json'
              }
            });

            if (response.ok) {
              status.innerHTML = "Thanks for your message!";
              form.reset();
              setTimeout(()=>{
                status.innerHTML = '';
              },5000)
            } else {
              const data = await response.json();
              if (data.errors) {
                status.innerHTML = data.errors.map(error => error.message).join(", ");
              } else {
                status.innerHTML = "Oops! Something went wrong.";
              }
            }
          } catch (error) {
            status.innerHTML = "Oops! There was a problem submitting your form.";
        }
    }

}]);
