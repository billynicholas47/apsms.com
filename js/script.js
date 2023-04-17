function validateForm()
{
var u_name=document.getElementById("username").value.trim();
var u_pass=document.getElementById("password").value.trim();

if(u_name==""||u_pass=="")
{
alert("Incorrect Username or Password!!!")
return false;
}
return true;
}