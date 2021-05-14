<?php
  $image = imagecreatetruecolor(300, 300) // создаем изображение
    or die('Cannot create image');     // либо прерываем работу скрипта в случае ошибки 
  imagefill($image, 0, 0, 0x330080); // фон картинки
  imageellipse($image, 150, 150, 90, 90, 0xFFFFFF); //рисуем круг
  header('Content-type: image/png'); //указываем тип документа, формат
  imagepng($image); //вывод созданного изображения
  imagedestroy($image); //оптимизация (освобождаем память)
?>
