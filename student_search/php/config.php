<?php
    $conn = mysqli_connect("localhost", "root", "", "siswa");

    if(!$conn){
        echo 'Not Connected Database' .mysqli_connect_error();
    }

?>