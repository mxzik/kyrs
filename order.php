<?php
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$country = $_POST['email'];
$comment = $_POST['comment'];
$confirm = $_POST['confirm'];
$lastname = htmlspecialchars($lastname);
$firstname = htmlspecialchars($firstname);
$email = htmlspecialchars($email);
$country = htmlspecialchars($country);
$comment = htmlspecialchars($comment);
$confirm = htmlspecialchars($confirm);
$lastname = urldecode($lastname);
$firstname = urldecode($firstname);
$email = urldecode($email);
$country = urldecode($country);
$comment = urldecode($comment);
$confirm = urldecode($confirm);
$lastname = trim($lastname);
$firstname = trim($firstname);
$email = trim($email);
$country = trim($country);
$comment = trim($comment);
$confirm = trim($confirm);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("puderasts@mail.ru", "Отзыв", "Фамилия:".$lastname.".Имя: ".$firstname ". E-mail: ".$email. ".Страна: ".$country. ".Отзыв: ".$comment. ".Подтверждение на использование: ".$confirm , "From: ximachk@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>