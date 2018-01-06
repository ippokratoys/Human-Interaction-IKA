$(document).ready(function(){

    $("#wrapper").toggleClass("toggled");
    $("#main-cont").css("padding-top",$(".navbar-default").height());
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

});
