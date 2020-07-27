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

            <div class="tombol">
                <button>
                    <a href="form_upload.php">Upload Gambar</a><br>
                </button>
            </div>
            
            <div class="upload" align="center">
                <center>
                <table border="1" align="center" style="padding: 5px; margin: 5px; ">
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th>Tipe</th>
                        <th>Ukuran</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    while($row = mysqli_fetch_array($query))
                    {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100"/></td>
                            <td><?php echo $row['keterangan']; ?></td>
                            <td><?php echo $row['tipe_gambar']; ?></td>
                            <td><?php echo $row['ukuran_gambar']; ?></td>
                            <td><a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table></center>
                </div>
    </div>
    <div class="footer">
        <hr/>
            @Copyright2020 || Bellasaphira
    </div>
    </body>
</html>