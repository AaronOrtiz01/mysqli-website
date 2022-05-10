<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheet.css">
    <title>login</title>
</head>
<body>
    <div class="signup_form">
        <form method="post" action="confirm_login.php">
        <h1 class="title">Login</h1>

        <div class="inputContainer">
            <label>Enter Username: </label>
            <input type="text" name="username" placeholder="Enter Name"></label></br>
        </div>
        <div class="inputContainer">
            <label>Enter Password: </label>
            <input type="password" name="password" placeholder="Enter Password:"></label></br>
        </div>
            <button type ="submit" value="login" class="btn">Login</button>

            <p>
                Need an account? <a href="signup.php">Sign up</a></br>
            </p>

        </form>
    </div>

</br>
</body>
</html>