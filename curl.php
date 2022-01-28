<?php 
     //code here....
//curl_init();
// curl_setopt();
// curl_exec();
// curl_close();
// $ch=curl_init();
// curl_setopt($ch,CURLOPT_URL,"https://www.google.com/");
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// curl_exec($ch);
// curl_close($ch);

$url="https://images.unsplash.com/photo-1471879832106-c7ab9e0cee23?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max";
$image="my.jpg";

$fimage=fopen($image,'w+');
$ch=curl_init($url);
//curl_setopt($ch,CURLOPT_TIMEOUT,1000);
curl_setopt($ch,CURLOPT_FILE,$fimage);
curl_exec($ch);
curl_close($ch);
fclose($fimage);


?>