<?php 
session_start();
include("baglanti.php"); //veritabanını ekliyoruz

$name = $_POST["isim"];
$phone = $_POST["tel"];
$email = $_POST["email"];

$sel = "SELECT * FROM kullanicilar WHERE isim = '$name' OR telefon = '$phone'";
$result = mysqli_query($db, $sel);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count > 0){
    
    echo 
    "<script> alert('Halihazırda bir gönüllü başvurunuz mevcut. Lütfen başvurunuzun onaylanmasını bekleyiniz.'); window.location.replace('https://turkroket.space/gonulluol');</script>";
}
else{
    
    $sql = "INSERT INTO kullanicilar (isim, telefon, eposta) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sss", $name, $phone, $email);
    $stmt->execute();
    
    if ($stmt) {
        echo
        "<script> alert('Gönüllü kaydı başarıyla tamamlandı. Teşekkür ederiz.'); window.location.replace('https://turkroket.space/gonulluol'); </script>";
    }
}

?>
