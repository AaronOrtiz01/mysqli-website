<?php
    $success = mysqli_connect('mysql.junpar21.dreamhosters.com', 'shopping6333', '123456789', 'shopping6333');

    if(!$success){
        echo 'Connection Error: ' . mysqli_connect_error(); 
    }
?>