<?php

function add_goal($con,$query,$parameterString, $title,$description,$alert,$uid){
        if($con === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
            echo 'Cannot connect to database';
        }
        else{
            $stmt= mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $query))
        {
            print "Failed to prepare statement\n";
        }
        mysqli_stmt_bind_param($stmt, $parameterString, $title,$description,$alert,$uid);
            
        mysqli_stmt_execute($stmt);
 
            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
           return $result;
        
        }
        
        }