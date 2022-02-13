<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/comateTitleLogo.png">
    <title>C++ Course</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="navigasi">
            <h1><img src="image/comatelogo.png"></h1>
            <nav>
                <div class="headnav">
                    <img src="image/course.png">CLASS
                </div>
                <div class="nav">
                    <span><img src="image/html.png"><a href="/html">HTML</a></span>
                    <span><img src="image/cpp.png"><a href="/cpp" style="color: blue;">C++</a></span>
                </div>
            </nav>
            <footer class="footer">
                <span><img src="image/profile.png"><a href="<?= base_url('profil/' . $user['Username']) ?>">MY PROFILE</a></span>
                <span><img src="image/info.png"><a href="/aboutus">ABOUT US</a></span>
                <span><img src="image/logout.png"><a href="logout">LOGOUT</a></span>
            </footer>
        </div>
        <div class="main">
            <div class="headmain">
                <div class="head-container">
                    <span class="input">
                        <?php
                        if (session('username') == 'adminuser') {
                        ?>
                            <a href="/input">
                                <input type="submit" name="edit" value="Input Materi" style="background-color:mediumblue; color: white">
                            </a>
                        <?php
                        }
                        ?>
                    </span>
                    <span class="profil"><img src="image/profile.png"><a id="anonym" href="<?= base_url('profil/' . $user['Username']) ?>"><?= session('username') ?></a></span>
                </div>
            </div>
            <div class="content">
                <h1 style="margin-left: 5px;">COURSE C++</h1>
                <table>
                    <?php $no = 1;
                    foreach ($materi as $row) : ?>
                        <td align="center" style="padding: 20px">
                            <a href="<?= base_url('vidio/' . $row['KodeMateri']) ?>"><span><img class="materiLogo" src="image/Materi.png"><?= $row['NamaMateri']; ?></span></a>
                            <?php
                            if (session('username') == 'adminuser') {
                            ?>
                                <table align="center">
                                    <tr>
                                        <td>
                                        <td>
                                            <a href="<?= base_url('edit/' . $row['KodeMateri']) ?>">
                                                <input type="submit" value="Edit" style="background-color: lawngreen;">
                                            </a>
                                        </td>
                                        <td>
                                            <a onclick="return confirm('Apakah yakin, akan menghapus record ini ?');" href="<?= base_url('delete/' . $row['KodeMateri']) ?>">
                                                <input type="submit" value="Hapus" style="background-color: Red; color: white">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            <?php
                            }
                            ?>
                        </td>

                        <?php $no++;
                        if ($no % 3 == 1) {
                        ?>
                            <tr></tr>
                    <?php                         }
                    endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>