<?php   
include "koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];

//echo $user,$pass;

$sql=mysqli_query($koneksi, "select * from admin where username ='$user'
and password='$pass'");

$cek=mysqli_num_rows($sql);

if($cek > 0){
    session_start();
    $_SESSION['username']=$user;
    $_SESSION['password']=$password;
    header("location: welcome.php");
}
else{
    echo "<center>Username dan password anda salah <br>";
    echo "silahkan <a href=index.php>login</a>kembali</center>";
}
?>