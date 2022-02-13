<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/image/comateTitleLogo.png">
    <title>Profile</title>
    <link rel="stylesheet" href="/profil.css">
</head>

<body>
    <div class="container">
        <div class="navigasi">
            <h1><img src="/image/comatelogo.png"></h1>
            <nav>
                <div class="headnav">
                    <img src="/image/course.png">CLASS
                </div>
                <div class="nav">
                    <span><img src="/image/html.png"><a href="/html">HTML</a></span>
                    <span><img src="/image/cpp.png"><a href="/cpp">C++</a></span>
                </div>
            </nav>
            <footer class="footer">
                <span><img src="/image/profile.png"><a href="<?= base_url('profil/' . $user['Username']) ?>" style="color: blue;">MY PROFILE</a></span>
                <span><img src="/image/info.png"><a href="/aboutus">ABOUT US</a></span>
                <span><img src="/image/logout.png"><a href="/logout">LOGOUT</a></span>
            </footer>
        </div>
        <div class="main">
            <div class="headmain">
                <div class="head-container">
                    <span class="profil"><img src="/image/profile.png"><a id="anonym" href="<?= base_url('profil/' . $user['Username']) ?>"><?= $user['Username'] ?></a></span>
                </div>
            </div>
            <div class="content">
                <h1 style="margin-left: 5px;">MY PROFILE</h1>
                <div align="center" class="profil-foto">
                    <h3><img src="/image/profile.png"></h3>
                    <p style="color:#fff">HELLO!</p>
                </div>
                <div align="center" class="profil-data">
                    <table>
                        <tr>
                            <td class="data">Username</td>
                            <td><input type="text" name="username" value="<?php echo $user['Username']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="data">First Name</td>
                            <td><input type="text" name="FirstName" value="<?php echo $user['FirstName']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="data">Last Name</td>
                            <td><input type="text" name="LastName" value="<?php echo $user['LastName']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="data">Jenis Kelamin</td>
                            <td><input type="text" name="JK" value="<?php echo $user['JK']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="data">Pekerjaan</td>
                            <td><input type="text" name="Pekerjaan" value="<?php echo $user['Pekerjaan']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="data">Telephone</td>
                            <td><input type="text" name="Telephone" value="<?php echo $user['Telephone']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="data">Email</td>
                            <td><input type="text" name="Email" value="<?php echo $user['Email']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="edit"><a href="<?= base_url('edit_profil/' . $user['Username']) ?>"><input type="submit" name="edit" value="Edit Profile"></td></a>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>