<?php
$str = "666Любой текст666";
$ltrim = ltrim($str, '6'); //удаление в начале
$rtrim = rtrim($str, '6'); //удаление в конце
$trim = trim($str, '6');   //удаление всех цифр
echo "ltrim: $ltrim<br>";  //результат
echo "rtrim: $rtrim<br>";
echo "trim: $trim";
?>