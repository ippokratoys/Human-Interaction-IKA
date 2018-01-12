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

    $("#upologismos_dwrou").submit(function (e) {
        e.preventDefault();


        var yearRetired = $("#year-retire").val();
        var suntaksi = $("#avg-misth").val();
        var anapria = $("#anapiria").val();

        var dwro = 0;
        if( 2018 - yearRetired > 2 ){
            dwro = suntaksi * 0.1;
        }else{
            dwro = suntaksi * 0.01;
        }

        if( anapiria>50 ){
            dwro = dwro * 1.1;
        }


        $("#theNumber-modal").html(dwro);
        // $("#afm-modal").html(afm);
        $("#eisforesModal").modal();
    });
});
