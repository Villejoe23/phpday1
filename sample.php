<?php
include('sampleconnection.php');


// $query = "INSERT INTO user (firstname, middlename, lastname) VALUES ('Vergel', 'Maniego', 'Villanueva')";
// mysqli_query ($con, $query);
// $res = mysqli_query ($con, $query);

// if (!$res) {
//     echo "Error";
// }

// $query = "SELECT * FROM user";
// $result = mysqli_query ($con, $query);

// if(mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//         echo $row ['firstname'] . $row ['middlename'] . $row ['lastname'] . '<br>';
//     }

// } else {
//     echo "No Data Found";
// }

// UPDATE
$query = "UPDATE user SET lastname = 'Villanueva' WHERE id = 2";
mysqli_query($con, $query);



?>