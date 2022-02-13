<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Materi</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="box" align="center">
        <div class="content">
            <header>
                <h1>Input Materi</h1>
                <h2><img src="image/comateTitleLogo.png"></h2>
            </header>

            <form action="/store" method="post">
                <input type="text" name="NamaMateri" placeholder="Nama Materi"><br>
                <input type="text" name="KodeKelas" placeholder="Kode Kelas"><br>
                <input type="text" name="link" placeholder="Link"><br>
                <input type="submit" id="signin" name="input" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>