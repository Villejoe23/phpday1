<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment3</title>
</head>
<body>



<form action="assignment3.php" method="post">
    <input type="text" name="firstname" placeholder= "Firstname" required> <br>
    <input type="text" name="middlename" placeholder= "Middlename" required> <br>
    <input type="text" name="lastname" placeholder= "Lastname" required> <br>
    <input type="email" name="email" placeholder= "Email" required> <br>
    <input type="sex" name="sex" placeholder= "Sex" required> <br>
    <input type="password" name="password" placeholder= "password" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,12}$" required> </input><br> <br>
    <input type="password" placeholder="confirm password" name="confirm_pass" id="confirm_pass" required> <br> <br>
    <input type="submit" name="submit" value= "Submit"> <br> <br>
    <input type="reset"> <br> <br>

    
</form>


<?php

if (isset($_POST['submit']))
{

    $firstname= test_input ($_POST['firstname']);
    $middlename= test_input ($_POST['middlename']);
    $lastname= test_input ($_POST['lastname']);
    $gender= test_input ($_POST['gender']);
    $email= test_input ($_POST['email']);
    $password= test_input ($_POST['password']);
    $confirm_pass= test_input ($_POST['confirm_pass']);

if ($password != $confirm_pass){
    echo "Password not match";
    return;
}   else{
    echo $firstname. " " . $middlename . " " . $lastname. "<br>";
    echo $email. "<br>";
    echo "Congrats, you are now registered";
    return; 
}   
}

function test_input($data){
$data = trim($data); //remove all tabs, spaces
$strips = stripslashes($data); //removes slashes(backslash)
$data = htmlspecialchars($data); //removes all scripts


    return $data;


}
?>
</body>
</html> 