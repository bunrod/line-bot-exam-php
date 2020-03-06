<php 
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('ynV7OSbgW8UlzOBx9qhiq36u2kr3yYLDA4X8L+wMUTATsdMOYLVJ7wdS5yzfkpP5Li4yrZ9rY5lafnA6f+yucaBilbI6O834tnIiXapVybsVEDvqDBbJhQLqmrrRdm9dyNGn1Tyh75a6BWefA+limwdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'https://car-care-banknook.herokuapp.com/webhooks.php']);
$response = $bot->getGroupMemberIds(<groupId>, <continuationToken>);
  echo $response;
?>
