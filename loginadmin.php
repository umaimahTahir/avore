<!doctype html>
<?php

include 'core/init.php';
echo "connected";
?>
<html>




<head>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
body {
    background : back1.jpg no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}



.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}
H1 {text-align:center;}
h1 {color:Snow;}
H4 {text-align:center;}
h4 {color:Snow;}
p {text-align:center;color:tomato;}
</style>




</head>





<body>

<div id="container">
<div id="logo">
<a href="https://www.avore.com.pk/" target="_blank" Avore-Decorating Lives><img src="aadd.jpg" alt="logo1" height="250" width="200" ></a>
</div>

<br>
<font size="4"> &nbsp &nbsp &nbsp &nbsp login/register </font>
<br><br><br>

<font size="4">shop &nbsp &nbsp blog &nbsp &nbsp about us &nbsp &nbsp contact us</font>
<br><br>

<header>
<div id="header">

<br><br>
<div id="heading">
    <h1><center><b>Login</b></center></h1> 
    <h4><center>Enter Username and Password</center></h4>
	<h4><center>If you dont have an account, <a href = "registeradmin.php">Register Now<a></center></h4>
</div>
</div>

</header>

<div id="form1">
<form method="post" action="login.php"> 

Username: 
<input type="text" name="username" size="40"/><br><br>
password: 
<input type="password" name="password" size="40"/><br><br>

<br><br><br>
<input type="submit" value="login"/>
<input type="reset" value="reset"/>
</form>

    </div>

    </div>
    



<br>
<br>

<?php 
    
    
if($_SESSION["loggedin"]){
    echo "<h1>logged in</h1>";
}
    else{echo "not logged in";}
    
?>

<?php include 'includes/footer.php';  ?>

</body>


</html>

