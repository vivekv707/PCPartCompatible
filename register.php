<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>PC Compatability</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>.footercopy{
    font-size:1.2em;
    text-align: center;
}
input[type=text], input[type=password],input[type=email] {
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
.error{
    color:red;
}
</style>

<script src="script.js" defer></script>
<body>
<?php
// define variables and set to empty values
$unameErr = $uemailErr = $pswErr =  "";
$uname = $uemail = $psw1 = $psw2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $unameErr = "Name is required";
  } else {
    $uname = test_input($_POST["uname"]);
  }

  if (empty($_POST["uemail"])) {
    $uemailErr = "Email is required";
  } else {
    $uemail = test_input($_POST["uemail"]);
    if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
        $uemailErr = "Invalid email format";
      }
  }

  if (empty($_POST["psw1"])) {
    $pswErr = "Password cannot be empty";
  } else {
    $psw = test_input($_POST["psw1"]);
  }

  if (empty($_POST["psw2"])) {
    $pswErr = "Password cannot be empty";
    
  }
  elseif(strcmp($_POST["psw1"],$_POST["psw2"])!=0){
        $pswErr="Password should be same";
    
  }
  else {
    $psw2 = test_input($_POST["psw2"]);
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
  <header><div class="headertop" style="justify-content: center;"><div class="logo"><a href="index.html"><img src="pcpp-logo.svg"></a></div>

</div>
</header>
<div class="formwrapper">
    <div class="pagetitle"><h2>Create An Account</h2></div>
    <div class="formdetails">
        <form name="reg"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          
            <div class="container">
              <label for="uname"><b>Username</b></label><span class="error">* <?php echo $unameErr;?></span>
              <input type="text" placeholder="Enter Username" name="uname" class="un">

              <label for="uemail"><b>Email</b></label><span class="error">* <?php echo $uemailErr;?></span>
              <input type="email" placeholder="Enter your Email" name="uemail" class="un">
          
              <label for="psw"><b>Password</b></label><span class="error">* <?php echo $pswErr;?></span>
              <input type="password" placeholder="Enter Password" name="psw1"  class="un">
              <input type="password" placeholder="Enter Password Again" name="psw2" class="un">
                  
              <button type="submit">Register</button>
              
            </div>
          
            <div class="container" >
              <span class="psw"> <a href="login.html">Already have an Account? Sign in here</a></span>
            </div>
          </form>
    </div>

</div>
<footer style="    background-color: black;
padding: 2em;">
    <div class="footerdetails">
        <nav><ul class="footerlinks unstyled-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">System Builder</a></li>
            <li><a href="#">Products</a></li>
        </ul></nav>
        <h3 class="footercopy">&copy; Copyright 2022 PCPartsCompatability</h3>
    </div>
</footer>
</body>
</html>