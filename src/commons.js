$(function() {
    getParams = new URLSearchParams(window.location.search)

    $("#header").load("templates/header.html");

    if(getParams.has('after_register')) {
        $("#content").load("templates/after_register.html");
    } else {
        $("#content").load("templates/o_rekolekcjach.html");
    }

    $("#bottom").load("templates/bottom.html");

});

function loadContent(contentName){
    $("#content").load("templates/"+contentName+".html");
}