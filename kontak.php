<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header" align="center">
            <center><p><h1>BELLA'S PHOTOGRAPH</h1></p></center>
            <hr/>   
        </div>
        
        <div class="wrap">
            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="upload.php">UPLOAD</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
        </div>

        <div class="logo">
            <center><h1>FIND ME IN </h1><br>

            <a href="https://www.instagram.com/bellasphraa/">
                <img src="gambar/ig.png" width="100" height="70">
            </a>
            <a href="www.twitter.com">
                <img src="gambar/twit.png" width="100" height="70">
            </a>
            <a href="www.telegram.com">
                <img src="gambar/tele.png" width="100" height="70">
            </a>
                </center>
        </div>

        <div class="footer">
        <hr/>
            @Copyright2020 || Bellasaphira
        </div>
    
    </body>
</html>