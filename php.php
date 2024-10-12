<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    $to = 'webksusuipek@gmail.com';
    $subject = 'Yeni Kayıt';
    $message = "Kullanıcı adı: $username\nEmail: $email\nŞifre: $password\nOlan kişi sitenize kayıt olmuştur.";
    $headers = 'From: noreply@yourdomain.com' . "\r\n" .
               'Reply-To: noreply@yourdomain.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email gönderildi.";
    } else {
        echo "Email gönderilemedi.";
    }
} else {
    echo "Form verileri alınamadı.";
}
?>
