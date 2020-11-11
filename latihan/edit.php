<?php 
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM biodata WHERE nik='".$_GET['nik']."' ");
$result = mysqli_fetch_array($data_edit);
?>

<html>
<head> 
<body>
    <h2>Edit data </h2>

    <a href="welcome.php" style ="padding:0.4% 0.8%; background-color:#009900; color:#fff; border-radius: 2px; text-decoration:none;">Biodata</a><br><br>
    <form action="" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
    <td>NIK</td>
    <td>:</td>
    <td><input type="text" name="nik" value="<?php echo $result['nik'] ?>" required></td>
    </tr>

    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" required></td>
    </tr>

    <tr>
    <td>Tanggal lahir</td>
    <td>:</td>
    <td><input type="date" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir'] ?>" required></td>
    </tr>

    <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="tempat_lahir" value="<?php echo $result['tempat_lahir'] ?>" required></td>
    </tr>

    <tr>
    <td>Foto</td>
    <td>:</td>
    <td><input type="file" name="foto" value="<?php echo $result['foto'] ?>" required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="edit" value="simpan"></td>
    </tr>

    </table>
    </form>

    <?php 
    
    if(isset($_POST['edit'])){
        $update = mysqli_query($koneksi, "UPDATE biodata SET Nama = '".$_POST['nama']."',
        tanggal_lahir = '".$_POST['tanggal_lahir']."',
        tempat_lahir = '".$_POST['tempat_lahir']."',
        foto = '".$_POST['foto']."'
        WHERE nik = '".$_GET['nik']."' ");

        if($update){
            echo 'berhasil di edit';

        }
        else{
            echo 'gagal di edit';
        }

    }
    ?>
</body>
</head>
</html>