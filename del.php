<?php

    $conn= new mysqli('172.16.131.125','z_cxz','bvc','z_cxz');

    $sql = "DELETE FROM `pracownicy` WHERE id_pracownicy=".$_POST['id']."";


    mysqli_query($conn, $sql);

    header('location:http://172.16.131.125/spr/z_cxz/1.php')
?>