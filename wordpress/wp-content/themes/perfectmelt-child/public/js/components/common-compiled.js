var urlHref = window.location.href;
var urlPath = window.location.pathname;
var urlPathRes = urlPath.split("/");
var urlRegMenuNav = urlPathRes[2];

if(urlRegMenuNav == "") {
    $(".home-menu-nav a").removeClass("text-dark").addClass("text-info font-weight-bold");
}

if(urlRegMenuNav == "home" || urlRegMenuNav == "desserts" || urlRegMenuNav == "rice-meals" || urlRegMenuNav == "blog" || urlRegMenuNav == "about-us" || urlRegMenuNav == "contact-us") {
    $(".nav-link[href='"+urlHref+"']").removeClass("text-dark").addClass("text-info font-weight-bold");
}

if(urlRegMenuNav == "sign-up" || urlRegMenuNav == "login") {
    $(".nav-link[href='"+urlHref+"']").removeClass("text-dark").addClass("text-white font-weight-bold");
}

window.onscroll = function() {primaryHeaderNavScroll()};

function primaryHeaderNavScroll() {
    var primaryHeaderNavElement = $(".navbar").hasClass("primary-header-navigation");
    if(primaryHeaderNavElement) {
        var header = document.getElementById("primaryHeaderNavigation");
        var sticky = header.offsetTop;

        if (window.pageYOffset > sticky) {
            header.classList.add("sticky-primary-header-navigation");
        } else {
            header.classList.remove("sticky-primary-header-navigation");
        }
    }
}

$('.carousel').carousel();

function initIsotope() {
    $('#displayFeatures-posts').imagesLoaded( function(){
        $('#displayFeatures-posts').isotope({
            itemSelector : '.item'
        });
    });

    $('#displayDesserts-posts').imagesLoaded( function(){
        $('#displayDesserts-posts').isotope({
            itemSelector : '.item'
        });
    });

    $('#displayRiceMeals-posts').imagesLoaded( function(){
        $('#displayRiceMeals-posts').isotope({
            itemSelector : '.item'
        });
    });

    $('#displayBlog-posts').imagesLoaded( function(){
        $('#displayBlog-posts').isotope({
            itemSelector : '.item'
        });
    });
}

initIsotope();

//Rerun isotope function when window resize
var mediaScreenTimer = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

$(function() {
    var pause = 100;
    $(window).resize(function() {
        mediaScreenTimer(function() {
            var mediaScreenWidth = $(window).width();
            // console.log(mediaScreenWidth);

            initIsotope();

        }, pause );
    });

    $(window).resize();
});
//End rerun isotope function when window resize

