// navigation toggle button 
$(".toggle").click(function(){
  $("ul").slideToggle();
});



//  caret 

function RT() {
  document.getElementById("none").style.display = "none";
  document.getElementById("subtotal").innerHTML="$150.00";
  document.getElementById("tax").innerHTML="$32.00";
  document.getElementById("total").innerHTML="$182.00";
}

function Shoes() {
  document.getElementById("none1").style.display = "none";
  document.getElementById("subtotal").innerHTML="$125.00";
  document.getElementById("tax").innerHTML="$30.00";
  document.getElementById("total").innerHTML="$155.00";
}

function Greay() {
  document.getElementById("none2").style.display = "none";
  document.getElementById("subtotal").innerHTML="$125.00";
  document.getElementById("tax").innerHTML="$30.00";
  document.getElementById("total").innerHTML="$155.00";
}


// Account



function pritesh(){

  var a=document.getElementById("lname").value;
  var b=document.getElementById("lpass").value;
    

  if(a==""){
    document.getElementById("sluname").innerHTML="Username is required";
    return false;
}
if(b==""){
    document.getElementById("slpass").innerHTML="Passwords is required";
    return false;
}

else{
  document.write("<h1> Congrtulation Your Login Successful </h1>");
}

}

function register() {
  var a= document.getElementById("rname").value;
  var b= document.getElementById("remail").value;
  var c= document.getElementById("rpass").value;

  if(a==""){
    document.getElementById("srname").innerHTML="Username is required";
    return false;
  }

  if(b==""){
    document.getElementById("sremail").innerHTML="Email is required";
    return false;
  }

  if(c==""){
    document.getElementById("srpass").innerHTML="Password is required";
    return false;
  }

  else{
    document.write("<h1> Congrtulation Your Registration Successful </h1>");
  }

}









// var logform = document.getElementById("logform");
// var registerform = document.getElementById("registerform");

// function register(){
//   registerform.style.transform="translateX(0px)";
//   logform.style.transform="translateX(0px)";
// }

// function login(){
//   registerform.style.transform="translateX(300px)";
//   logform.style.transform="translateX(300px)";
// }






var logform = document.getElementById("logform");
var registerform = document.getElementById("registerform");

var back1 = document.getElementById("back1");

  next1.onclick = function(){
    logform.style.left = ("-400px")
    registerform.style.left = ("40px")
  }

  back1.onclick = function(){
    logform.style.left = ("40px")
      registerform.style.left = ("400px")
  }