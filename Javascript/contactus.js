function validateForumData(){
    let name=document.getElementById("contact_name").value;
    let email=document.getElementById("contact_email").value;
    if(name.trim()===""){
        alert("Input name please");
        return false;
    }
    else if(email.trim()===""){
        alert("Input email please");
        return false;
    }
    else{
        return true;
    }
}

function generateAnswer(){
    let question=document.getElementById("QAquestion").value;
    if(question=="How many venues offered by the hotel?"){
        document.getElementById("answer").innerHTML="<h1> Answer:"+4+"</h1><br>";
    }
    else if(question=="How many staff available?"){
        document.getElementById("answer").innerHTML="<h1> Answer:"+350+"</h1><br>";
    }
    else if(question=="What is the best venue offered by the hotel?"){
        document.getElementById("answer").innerHTML="<h1> Answer:Grand Ballroom </h1><br>";
    }
    else if(question=="What is the best package?"){
        document.getElementById("answer").innerHTML="<h1> Answer:Platinum package</h1><br>";
    }
    else if(question=="Who is the price of the basic package per person?"){
        document.getElementById("answer").innerHTML="<h1> Answer:1000 per person </h1><br>";
    }
    else if(question=="Are there are any special rates offered to the room when booking a hotel?"){
        document.getElementById("answer").innerHTML="<h1> Answer:Yes,20% off on rooms per day</h1><br>";
    }
    else if(question=="What is the venue which offeres the highes capacity?"){
        document.getElementById("answer").innerHTML="<h1> Answer:Grand lawn offers the capacity for 3000 people</h1><br>";
    }
    else if(question=="How many packages offered by the hotel?"){
        document.getElementById("answer").innerHTML="<h1> Answer:"+4+"</h1><br>";
    }
    else{
        document.getElementById("answer").innerHTML="";
    }
}