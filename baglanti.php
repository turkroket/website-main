<?php
/* 
Veritabani baglantimizi yapiyoruz
*/

$hostadresi        =	"localhost";
$kullaniciadi      =	"tur85oketspace_user";
$sifre             =	"2turkrek017";
$veritabani        =	"tur85oketspace_database";

$db = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL baglantisi basarisiz: " . mysqli_connect_error();
}

mysqli_set_charset($db, "utf8mb4");
?>



