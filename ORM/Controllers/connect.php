<?php
$conn = mysqli_connect("localhost","root","","kinopoisk");
if($conn->connect_error)
{
    echo "error";
}
else{
    echo "connect";
}
?>