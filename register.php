<?php 

include 'core/init.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname  = test_input($_POST["lastname"]);
  $password  = test_input($_POST["password"]);
  $email     = test_input($_POST["email"]);
  $contact   = test_input($_POST["contact"]);
  $username  = test_input($_POST["username"]);
  $address   = test_input($_POST["address"]);
  $gender    = test_input($_POST["gender"]);
}

$list=array($firstname,$lastname,$password,$email,$contact,$username,$address,$gender);


$arrlength = count($list);

for($x = 0; $x < $arrlength; $x++) {
    echo $list[$x];
    echo "<br>";
}

$sql= "INSERT INTO `customer`(`firstname`, `lastname`, `email`, `password`, `address`, `username`, `status`,`gender`) VALUES ( '$firstname','$lastname','$email','".md5($password)."','$address','$username',0,'$gender')";

    
    $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
    else{
    echo "data entered";
    $_SESSION["registered"]=true;
    header('Location:index.php');
    }
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>