<?php
require "vendor/autoload.php";
$name = $_GET['name'];
$Id_reserv = $_GET['Id_reserv'];
$userid = $_GET['userid'];
 $date = $_GET['date'];
 $time = $_GET['time'];
 $name_pk = $_GET['name_pk'];
 $license = $_GET['license'];

$access_token = 'ynV7OSbgW8UlzOBx9qhiq36u2kr3yYLDA4X8L+wMUTATsdMOYLVJ7wdS5yzfkpP5Li4yrZ9rY5lafnA6f+yucaBilbI6O834tnIiXapVybsVEDvqDBbJhQLqmrrRdm9dyNGn1Tyh75a6BWefA+limwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '5e48ec085f1d1c42c86b9cf8486abbeb';
$idPush = 'U9126c7bdf7e1a36a8d18919dc600429d';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มีรายการจองใหม่ ชื่อ : '.$name.' ทะเบียนรถ  : '.$license.' บริการที่เลือก  : '.$name_pk.' วัน/เวลาที่จะใช้บริการ '.$date.' '.$time.'  น.');
// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มีรายการจองใหม่ ชื่อ ');
$response = $bot->pushMessage($idPush, $textMessageBuilder);
// $response = $bot->pushMessage($idPush,(new \LINE\LINEBot\MessageBuilder\MultiMessageBuilder())->add(new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('text1', 'text2'));
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
// if($count >= 10 )
// {
//     $access_token = 'ynV7OSbgW8UlzOBx9qhiq36u2kr3yYLDA4X8L+wMUTATsdMOYLVJ7wdS5yzfkpP5Li4yrZ9rY5lafnA6f+yucaBilbI6O834tnIiXapVybsVEDvqDBbJhQLqmrrRdm9dyNGn1Tyh75a6BWefA+limwdB04t89/1O/w1cDnyilFU=';
//     $channelSecret = '5e48ec085f1d1c42c86b9cf8486abbeb';
//     $idPush = $userid;
//     $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
//     $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
    
//     $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('จองแล้ว ชื่อ '. $name.'\n ครบ  : '.$count.'');
//     $response = $bot->pushMessage($idPush, $textMessageBuilder);
    
// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
    
// }
?>
