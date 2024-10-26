<?php
session_start();

error_log("A");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
error_log("B");

$servername = "localhost";
$username = "root"; // Varsayılan kullanıcı adı
$password = ""; 
$dbname = "turkroket-space";

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);
error_log("C");

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    error_log("Bağlantı hatası: " . $conn->connect_error);

    die("Bağlantı hatası: " . $conn->connect_error);
}
error_log("D");


// Form verilerini al
$user = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['sifre']) ? $_POST['sifre'] : '';

// Email'in @ işaretine kadar olan kısmını al ve SHA-256 ile şifrele
$email_prefix = explode('@', $email)[0];
$hashed_email_prefix = hash('sha256', $email_prefix);

// Hazırlıklı ifade (prepared statement) kullanarak SQL sorgusu
$stmt = $conn->prepare("INSERT INTO liste (username, mail, pass, session) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $user, $email, $pass, $hashed_email_prefix);

if ($stmt->execute()) {
    error_log("E.");

    echo "Kayıt başarıyla eklendi ve session'a yazıldı.";
    
} else {
    echo "Hata: " . $stmt->error;
}
//smtp mail gönderme
$mail = new PHPMailer(true);
error_log("A0.");
try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Host       = 'smtp.yandex.com';                    // Set the SMTP server to send through
    $mail->Port       = 587; 
    $mail->IsHTML(true);
    $mail->SetLanguage("tr", "phpmailer/language");
    $mail->CharSet ="utf-8";                               // TCP port to connect to
    $mail->Username   = 'info@turkroket.space';                     // SMTP username
    $mail->Password   = 'vtxrhammeuhjshnh';                            // SMTP password
    //smtp secure is ssl
    // $mail->SMTPSecure = PHPMailer::ENCRPTION;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->SetFrom( "info@turkroket.space", "Turkroket.space");
    $mail->AddAddress($email);
    error_log($email);
    $mail->Subject = "Eğitim Katılım Bağlantısı";
    $mail->Body = "Merhaba $user, <br /> <br /> Eğitimimize katıldığınız için teşekkür ederiz. <br /> <br /> <a href='https://turkroket.space/egitim.php?email=$hashed_email_prefix'>Eğitimimize katılmak için tıklayınız.</a>";
    $mail->Send();

    error_log("A01.");
} catch (Exception $e) {
    error_log("A1.");
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$stmt->close();
$conn->close();
?>