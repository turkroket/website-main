<?php
session_start();
//veritabanı bağlantımızı yapıyoruz
include('baglanti.php');

//girisisle.php de oluşturulan username mi burada $user_check değişkenine atıyoruz
$pass_check=$_SESSION['password'];

//$user_check değişkenini burada uye tablosundan kullaniciadi hücresinde sorguluyoruz
$sql = mysqli_query($db,"SELECT * FROM gonulluegitim WHERE sifre='$pass_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

//$login_user=$row['password'];

/* eğer $user_check değikeni tanımlı ise home.php sayfamız
açık kalıcak eğer tanımlı değilse giris.php ye yönlendirecek */
if(!isset($pass_check))
{
header("Location: egitim.html");
}
?>
