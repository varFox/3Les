<!-- Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. -->

<?php
function replace($s) {
	$str = str_replace(' ', '_', $s);
	return $str;
}
echo replace('Пусть это будет как будто очень длинная строка');