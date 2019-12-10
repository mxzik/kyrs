<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Отзыв был отправлен";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'puderasts@mail.ru'; // Логин на почте
    $mail->Password   = '2904200154956kx'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('puderasts@mail.ru', 'Kiril Himach'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('ximachk@mail.ru');  
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Заголовок письма';
        $mail->Body    = "<b>Имя:</b> $name <br>
        <b>Почта:</b> $email<br><br>
        <b>Сообщение:</b><br>$text";
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
} else {
echo "Nevernie nastroiki pochti";
}
} catch (Exception $e) {
    echo "Prichina oshibki {$mail->ErrorInfo}";
}