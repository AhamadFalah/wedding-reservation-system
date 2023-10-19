function validateUserCredentails(){
let name=document.getElementById("fname").value;
let email=document.getElementById("email").value;
let username=document.getElementById("username").value;
let password=document.getElementById("pwd1").value;
let confirmpassword=document.getElementById("pwd2").value;
if(name.trim()===""){
    alert("Please enter your name");
    return false;
}
else if(username.trim()===""){
    alert("Please enter a username");
    return false;
}
else if(email.trim()===""){
    alert("Plese enter your email");
    return false;
}
else if(password.lenght<7){
    alert("Please enter a password with minimum 7 characters");
}
else if(password!=confirmpassword){
    alert("Passwords do not match enter again");
    return false;
}
else{
    return true;
}

}