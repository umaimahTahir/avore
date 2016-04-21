<html>
<head>
</head>

<body>

<?php

// define variables and set to empty values
$firstname = $firstnameErr = $emailErr = $contactErr =  $genderErr = $websiteErr = "";
$lastname = $lastnameErr = $email = $contact = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
  }



  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["contact"])) {
    $contactErr = "contact is required";
  } else {
    $contact = test_input($_POST["contact"]);
    // check if name only contains letters and whitespace
    if (!preg_match("[0-9]-",$contact)) {
      $contactErr = "numeric values required"; 
    }
  }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }


  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
}

echo "THANK YOU!";
echo $firstname;


?>


<h1 Align ="center">THANK YOU FOR YOUR TIME :D </h1>

</body>
</html>