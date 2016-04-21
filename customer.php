<html>
<head>

<style>


<link rel="stylesheet" type"text/css" href="style.php"/>
.error{color:#FF000;}

//body {background-color: #F08080;}

p { font-family: courier;
     font-size: 120%; 

background-size= 300px  300px;
}
</style>

<body background="back.jpg"  >

</head>

<body>
<h2 align ="center">Customer Information</h2>


   <div


<p>hello world!</p>

<form method="post" action="custdata.php"> 
<table align="center" border="0">



<tr>
<td align="right"><p>First Name:</p></td>
<td align="center"><input type="text" name="firstname" size="30"/> 
<span class="error">*<?php echo $nameErr;?></span><br><br></td>
</tr>


<br>
<br>
<br>

<tr>
<td align="right"><p>Last Name:</p></td> 
<td align="center"><input type="text" name="lastname" size="30"/><br><br></td>
</tr>



<tr>
<td align="right"><p>E-mail:</p></td>
<td align="center"><input type="text" name="email" size="30"/><br><br></td>
</tr>



<tr>
<td align="right"><p>Contact:</p></td>
<td align="center"><input type = "text" name="contact" size="30"/><br><br></td>
</tr>


<tr>
<td align="right"><p>Mailing Address:</p></td>
<td><div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
<td align="center"><input type="text" name="address" size="40"/><br><br></td>
</tr>



<tr>
<td align="right"><p>Gender:</p><br><br></td>
<td><p><input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male</p><br><br></td>
</tr>

<tr>
<td align="right"><input type="submit"/></td>
</tr>

<tr>
<td align="right"><input type="reset"/></td>
</tr>

</form>



</body>