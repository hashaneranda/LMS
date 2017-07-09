//-----------HOME PAGE ---------


//------SLIDESHOW------------

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 3 seconds
} 



$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('current');
        })
        $(this).addClass('current');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
var scrollPos = $(document).scrollTop();
    $('#menu li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu li a').removeClass("current");
            currLink.addClass("current");
        }
        else{
            currLink.removeClass("current");
        }
        
    });
}



function DoRegisterValidation()
{
    
    var f= document.forms["myForm"];
    var err="* Please fill out this feild";
    var fname = f.fname.value, uname = f.uname.value, pass = f.pass.value, cpass = f.cpass.value, mail = f.mail.value, index = f.index.value;
    var r=1;
    document.getElementById("fnErr").innerHTML = document.getElementById("unErr").innerHTML =document.getElementById("pErr").innerHTML =document.getElementById("cpErr").innerHTML =document.getElementById("mErr").innerHTML=document.getElementById("inErr").innerHTML="";
    if(fname==""){
        document.getElementById("fnErr").innerHTML = err;
        r=0;
    }
    if(uname==""){
         document.getElementById("unErr").innerHTML = err;
        r=0;
    }
    if(pass==""){
         document.getElementById("pErr").innerHTML = err;
        r=0;
    }
    if(cpass==""){
         document.getElementById("cpErr").innerHTML = err;
        r=0;
    }
    if(mail==""){
         document.getElementById("mErr").innerHTML = err;
        r=0;
    }
    if(index==""){
        document.getElementById("inErr").innerHTML = err;
        r=0;
    }
    if(pass != cpass){
         document.getElementById("cpErr").innerHTML = "* password do no match";
        r=0;
    }
    if(r==0){
        return false;
    }
    
}

