<html>
<head> 
<body>
    <h2>Input data </h2>

    <a href="welcome.php" style ="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Biodata</a><br><br>
    <form action="" method="POST" enctype="multipart/form-data"> 
    <table>
    <tr>
    <td>NIK</td>
    <td>:</td>
    <td><input type="text" name="nik" placeholder="Nik" required></td>
    </tr>

    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" placeholder="Nama" required></td>
    </tr>

    <tr>
    <td>Tanggal lahir</td>
    <td>:</td>
    <td><input type="date" name="tanggal_lahir" placeholder="Tanggal lahir" required></td>
    </tr>

    <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="tempat_lahir" placeholder="Tempat lahir" required></td>
    </tr>

    <tr>
    <td>Foto</td>
    <td>:</td>
    <td><input type="file" name="foto" placeholder="Foto" required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan"></td>
    </tr>

    </table>
    </form>

    <?php 
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
    $insert = mysqli_query($koneksi, "INSERT INTO biodata VALUES 
    ('" .$_POST ['nik']. "',
    '" .$_POST ['nama']. "',
    '" .$_POST ['tanggal_lahir']. "',
    '" .$_POST ['tempat_lahir']. "',
    '".$_POST ['foto']."') ");

        if($insert){
            echo 'Berhasil disimpan';
        }
        else{
            echo 'gagal disimpan'.mysqli_error($koneksi);
        }
    }
    ?>
</body>
</head>
</html>