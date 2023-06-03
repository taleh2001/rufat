<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$text = $_POST['text'];
$token = "5976438915:AAEh0qT-XO_ElrAuV8i7rOVSyNVlWL3bWqw";
$chat_id = "-897333220";
$arr = array(
    'Имя пользователя:  ' => $name,
    'Телефон: ' => $phone,
    'Email: ' => $email,
    'Требуется: ' => $text
);


foreach ($arr as $key => $value) {
    $txt .=  "<b>" . $key . "</b> " . $value . "%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
    &parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
    echo "<script>
        let a = alert('Заявка отправлена')
        if(a = close){
            location.replace('index.html')
        }

        </script>";
} else {
    echo "false";
}







    // На почту

    // $name = $_POST['name'];
    // $phone = $_POST['phone'];
    // $email = $_POST['email'];
    // $text = $_POST['text'];

    // $to = "talex2001@list.ru";
    // $date = date ("d.m.Y");
    // $time = date ("h:i");
    // $from = $email;
    // $subject = "Заявка с сайта";

    // $msg="
    // Имя: $name /n
    // Телефон: $phone /n
    // Почта: $email /n
    // Потребность: $text";
    // mail($to, $subject, $msg, "From: $from ");

    ?>