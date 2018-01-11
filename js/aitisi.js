$(document).ready(function(){
    $("#fake-btn").click(function (e) {
        e.preventDefault();
        $("#stoixeia").html("");
        $(".form-horizontal :input").each( function(e){
            var input = $(this); // This is the jquery object of the input, do what you will
            if(input.attr("type")=="submit"){
                return ;
            }
            var name = input.attr("id");
            var val = input.val();
            // alert($("label[for='"+name+"']").html());
            var label = $("label[for='"+name+"']").html();
            // var label = "name";
            // alert(val);
            $("#stoixeia").append("<p><strong>"+label+" : </strong>"+input.val()+"</p>");
        });

        // $("#theNumber-modal").html(eisfores);
        // $("#afm-modal").html(afm);
        $("#aitisiDone").modal();
    });

    $("#modal-conf").click(function (e) {
        $("#aitisiDone").modal("hide");
    });

});
