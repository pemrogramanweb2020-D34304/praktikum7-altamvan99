<?php
include 'koneksi.php';
if(isset ($_GET['nik'])){
    $delete = mysqli_query($koneksi, "DELETE FROM biodata WHERE nik='".$_GET['nik']."' ");
    header ('location:welcome.php');
}
?>