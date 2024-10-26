<?php
/* 
Veritabani baglantimizi yapiyoruz
*/

$hostadresi        =	"localhost";
$kullaniciadi      =	"root";
$sifre             =	"";
$veritabani        =	"";

$db = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL baglantisi basarisiz: " . mysqli_connect_error();
}

mysqli_set_charset($db, "utf8mb4");
?>



