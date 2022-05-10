    <?php

    require_once 'db_connect.php';


    $email =  $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password_2"];
    $address = $_POST["user_address"];
    $flag = 0;
 

    if (empty($username)){
        echo '<script>alert("Username is required")</script>';
        $flag = $flag + 1;
    }
    if (empty($email)) {
        echo '<script>alert("Email is required")</script>';
        $flag = $flag + 1;
    }
    if (empty($password)) {
        echo '<script>alert("Password is required")</script>';
        $flag = $flag + 1;
    }
    if ($password != $password2) {
        echo '<script>alert("passwords do not match")</script>';
        $flag = $flag + 1;
    }

    
    // first check the database for users that already exist with the same username or email
    $user_check_query = "SELECT * FROM customertb WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($success, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
      if ($user['username'] === $username) {
        echo '<script>alert("Username is taken")</script>';
        $flag = $flag + 1;
      }
    
      if ($user['email'] === $email) {
        echo '<script>alert("Email is already in use")</script>';
        $flag = $flag + 1;
      }

    if($flag < 1){
        
       // $password = md5($password);//encrypt the password before saving

        $sql = "INSERT INTO `customertb`(`id`, `username`, `user_password`, `email`, `user_address`, `user_level`) VALUES ('','$username','$password','$email','$address','')";
        if(mysqli_query($success, $sql)){
            
        }else{
            echo 'query error: ' . mysqli_error($success);
        }

        echo '<script>alert("Thank you for making an account")</script>';
        echo "<script> location.href='login.php'; </script>";
        exit;

    }else{
        echo "<script> location.href='signup.php'; </script>";
        exit;
    }


    ?>