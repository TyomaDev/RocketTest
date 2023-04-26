<?php
require_once 'connection.php';

function cleanData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$FIO = cleanData($_POST['FIO']);
$Phone = cleanData($_POST['Phone']);
$Email = cleanData($_POST['Email']);
$Offer = cleanData($_POST['Offer']);




// Сообщение на почту:
$message = 'Здравствуйте! Меня зовут ' .  $FIO ."! Я бы хотел 
забронировать процедуру " . $Offer . ". 
Для связи со мной можете использовать следующую почту, либо позовнить на телефон: "
. $Email . " | " . $Phone;

$to = 'artyom.musharov@mail.ru';
$subject = 'Новый клиент!';
$Headers = 'From: RocketTest.work';
mail($to , $subject, $message,$Headers);

?>