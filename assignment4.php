<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>Assignment 4</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php


?>
<form action="functionassignment4.php" method="post">
<input type="text" name="FirstName" placeholder="First Name" required> </input> <br>
<input type="text" name="MiddleName" placeholder="Middle Name" required> </input> <br>
<input type="text" name="LastName" placeholder="Last Name" required> </input> <br>
<input type="email" name="Email" placeholder="Email" required> </input> <br>
<input type="password" placeholder="Password" name="Password"  required> </input><br> <br> 
<input type="password" placeholder="Confirm Password" name="psw_repeat" id="psw_repeat" required> <br> <br>
<input type="Submit" name="Confirm" value="Confirm"> <br> <br>
<input type="reset" name="Reset"> <br> <br>
<!-- <button type="submit">Login</button> -->
</form>


<?php

// if (isset($_POST['Confirm'])){
    
// $FirstName= test_input ($_POST['FirstName']);
// $MiddleName= test_input ($_POST['MiddleName']);
// $LastName= test_input ($_POST['LastName']);
// $Email= test_input ($_POST['Email']);
// $Password= ($_POST['Password']);
// $psw_repeat= ($_POST['psw_repeat']);
 
// if ($Password != $psw_repeat){
//     echo "Your password does not match!!!";
//     return;
// }
// else {
//     echo $FirstName. " " .$MiddleName . " " . $LastName. "<br>";
//     echo $Email."<br>";
//     echo "Congratulations!!! You are registered!";
//     return;
// }
// // echo $password;
// }

// function test_input ($data){
//     $data = trim($data); //remove all tabs, spaces
//     $strips = stripslashes($data); //removes slashes(backslash)
//     $data = htmlspecialchars($data); //removes all scripts

//     return $data;
// }
?>

</body>
</html>
