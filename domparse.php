<?php 
     //code here....
include "simple_html_dom.php";
// $html=file_get_html('https://www.google.com/');
// echo $html->find('title',0)->plaintext;

$html=file_get_html("https://en.wikipedia.org/wiki/PHP");
echo $html->find('table.infobox',0)->innertext;
?>