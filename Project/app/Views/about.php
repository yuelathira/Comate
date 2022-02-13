<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/comateTitleLogo.png">
    <title>About Comate</title>
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
                    <span><img src="image/cpp.png"><a href="/cpp">C++</a></span>
                </div>
            </nav>
            <footer class="footer">
                <span><img src="image/profile.png"><a href="<?= base_url('profil/' . $user['Username']) ?>">MY PROFILE</a></span>
                <span><img src="image/info.png"><a href="/aboutus" style="color: blue;">ABOUT US</a></span>
                <span><img src="image/logout.png"><a href="logout">LOGOUT</a></span>
            </footer>
        </div>
        <div class="main">
            <div class="contentAbout">
                <div class="column side">
                    <img src="image/comateLogo.png">
                </div>
                <div class="column main">
                    <h1>About Us</h1>
                    <p>Comate merupakan sebuah website untuk membantu anda dalam mempelajari berbagai bahasa pemrograman. 
                        Ketika anda membutuhkan sebuah website untuk membantu anda dalam mempelajari bahasa pemrograman maka Comate lah pilihannya 
                        karena dalam website kami ini materi yang dijelaskan berbentuk video yang dapat membantu anda untuk lebih paham terhadap bahasa pemrograman yang anda pelajari.</p>
                </div>
            </div>
            <div class="footerAbout">
                <h2>Our Team</h2>
                <table class="tableAbout">
                    <tr>
                        <td class="dataTable">
                            <img src="image/Faiq.png" class="team">
                        </td>
                        <td class="dataTable">
                            <img src="image/Shandi.png" class="team">
                        </td>
                        <td class="dataTable">
                            <img src="image/Yuela.png" class="team">
                        </td>
                    </tr>
                    <tr>
                        <td class="dataTable">
                            <b>140810190012</b>
                        </td>
                        <td class="dataTable">
                            <b>140810190050</b>
                        </td>
                        <td class="dataTable">
                            <b>140810190064</b>
                        </td>
                    </tr>
                    <tr>
                        <td class="dataTable">
                            <b>M. Faiq Al Murtadha A.R.A.</b>
                        </td>
                        <td class="dataTable">
                            <b>Elshandi Septiawan</b>
                        </td>
                        <td class="dataTable">
                            <b>Yuela Thahira</b>
                        </td>
                    </tr>
                    <tr>
                        <td class="dataTable">
                            <img src="image/line.jpg" class="cp"> : faiq1719
                        </td>
                        <td class="dataTable">
                            <img src="image/line.jpg" class="cp"> : elshandiseptiawan
                        </td>
                        <td class="dataTable">
                            <img src="image/line.jpg" class="cp"> : yuelathr
                        </td>
                    </tr>
                    <tr>
                        <td class="dataTable">
                            <img src="image/instagram.png" class="cp"> : faiq_murtadha
                        </td>
                        <td class="dataTable">
                            <img src="image/instagram.png" class="cp"> : elshandi_septiawan
                        </td>
                        <td class="dataTable">
                            <img src="image/instagram.png" class="cp"> : yuelathira
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>