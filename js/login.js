var username;
function returnAlert(){
let username = document.getElementById("username").value;
let pass = document.getElementById("pass").value;
if (username === ("admin") && (pass === ("admin"))){
 alert("Login sucessfull");
 document.getElementById("test").style.display = "none";
 document.getElementById("logged").style.display = "inline-block";
 document.getElementById("status").style.display = "inline-block";
 document.getElementById("nostatus").style.display = "none";
 document.getElementById("nologin").style.display = "none";
 document.getElementById("customize").style.display = "inline-block";
}else{
  alert("Invalid username or password");
}
}
function returnCreate(){
let p1 = document.getElementById("p1").value;
let p2 = document.getElementById("p2").value;
 if (p1 === p2){
 alert("Account created sucessfully!");
 }else{
  alert("Confirm the password");
 }
}
function changestatus(){
  let newstatus =  document.getElementById("newstatus").value;
 
  document.getElementById("statustxt").innerHTML = newstatus;
  document.getElementById("statustxt2").innerHTML = newstatus;
  alert("Status sucessfully changed!");
}
  
  