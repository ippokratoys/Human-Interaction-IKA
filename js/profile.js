$(document).ready(function(){

    $("#wrapper").toggleClass("toggled");
    $("#main-cont").css("padding-top",$(".navbar-default").height());
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    // var $inputs = $('#myForm :input');
    $("#my-infos :input").each(function(){
        var input = $(this); // This is the jquery object of the input, do what you will
        // if(input.attr("type")!="submit"){
            var name = input.attr("name");
            input.addClass("hidden");
            $("#"+name+"-txt").html(input.val());
            $("#"+name+"-txt").removeClass("hidden");
        // }
    });

    $("#edit-infos").click(function(e){
        $("#edit-infos").addClass("hidden");
        $("#my-infos :input").each(function(){
            var input = $(this); // This is the jquery object of the input, do what you will
            var name = input.attr("name");
            input.removeClass("hidden");
            $("#change-info").removeClass("hidden");
            $("#"+name+"-txt").addClass("hidden");
        });

    });

});
