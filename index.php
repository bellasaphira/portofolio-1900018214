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

        <div class="slide">
            
        </div> 

        <div class="pic">
            <center>
            <img src="gambar/bela1.jpeg" width="300" height="400">
            <img src="gambar/bela2.jpeg" width="450" height="400">
            <img src="gambar/bela3.jpeg" width="300" height="400">
            <img src="gambar/bela6.jpeg" width="550" height="300"> <br>
            <img src="gambar/bela4.jpeg" width="300" height="400">
            <img src="gambar/bela5.jpeg" width="450" height="400">
            <img src="gambar/bela7.jpeg" width="300" height="400">
            </center>
        </div>

        <div class="footer">
            <hr/>
            @Copyright2020 || Bellasaphira
        </div>
    </body>
</html>