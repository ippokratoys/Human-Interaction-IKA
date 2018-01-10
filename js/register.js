$(document).ready(function(){
    $("#name").keyup(enableRegister);
    $("#surname").keyup(enableRegister);
    $("#email").keyup(enableRegister);
    $("#amka").keyup(enableRegister);
    
    $("#password").keyup(enableRegister);
    $("#confirm").keyup(enableRegister);
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
