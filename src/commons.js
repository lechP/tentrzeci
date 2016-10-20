$(function() {
    var isAfterRegister = getUrlParameter('after_register');
    $("#header").load("templates/header.html");

    if(isAfterRegister) {
        $("#content").load("templates/after_register.html");
    } else {
        $("#content").load("templates/o_rekolekcjach.html");
    }

    $("#bottom").load("templates/bottom.html");

});

function loadContent(contentName){
    $("#content").load("templates/"+contentName+".html");
}

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};