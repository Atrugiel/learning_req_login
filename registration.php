<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
<div class="container">
        <div class="header">
            <h2>Register</h2>

        </div>
        <form action="registration.php" method="POST">
            <?php include('errors.php') ?>
<!-- input field for username -->
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" required autocomplete="off">
            </div>
<!-- input field for email -->
            <div>
                <label for="email">Email: </label>
                <input type="text" name="email" required autocomplete="off">
            </div>
<!-- input field for password -->
            <div>
                <label for="password_1">Password: </label>
                <input type="password" name="password_1" required autocomplete="off">
            </div>
<!-- input field for confirm password -->
            <div>
                <label for="password_2">Confirm password: </label>
                <input type="password" name="password_2" required autocomplete="off">
            </div>
<!-- the submit button to send the data from the fields to the database -->
            <button type="submit" name="reg_user">Submit</button>

            <p>Already a user? <a href="login.php"><b>Log in</b></a></p>
        </form>
    </div>
</body>
</html>