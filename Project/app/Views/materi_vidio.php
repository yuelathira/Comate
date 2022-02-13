<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/image/comateTitleLogo.png">
    <title>HTML Introduction</title>
    <link rel="stylesheet" href="/style.css">
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
                    <span><img src="/image/html.png"><a href="/html" <?php if($materi['KodeKelas']=='H001'){?>style="color: blue;"<?php } ?>>HTML</a></span>
                    <span><img src="/image/cpp.png"><a href="/cpp"  <?php if($materi['KodeKelas']=='C001'){?>style="color: blue;"<?php } ?>>C++</a></span>
                </div>
            </nav>
            <footer class="footer">
                <span><img src="/image/profile.png"><a href="<?= base_url('profil/' . $user['Username']) ?>">MY PROFILE</a></span>
                <span><img src="/image/info.png"><a href="/aboutus">ABOUT US</a></span>
                <span><img src="/image/logout.png"><a href="logout">LOGOUT</a></span>
            </footer>
        </div>
        <div class="mainVideo">
            <div class="headmain">
                <div class="head-container">
                    <span class="profil"><img src="/image/profile.png"><a id="anonym" href="<?= base_url('profil/' . $user['Username']) ?>"><?= session('username') ?></a></span>
                </div>
            </div>
            <div class="content">
                <h1 style="margin-left: 5px;"><?= $materi['NamaMateri']; ?></h1>
                <div>
                    <iframe width="560" height="315" src="<?= $materi['link']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>