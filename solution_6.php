<!-- В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$ul_li = array( '1 элемент', '2 элемент', array( '1 элемент', '2 элемент', '3 элемент', '4 элемент' ), '3 элемент', '4 элемент' );

	$i = 0;
	echo '<ul>';
	foreach ( $ul_li as $arr ) {
		if ( !is_array($ul_li[$i]) ) {
			echo  '<li>' . $ul_li[$i] . '</li>';
		} else {
			echo '<ul>';
			foreach ( $arr as $key => $value ) {
				echo '<li>' . $value . '</li>' ;
			}
			echo '</ul>';
		}
		$i++;
	}
	echo '</ul>';

	?>
</body>
</html>