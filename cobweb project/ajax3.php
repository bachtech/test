<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
echo '<response>';

$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
//var_dump($name,$email,$phone);
//$name = $phone = $email = "";
$emailErr =  $phoneErr =  $nameErr = "";
//$data = $_GET['data'];
// $Array = explode("^", $data);
// $email = $Array[1];
// $name = $Array[0];
//$phone=$Array[2];

//$vars = array('name' => $name, 'email' => $email,'phone' => $phone );
//$querystring = http_build_query($vars);
//$url = "http://localhost/ajax2.php?" . $querystring;
//

//GET /ajax2.php?name=chgv&email=vkjgh&phone=vkj



if (empty($name)) {
    $nameErr = "Name is required.";
  } else {
//    $name = test_input($name);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed.";
    }
  }
  
  if (empty($email)) {
    $emailErr = "Email is required.";
  } else {
//    $email = test_input($email);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format.";
    }
  }

 if (empty($phone)) {
    $phoneErr = "Phone is required.";
  }else{
//$phone = test_input($phone);
if(!preg_match("/^[0-9]{10}$/", $phone)) {
 $phoneErr = "Invalid phone format.";
}
}

//function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data;
//}

//echo htmlentities($name) . ', have a nice day!';
//echo '</response>';

if (empty($nameErr) && empty($emailErr) && empty($phoneErr)) { 
    echo htmlentities($name).', we will contact you as soon as possible.'; echo '</response>'; 
} 
else{ 
    echo htmlentities($nameErr." ".$emailErr." ".$phoneErr);
    echo '</response>'; } 

?>







<!--
if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
    }
  }

 if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  }else{
$phone = test_input($_POST["phone"]);
if(!preg_match("/^[0-9]{10}$/", $phone)) {
 $phoneErr = "Invalid phone format";
}
}
-->
