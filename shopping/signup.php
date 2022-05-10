<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sign-up</title>
  <link rel="stylesheet" href="Stylesheet.css">
</head>
<body>
    <?php  
          require_once 'db_connect.php';
    ?>
    <div class="signup_form">
        <form method="post" action="confirm_signup.php">
            <h1 class="title">Sign up</h1>

            <div class="inputContainer">
                <label>Enter Username: </label>
                <input type="text" name="username" placeholder="Enter Name"></label>
            </div>
            <div class="inputContainer">
                <label>Enter Email Address </label>
                <input type="text" name="email" placeholder="Enter Email Address:"></label>
            </div>
            <div class="inputContainer">
                <label>Enter Password: </label>
                <input type="password" name="password" placeholder="Enter Password:"></label>
            </div>
            <div class="inputContainer">
            <label>Confirm Password</label>
  	            <input type="password" name="password_2" placeholder="Re-enter Password:">
            </div>
            <div class="inputContainer">
                <label>Enter Address: </label>
                <input type="text" name="user_address" placeholder="Enter Home Address:"></label>
            </div>
           <!-- <button type="submit" class="btn" name="reg_user">Register</button></br> -->
            <input type ="submit" value="Register" class="btn">

            <p>
                Already a member? <a href="login.php">Login</a></br>
            </p>

        </form>
</div>

</body>
</html>