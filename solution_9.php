<!-- *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах). -->

<?php
function translate( $str ) {
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
								 ' ' => '_', '.' => '.', ',' => ',');

	$str = mb_strtolower($str, 'UTF-8');
	for ($i = 0; $i < mb_strlen($str, 'UTF-8'); $i++) {
		echo $st;
		echo $array[mb_substr($str, $i, 1, 'UTF-8')];
	}
}
translate('Это строка');