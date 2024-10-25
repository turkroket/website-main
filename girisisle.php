<?php
session_start();
include("baglanti.php"); //veritabanını ekliyoruz

// giriş formundan gelen kullanıcı adı (kuladi) ve şifre(sifre) değişkenlere atıyoruz
//$username=$_POST['kuladi'];
$password=$_POST['sifre'];

//kullanıcı adı ve şifeyi sorguluyoruz
$sql="SELECT * FROM gonulluegitim WHERE sifre='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
//Yok ise hata verdiriyoruz. 

if(mysqli_num_rows($result) == 1)
{
$_SESSION['password'] = $password; // Initializing Session
header("location: gonullu-video.php"); // Redirecting To Other Page
}else
{
echo "<center>"."Şifreniz yanlış"."</br>"."<a href=egitim.html>GERİ DÖN</a>"."</center>";
}
?>
