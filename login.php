<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
<meta charset='UTF-8'>
<title>PC Compatability</title>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='style.css'>
<style>.footercopy{
    font-size:1.2em;
    text-align: center;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {

  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style></style>

<script src=''></script>
<body>
  <header><div class='headertop' style='justify-content: center;'><div class='logo'><a href='index.html'><img src='pcpp-logo.svg'></a></div>

</div>
</header>
<?php
        if(array_key_exists('logout', $_POST)) {
          $_SESSION["rememberme"]=false;
          setcookie("logincookie", "", time()-(60*60*24*7));
            setcookie("Username", "", time()-(60*60*24*7));
            session_unset();
            
        }
    ?>
<?php
if(isset($_SESSION["rememberme"])){
  $rem = $_SESSION["rememberme"];
}
else{
  $rem = false;
}
if(isset($_COOKIE["logincookie"]) && $rem==true){
  $_SESSION["logged_in"]=true;
  $_SESSION["current_user"]=$_COOKIE["Username"];
 
} 
else{
if(array_key_exists('uname', $_POST)){
if(!isset($_SESSION["logged_in"])){
$_SESSION["logged_in"]= true;
$_SESSION["current_user"]=$_POST["uname"];
if(isset($_POST["remember"])){
if($_POST["remember"]){
setcookie("Username",$_POST["uname"]);
setcookie("logincookie",true);
$_SESSION["rememberme"]=true;
}
else{
  $_SESSION["rememberme"]=false;
  setcookie("logincookie", "", time()-(60*60*24*7));
  setcookie("Username", "", time()-(60*60*24*7));
}
}
}
}
}
?>
<?php

if(!isset($_SESSION["logged_in"])){
  echo "
<div class='formwrapper'>
    <div class='pagetitle'><h2>Your Account</h2></div>
    <div class='formdetails'>
        <form action='login.php' method='post'>
          
            <div class='container'>
              <label for='uname'><b>Username</b></label>
              <input type='text' placeholder='Enter Username' name='uname' required>
          
              <label for='psw'><b>Password</b></label>
              <input type='password' placeholder='Enter Password' name='psw' required>
                  
              <button type='submit'>Login</button>
              <label>
                <input type='checkbox' checked='checked' name='remember'> Remember me
              </label>
            </div>
          
            <div class='container' >
              <span class='psw'> <a href='#'>Forgot password?</a></span>
              <p><span class='psw'> <a href='register.html'>Don't have an account? Register here</a></span></p>
            </div>
          </form>
    </div>

</div>
";
}
else{
  echo "You are already Logged In"; 
echo "<p>User: ";
    echo $_SESSION["current_user"]; 
echo"
<form method='post'>
<input type='submit' name='logout'
        value='Log out'/>
       
</form>
";
}

?>
<footer style='    background-color: black;
padding: 2em;position: absolute;
    bottom: 0;
    right: 0;
    left: 0;'>
    <div class='footerdetails'>
        <nav><ul class='footerlinks unstyled-list'>
            <li><a href='index.html'>Home</a></li>
            <li><a href='#'>System Builder</a></li>
            <li><a href='#'>Products</a></li>
        </ul></nav>
        <h3 class='footercopy'>&copy; Copyright 2022 PCPartsCompatability</h3>
    </div>
</footer>
</body>
</html>