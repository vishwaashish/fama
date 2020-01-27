function validation(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var msg = document.getElementById("message").value;
    var text;

    if(name.length < 5)
    {
        alert("Please Enter Valid Name.");
       return false;
    }

    if(email.indexOf("@")== -1  || !email.lenght >10 )
    {
        alert("Please Enter a Valid Email.");
        return false;
    }

    if(subject.lenght < 10)
    {
        alert("Subject Should have Max 10 Words.");
        return false;
    }

    if(msg.lenght < 20)
    {
        alert("Subject Should have Max 20 Words.");
        return false;
    } 
 
}

function paraclicked(){
    document.getElementById("submit").setAttribute("style","background:orange");
}
document.getElementById("submit").addEventListener("mouseover",paraclicked);