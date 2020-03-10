<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
</head>
<body>
<div class="container">
        <div class="header">
            <h2>Log in</h2>

        </div>
        <form action="login.php" method="POST">
<!-- input field for username -->
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required autocomplete="off">
            </div>
<!-- input field for password -->
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required autocomplete="off">
            </div>
<!-- submit button -->
            <button type="submit" name="login_user">Log in</button>
<!-- link to register.php -->
            <p>Not a user? <a href="registration.php"><b>Register here</b></a></p>
        </form>
    </div>
</body>
</html>