$(document).ready(function(){
    $("#admin-field").hide();
    $("#user-id-label").hide();
    $("#user-password-label").hide();

    /*  */
    $("#admin-id-label").hide();
    $("#admin-password-label").hide();
    $("#admin-login").css("background", "#7B1113"); 
    $("#alumnus-login").css("background", "white");
    $("#admin-login").css("color", "white"); 
    $("#alumnus-login").css("color", "#7B1113");

    /* input fields of alumnus */
    $("#user-id").on("focus", function(){
        $("#user-id").css('border-radius', '0px').animate('transition', '0.5s');
    });
    $("#user-id").focusout(function(){
       $("#user-id").css('border-radius', '10px').animate('transition', '0.5s'); 
    });
    $("#user-password").on("focus", function(){
        $("#user-password").css('border-radius', '0px').animate('transition', '0.5s');
    });
    $("#user-password").focusout(function(){
       $("#user-password").css('border-radius', '10px').animate('transition', '0.5s'); 
    });
    $("#user-id").on("focus", function(){
        $("#user-id-label").fadeIn();
    });
    $("#user-id").focusout(function(){
        $("#user-id-label").fadeOut();
    });
    $("#user-password").on("focus", function(){
        $("#user-password-label").fadeIn();
    });
    $("#user-password").focusout(function(){
        $("#user-password-label").fadeOut();
    });

    /* input fields of admin */
    $("#admin-id").on("focus", function(){
        $("#user-id").css('border-radius', '0px').animate('transition', '0.5s');
    });
    $("#admin-id").focusout(function(){
       $("#admin-id").css('border-radius', '10px').animate('transition', '0.5s'); 
    });
    $("#admin-password").on("focus", function(){
        $("#admin-password").css('border-radius', '0px').animate('transition', '0.5s');
    });
    $("#admin-password").focusout(function(){
       $("#admin-password").css('border-radius', '10px').animate('transition', '0.5s'); 
    });
    $("#admin-id").on("focus", function(){
        $("#admin-id-label").fadeIn();
    });
    $("#admin-id").focusout(function(){
        $("#admin-id-label").fadeOut();
    });
    $("#admin-password").on("focus", function(){
        $("#admin-password-label").fadeIn();
    });
    $("#admin-password").focusout(function(){
        $("#admin-password-label").fadeOut();
    });

    $("#admin-login").click(function(){ 
        $("#admin-login").css("background", "white"); 
        $("#alumnus-login").css("background", "#7B1113");
        $("#admin-login").css("color", "#7B1113"); 
        $("#alumnus-login").css("color", "white");
        $("#alumnus-field").hide();
        $("#admin-field").show();
    });
    $("#alumnus-login").click(function(){ 
        $("#admin-login").css("background", "#7B1113"); 
        $("#alumnus-login").css("background", "white");
        $("#admin-login").css("color", "white"); 
        $("#alumnus-login").css("color", "#7B1113");
        $("#alumnus-field").show();
        $("#admin-field").hide();
    });
});