
function completeregistration(){
    let btn=document.getElementById("submitbtn");
    let checkbox=document.getElementById("checkbox1");
    if(checkbox.checked){
        btn.removeAttribute("disabled");
    }
    else{
        btn.disabled=true;
    }
}

function validatevenuecapacity(){
    let venue=document.getElementById("R_venue").value;
    let capacity=parseInt(document.getElementById("R_number").value);
    if(venue=="Grand_Ballroom" && capacity>750){
        alert("Grand ballroom capacity has been reached select a different venue");
        document.getElementById("R_number").classList.add("error");
        return false;
    }
    else if(venue=="GrandLawn" && capacity>2000){
        alert("Grand Lawn capacity has been reached select a different venue");
        document.getElementById("R_number").classList.add("error");
        return false;
    }
    else if(venue=="BeachFront" && capacity>1200){
        alert("Beach Front capacity has been reached select a different venue");
        document.getElementById("R_number").classList.add("error");
        return false;
    }
    else if(venue=="BanquetHall" && capacity>850){
        alert("River Paradise capacity has been reached select a different venue");
        document.getElementById("R_number").classList.add("error");
        return false;
    }
    else{
        return true;
    }
}

function calculateTotalPrice(){
    let venue=document.getElementById("R_venue").value;
    let capacity=parseInt(document.getElementById("R_number").value);
    let package=document.getElementById("R_package").value;
    let venueprice;
    let packageprice;
    let totalprice;
    if(venue=="Grand_Ballroom" && capacity<=750){
        venueprice=250000;
        if(package=="Basic_Package"){
            packageprice=1500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="SilverPackage"){
            packageprice=2500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="GoldPackage"){
            packageprice=3500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="PlatinumPackage"){
            packageprice=4500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
    }
    else if(venue=="GrandLawn" && capacity<=2000){
        venueprice=850000;
        if(package=="Basic_Package"){
            packageprice=1500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="SilverPackage"){
            packageprice=2500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="GoldPackage"){
            packageprice=3500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="PlatinumPackage"){
            packageprice=4500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
    }
    else if(venue=="BeachFront" && capacity<=1200){
        venueprice=750000;
        if(package=="Basic_Package"){
            packageprice=1500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="SilverPackage"){
            packageprice=2500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="GoldPackage"){
            packageprice=3500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="PlatinumPackage"){
            packageprice=4500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
    }
    else if(venue=="BanquetHall" && capacity<=850){
        venueprice=350000.0;
        if(package=="Basic_Package"){
            packageprice=1500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="SilverPackage"){
            packageprice=2500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="GoldPackage"){
            packageprice=3500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
        else if(package=="PlatinumPackage"){
            packageprice=4500;
            totalprice=(venueprice)+(packageprice*capacity);
            document.getElementById("displaytotal").innerHTML="<h1>Rs: "+totalprice+"</h1><br>";
        }
    }
    else{
        document.getElementById("displaytotal").innerHTML="<h1>Invalid choice</h1><br>";
    }
}