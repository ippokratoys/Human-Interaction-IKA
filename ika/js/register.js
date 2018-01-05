$(document).ready(function(){
    $("#name").keyup(enableRegister);
    $("#surname").keyup(enableRegister);
    $("#email").keyup(enableRegister);
    $("#username").keyup(enableRegister);
    $("#password").keyup(enableRegister);
    $("#confirm").keyup(enableRegister);
});

function disableRegister(withMsg) {
    $("#reg-button").addClass('disabled');
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
    if($("#username").val()==""){
        disableRegister(true);
        return false;
    }

    $("#some-empty").addClass("disabled");
    if(checkPass()==false){
        disableRegister(false);
        return false;
    }
    $("#reg-button").removeClass('disabled');
}

function checkPass() {
    if ($("#password").val().length<7) {
        $("#small-pass").removeClass("hidden");
        return false;
    }
    $("#small-pass").addClass("hidden");

    if($("#password").val()==$("#confirm").val()){
        $("#not-matching").addClass("hidden");
        return true;
    }else{
        $("#not-matching").removeClass("hidden");
        return false;
    }
}
