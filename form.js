// document.getElementById("from").addEventListener("submit",mysubmitfunction);
// function mysubmitfunction(event) {
//     console.log("myfunction called");
//     alert("from submitted");
// }
// document.getElementById("from").addEventListener("submit", myFunction);

function myFunction(event) {
    var validfrom=true;
    
    // event.preventDefault()
  alert("The form was submitted"+document.getElementById("username").value +document.getElementById("pass").value);

var username=document.getElementById("username").value ;
if (username=="") {
    validfrom=false;
    document.getElementById("username_error").innerHTML="<h6>PLEASE ENTER USERNAME</h6>";
}
else{
    document.getElementById("username_error").innerHTML="<h6>VALID USERNAME</h6>";
}
var password=document.getElementById("pass").value;
var passwordlength=password.length;
if (passwordlength<=5) {
    validfrom=false;
    document.getElementById("password_error").innerHTML="<h6>PLEASE ENTER A VALID PASSWORD</h6>";
    
}
else{
    document.getElementById("password_error").innerHTML="<h6>VALID PASSWORD</h6>";
}
// if (password=="") {
//     document.getElementById("password_error").innerHTML="<h6>PLEASE ENTER PASSWORD</h6>";
    
// }
// else{
//     document.getElementById("password_error").innerHTML="<h6>VALID PASSWORD</h6>";

// }
if (validfrom) {
  //  document.getElementById("from").submit();
}

console.log(validfrom)

return validfrom;

}