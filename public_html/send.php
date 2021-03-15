<?php
 
/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
 
//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$totelegram = $_POST['totelegram'];

 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1617091457:AAGovwRZbXrua-uUZLUsyBcMMo2QfM0QW3k";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-1001398744048";
 
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Внимание: ' => $totelegram
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
    header('Location: https://t.me/Room_Tattoo');
    exit;
} else {
  echo "Error";
}
?>