<?php



require "vendor/autoload.php";

$access_token = 'aW+rV4ROiQzNBrFTH1y5WWUwpYZyIPxbpRw5MWcn3jI27XahxH2BipRvp3JVKhXXUYx3xVk7eGXbqKWPFomQ1O3IXDwnfhfwQJNzMJuVg8S6ChXQK9KTsIFX/aLqP9550MptKBsdh3VAoj2AKNoCyQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b02adc296bc3288171532f6618e371e2';

$pushID = 'Uaea1a0804a5e35afe1a3476a10af30cc';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







