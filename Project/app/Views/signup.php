<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="box" align="center">
        <div class="content">
            <header>
                <h1>Sign Up</h1>
                <h2><img src="image/comateTitleLogo.png"></h2>
            </header>

            <form action="/register" method="post">
                <input type="text" name="firstname" placeholder="Firstname"><br>
                <input type="text" name="lastname" placeholder="Lastname"><br>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="password" name="password_confirm" placeholder="Confirm Password" required><br>
                <?php if (isset($validation)) : ?>
                    <?= $validation->listErrors() ?>
                <?php endif; ?>
                <input type="submit" id="signin" name="signup" value="Sign Up">
            </form>

            <footer>
                Already have an account? <a href="/">Sign In</a>
            </footer>
        </div>
    </div>
</body>

</html>