<?php

require_once 'db_connect.php';

$username = $_POST["username"];
$password = $_POST["password"];
$flag = 0;


    if (empty($username)) {
        echo '<script>alert("Username is required")</script>';
        $flag = $flag + 1;    
        echo "<script> location.href='login.php'; </script>";
    }
    if (empty($password)) {
        echo '<script>alert("Password is required")</script>';
        $flag = $flag + 1;
        echo "<script> location.href='login.php'; </script>";
    }
    
  
    if ($flag < 1) {
       // $password = md5($password);      //Breaks password check

        $query = "SELECT * FROM customertb WHERE username='$username' AND user_password='$password' ";

        $results = mysqli_query($success, $query);
        
        if (mysqli_num_rows($results) == 1){ 

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
  
            echo '<script>alert(" '. $username .' you are now logged in")</script>';
  
            //$userlevel = "SELECT userlevel FROM customer WHERE username = '$username'";
            $user = mysqli_fetch_assoc($results);
           

            /*    Maybe add this later for an admin page?
            if($user['user_level'] == 1){
              echo "<script> location.href='admin_landing.php'; </script>";
            }
            else{
              */
              echo "<script> location.href='index2.html'; </script>";
            //}
          
        }else {
            echo '<script>alert("Wrong username or password combination")</script>';
            echo "<script> location.href='login.php'; </script>";
          //  exit;

        }
    }
?>