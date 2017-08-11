<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
ob_implicit_flush(true);
ob_end_flush();
$curl=curl_init('http://api.icndb.com/jokes/random');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($curl);
echo "retry: 10000\ndata:$result\n\n";

//header('Content-Type: text/event-stream');
//header('Cache-Control: no-cache');
//
//$time = date('r');
//echo "data: The server time is: {$time}\n\n";
//flush();