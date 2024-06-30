<?php

$server = "localhost";
$user = "root";
$password = "password";
$db = "crud";
$conn = mysqli_connect($server,$user,$password,$db);
if($conn){
echo 'Connection Successfully';

}else{
    echo 'Not Connected';
}


?>