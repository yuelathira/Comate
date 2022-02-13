<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Materi</title>
    <link rel="stylesheet" href="/login.css">
</head>

<body>
    <div class="box" align="center">
        <div class="content">
            <header>
                <h1>Edit</h1>
                <h2><img src="/image/comateTitleLogo.png"></h2>
            </header>

            <form action="<?= base_url('update'); ?>" method="post">
                <input type="text" name="KodeMateri" value="<?php echo $materi['KodeMateri']; ?>" readonly><br>
                <input type="text" name="NamaMateri" value="<?php echo $materi['NamaMateri']; ?>"><br>
                <input type="text" name="KodeKelas" value="<?php echo $materi['KodeKelas']; ?>"><br>
                <input type="text" name="link" value="<?php echo $materi['link']; ?>"><br>
                <input type="submit" id="signin" name="input" value="Update">
            </form>
        </div>
    </div>
</body>

</html>