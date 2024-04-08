<?php

// Connection
$conn=mysqli_connect('localhost', 'root', '', 'library');
if (!$conn) {
    die('Connection Fail :' . mysqli_connect_error());
}  
// else{
//     echo "registration success";
// }

?>