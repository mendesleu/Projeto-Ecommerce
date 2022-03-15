<?php

$conn = mysqli_connect('localhost', 'root', '');
$bd = mysqli_select_db($conn, 'ecommerce');

// if($conn == true){
//     echo 'ok';
// }else{
//     echo $conn -> error;
// }