<!-- Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). -->

<?php
$array = array('а' => 'a', 'б' => 'b', 'в' => 'v', 
							 'г' => 'g', 'д' => 'd', 'е' => 'e', 
							 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 
							 'и' => 'i', 'й' => 'j', 'к' => 'k', 
							 'л' => 'l', 'м' => 'm', 'н' => 'n', 
							 'о' => 'o', 'п' => 'p', 'р' => 'r', 
							 'с' => 's', 'т' => 't', 'у' => 'u', 
							 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 
							 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 
							 'ъ' => '"', 'ы' => 'y', 'ь' => "'", 
							 'э' => 'eh', 'ю' => 'yu', 'я' => 'ya', 
							 ' ' => ' ', '.' => '.', ',' => ',');

$str ='Это строка';
$str = mb_strtolower($str, 'UTF-8');
for ($i = 0; $i < mb_strlen($str, 'UTF-8'); $i++) {
	echo $array[mb_substr($str, $i, 1, 'UTF-8')];
}
