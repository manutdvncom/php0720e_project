
var menuitems = document.getElementById("menuitems");
menuitems.style.maxHeight = "0px";
function menutoggle() {
    if (menuitems.style.maxHeight=="0px"){
        menuitems.style.maxHeight = "200px";
    } else {
        menuitems.style.maxHeight = "0px";
    }
}

var loginForm = document.getElementById("loginForm");
var regForm = document.getElementById("regForm");
var indicator = document.getElementById("Indicator");
function register() {
    regForm.style.transform = "translateX(0px)";
    loginForm.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";
}
function login() {
    regForm.style.transform = "translateX(300px)";
    loginForm.style.transform = "translateX(300px)";
    indicator.style.transform = "translateX(0px)";
}

var mybutton = document.getElementById("top-btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

var proImg = document.getElementById("product-img");
var smallImg = document.getElementsByClassName("small-img");
smallImg[0].onClick = function () {
    proImg.src = smallImg[0].src;
};
smallImg[1].onClick = function () {
    proImg.src = smallImg[1].src;
};
smallImg[2].onClick = function () {
    proImg.src = smallImg[2].src;
};
smallImg[3].onClick = function () {
    proImg.src = smallImg[3].src;
};

$(document).ready(function() {
    var autoplaySlider = $('#autoplay').lightSlider({
        adaptiveHeight:true,
        item:1,
        slideMargin:0,
        auto:true,
        loop:true,
        pauseOnHover: true,
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        }
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
});