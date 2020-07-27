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

        <div class="about">
            <img src="gambar/2.png" style="width: 240px; height: 250px;">
            <br><br>
        </div>

        <div class="isitentang" align="center">
            <center>
               Halo... Nama saya Bella Saphira, biasa di panggil Bella. Saya mahasiswi Teknik Informatika di Universitas Ahmad Dahlan. Sebenernya saya tidak ada niatan masuk Teknik Informatika, tetapi mengingat perkembangan zaman sekarang yang semakin berkembang yang semuanya mengandalkan teknologi, bahkan indonesia pun memasuki industry 4.0 jadi saya mau tidak mau masuk informatika karena prinsip saya "Jika mereka bisa, saya pasti bisa juga". 
            </center> 
        </div>

        <div class="footer">
            <hr/>
            @Copyright2020 || Bellasaphira
        </div>
    </body>
</html>