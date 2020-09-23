<?php

    $conn= new mysqli('172.16.131.125','z_cxz','bvc','z_cxz');

    $sql = "INSERT INTO `pracownicy` (`imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES ('".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";


    mysqli_query($conn, $sql);

    header('location:http://172.16.131.125/spr/z_cxz/1.php')
?>