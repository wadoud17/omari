<?php 

$token = "5113083511:AAGstxTNxpfK0ltwpRilia63bFHzFB7XzOA";

$data = [
    'text' => 'Ana Salamo 3alek',
    'chat_id' => '2056334457'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
?>