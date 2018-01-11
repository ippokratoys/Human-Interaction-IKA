$(document).ready(function(){
    $("#fake-btn").click(function (e) {
        e.preventDefault();

        // $("#theNumber-modal").html(eisfores);
        // $("#afm-modal").html(afm);
        $("#aitisiDone").modal();
    });

    $("#modal-conf").click(function (e) {
        $("#aitisiDone").modal("hide");
    });

});
