<?php 
     //code here....
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,
'https://www.whatmobile.com.pk/');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
preg_match_all('!admin/images/(.*).jpg!',$result,$data);


//print_r($data);
$finalArr=array_unique($data[0]);
print_r($finalArr);

foreach ($finalArr as $value) {
    echo '<img src="'.$value.'">';
}


?>
<!-- admin/images/Samsung/SamsungGalaxyS21FE-s.jpg -->
<!-- admin/images/Vivo/VivoV23e-s.jpg -->