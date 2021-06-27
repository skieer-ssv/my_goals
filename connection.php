<?php

    $con=mysqli_connect('localhost','root','','sql');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>