<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="/login.css">
</head>

<body>
    <div class="box" align="center">
        <div class="content">
            <header>
                <h1>Edit</h1>
                <h2><img src="/image/comateTitleLogo.png"></h2>
            </header>

            <form action="<?= base_url('update_profil'); ?>" method="post">
                <input type="text" name="Username" value="<?php echo $user['Username']; ?>" readonly><br>
                <input type="text" name="FirstName" value="<?php echo $user['FirstName']; ?>" placeholder="First Name"><br>
                <input type="text" name="LastName" value="<?php echo $user['LastName']; ?>" placeholder="Last Name"><br>
                <input type="text" name="JK" value="<?php echo $user['JK']; ?>" placeholder="Jenis Kelamin"><br>
                <input type="text" name="Pekerjaan" value="<?php echo $user['Pekerjaan']; ?>" placeholder="Pekerjaan"><br>
                <input type="text" name="Telephone" value="<?php echo $user['Telephone']; ?>" placeholder="Telephone"><br>
                <input type="text" name="Email" value="<?php echo $user['Email']; ?>" placeholder="Email"><br>
                <input type="submit" id="signin" name="input" value="Simpan">
            </form>
        </div>
    </div>
</body>

</html>