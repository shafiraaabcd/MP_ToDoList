<?php
//                      HOST   username pswrd  nama database
$conn=mysqli_connect('localhost','root','','list_todo');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

