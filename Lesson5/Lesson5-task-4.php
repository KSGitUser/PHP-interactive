<?php
/*  *По желанию. Подсчитайте размер каталога, учитывая вложенные подкаталоги и файлы в них. */


function getSize($path)
{
  $sizeOfFiles = 0;
  $arrOfDir = scandir($path);
  foreach ($arrOfDir as $item) {
   if (in_array($item, ['.', '..'])) {
     continue;
   }
   if (is_file($path . $item)) {
     $sizeOfFiles += filesize($path . $item); /* получаем размер файла */
   } else {
     $sizeOfFiles += getSize($path . $item . "/"); 
     /* получаем размер файлов в подкаталогах рекурсией*/ 
    }
   
};
return $sizeOfFiles;
}

$result = getSize('../');

echo $result .' байт';






