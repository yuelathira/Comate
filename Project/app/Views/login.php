<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="box" align="center">
        <div class="content">
            <header>
                <h1>Sign In</h1>
                <h2><img src="image/comateTitleLogo.png"></h2>
            </header>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                </div>
            <?php endif; ?>

            <form action="/" method="post">
                <input type="text" name="username" placeholder="Username"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <div class="remember">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" id="remember">Remember me</label>
                </div>
                <?php if (isset($validation)) : ?>
                    <div>
                        <div style="background-color:pink">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <input type="submit" id="signin" name="signin" value="Sign In">
            </form>

            <footer>
                Don't have an account? <a href="/register">Sign Up</a>
            </footer>
        </div>
    </div>
    <script>
        src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
    </script>
    <script>
        src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    </script>
    <script>
        src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    </script>
</body>

</html>