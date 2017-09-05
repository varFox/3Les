<!-- Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:

Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru) -->

<?php
$arr = array('Московская область'    => array('Москва', 'Зеленоград', 'Клин'), 
						 'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'), 
						 'Нижегородская область' => array('Нижний Новгород', 'Кстово', 'Дзержинск', 'Павлово'),
						 'Ставропольский край'   => array('Ставрополь', 'Пятигорск', 'Кисловодск', 'Минеральные воды')
							);

$i = 0;
foreach ( $arr as $a ) {
	echo array_keys($arr)[$i] . '</br>';
	$i++;
	foreach ($a as $key => $value) {
		if ($key != 0) echo ', ';
		echo $value ;
	}
	echo '</br>';
}