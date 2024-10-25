<?php

/*Yüklenilecek dosyanın adı alındı*/
$filename = $_FILES["file"]["name"];

/*Dosyanın nereye kaydedileceği belirlendi.*/
$location =__DIR__ . "/bildirim/". $filename;

/* Dosya local dosyalama sistemine kaydedildi */

if(copy($_FILES["file"]["tmp_name"], $location)){
    echo
    "<script> alert('Geri bildirim başarıyla alındı.'); </script>";
}else{
    echo
    "<script> alert('Geri bildirim alınamadı. Başka bir şekilde tekrar deneyiniz.'); </script>";
}
?>
