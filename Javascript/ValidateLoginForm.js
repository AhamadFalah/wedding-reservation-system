function ValidateLogindata(){
    let username=document.getElementById("username").value;
    let password=document.getElementById("Upassword").value;
    if(username.trim()===""){
        alert("Please username");
        return false;
    }
    else if(password.trim()===""){
        alert("Enter password");
        return false;
    }
    else{
        return true;
    }
}