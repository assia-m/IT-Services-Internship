$('document').ready(function(){


// <!-- script for light and dark mode on home page -->
$("#dark-mode").click(function(){ 
        $('#dark-mode').hide();
        $('#normal-mode').show().css('float', 'left');
        $(".wrapper").css("background-color", "#383c3c");
        $(".navbar.navbar-inverse").css("background-color", "#00bdaa");
        $(".navbar-collapse").css("background-color", "#00bdaa");
        $(".heading").css("color", "white");
        $(".main_footer").css("background-color", "#222525");
});


$("#normal-mode").click(function(){  
        $('#normal-mode').hide();
        $('#dark-mode').show();
        $(".wrapper").css("background-color", "white");
        $(".navbar.navbar-inverse").css("background-color", "#383c3c");
        $(".navbar-collapse").css("background-color", "#383c3c");
        $(".heading").css("color", "black");
});




// <!-- script for light and dark mode on services page -->
$("#dark-mode-services").click(function(){ 
        $('#dark-mode-services').hide();
        $('#normal-mode-services').show().css('float', 'right');
        $(".wrapper").css("background-color", "#383c3c");
        $(".navbar.navbar-inverse").css("background-color", "#00bdaa");
        $(".navbar-collapse").css("background-color", "#00bdaa");
        $("#heading").css("color", "white");
        $(".main_footer").css("background-color", "#222525");
        $(".navbar-inverse.navbar-nav>li>a").css("color", "white");
});


$("#normal-mode-services").click(function(){  
        $('#normal-mode-services').hide();
        $('#dark-mode-services').show();
        $(".wrapper").css("background-color", "white");
        $(".navbar.navbar-inverse").css("background-color", "#383c3c");
        $(".navbar-collapse").css("background-color", "#383c3c");
        $("#heading").css("color", "black");
});









});