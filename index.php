<!DOCTYPE html>
<html lang="ru">
    <head>
      <meta charset="utf-8">
      <title>Какой-то сервис</title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <h3>Какая-то картинка</h3>

      <img src="image.php" alt="какая-то картинка">

    <?php 
			$file = file("counter.txt"); //открываем файл как массив
			$count = implode("", $file); //объединяем элементы массива в строку
			$count++; //увеличиваем на единицу
			$myfile = fopen("counter.txt","w"); //открываем текстовый файл для записи
			fputs($myfile, $count); //записываем получившееся число в открытый файл
			fclose($myfile); //закрываем открытый файл
		?>

      <span>Просмотров: <?=$count?> </span>

    </body>
</html>
