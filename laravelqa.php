<?php 
     //code here....
include "simple_html_dom.php";
$html=file_get_html('https://www.bestinterviewquestion.com/laravel-interview-questions');

foreach ($html->find('div.questionAnswerArea') as $value) {
    echo '<p>'.$value.'</p>';
}

?>