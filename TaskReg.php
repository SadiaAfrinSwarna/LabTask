<?php 
    $validatename="";
    $validateemail="";
    $validatecheckbox="";
    $validateradio="";
    $validategender="";
    $v1=$v2=$v3="";
 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $name=$_REQUEST["fname"];
      $email=$_REQUEST["email"];
 
      if(empty($name) || strlen($name) < 3) {
          $validatename="you must enter valid name";
      } else {
          $validatename="your name is ".$name;
      }
 
      if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
          $validateemail="your must enter valid email";
      } else {
          $validateemail="your email is ".$email;
      }
 
      if(!isset($_REQUEST["gender"])) {
        $validategender="Please select your gender";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title> Exercise </title>
</head>
<body>
<h1>REGISTRATION </h1>
 
<form>
  <label>Name           :</label>
  <input type="text" id="fname" name="fname"><br><br>
 
  <label>Email          :</label>
  <input type="text" id="lname" name="lname"><br><br>
 
  <label>User name         :</label>
  <input type="text"><br><br>
 
  <label>Password         :</label>
  <input type="text"><br><br>
 
  <label>Confirm Password         :</label>
  <input type="text"><br><br>
 
  <label>Gender         :</label><br><br>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="Male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="Female">Female</label>
  <input type="radio" id="other" name="gender" value="Other">
  <label for="Other">Other</label><br><br>
 
  <label>Date of Birth</label><br><br>
  <input type="date"><br><br>
 
  <input type="submit" value = "SUBMIT"> 
  <input type="reset" value = "RESET">
 
</form>
 
</body>
</html>