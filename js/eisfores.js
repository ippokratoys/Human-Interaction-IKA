$(document).ready(function(){
    $("#ensyma_calc").submit(function (e) {
        e.preventDefault();


        var young = $("#neoi").val();
        var old = $("#num-upal").val();
        var salary = $("#avg-misth").val();

        var eisfores = 0;
        eisfores = (young + old)* salary *0.1;

        $("#theNumber-modal").html(eisfores);
        // $("#afm-modal").html(afm);
        $("#eisforesModal").modal();
    });
});
