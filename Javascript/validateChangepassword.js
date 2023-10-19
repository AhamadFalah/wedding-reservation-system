function checkpassword(){
    let password1 = document.getElementById("pass1").value;
    let password2 = document.getElementById("pass2").value;
    if(password1 != password2){
        alert(" Password Mismatch!");
        return false;
    }
    else{
        alert("Success!");
        return true;
}
}