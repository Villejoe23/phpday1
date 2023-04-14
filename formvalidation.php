<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formvalidation</title>
</head>
<body>




<form action="formvalidation.php" method="post">
    Name: <input type="text" name="name"> <br> <br>
    Email: <input type="email" name="email"> <br> <br>
    Age: <input type="number" name="age"> <br> <br>
    Sex:
    <input type="radio" name="sex" value="male"> Male <br>
    <input type="radio" name="sex" value="female"> Female <br>
    <input type="submit" name="clik">

</form>


<?php

if (isset($_POST['clik']))
{

    $name= test_input ($_POST['name']);
    $email= test_input ($_POST['email']);
    $age= test_input ($_POST['age']);
    $sex= test_input ($_POST['sex']);


echo $name. "<br>";
echo $email. "<br>";
echo $age. "<br>";
echo $sex. "<br>";

}else{

    echo "No data entered.";
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