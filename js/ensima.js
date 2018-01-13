$(document).ready(function(){
    // $("#name").keyup(enableRegister);
    // $("#surname").keyup(enableRegister);
    // $("#email").keyup(enableRegister);
    // $("#amka").keyup(enableRegister);
    //
    // $("#password").keyup(enableRegister);
    // $("#confirm").keyup(enableRegister);

    $("#ensyma_calc").submit(function (e) {
        e.preventDefault();

        if( $("#afm").val().length<7 ){
            alert("Το ΑΦΜ δεν είναι έγκυρο (πρέπει να έχει περισσότερα απο 6 ψηφία)");
            return false;
        }
        if($("#amka").val().length<7){
            alert("Το ΑΜΚΑ δεν είναι έγκυρο (πρέπει να έχει περισσότερα απο 6 ψηφία)");
            return true;
        }

        var afm = $("#afm").val();
        var amka = $("#amka").val();

        $("#theNumber-modal").html(afm/2%10000);
        $("#afm-modal").html(afm);
        $("#ensimaModal").modal();
    });
});

function disableRegister(withMsg) {
    $("#reg-button").prop('disabled',true);
    if(withMsg===true){
        $("#some-empty").removeClass("hidden");
    }else{
        $("#some-empty").addClass("hidden");
    }
}

function enableRegister() {
    $("#some-empty").removeClass("disabled");
    if($("#name").val()==""){
        disableRegister(true);
        return false;
    }
    if($("#surname").val()==""){
        disableRegister(true);
        return false;
    }
    if($("#email").val()==""){
        disableRegister(true);
        return false;
    }
    if($("#amka").val()==""){
        disableRegister(true);
        return false;
    }
    /*if($("#username").val()==""){
        disableRegister(true);
        return false;
    }*/

    $("#some-empty").addClass("hidden");
    if(checkPass()==false){
        disableRegister(false);
        return false;
    }
    $("#reg-button").prop('disabled',false);
}
