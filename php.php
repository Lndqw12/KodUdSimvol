<?php
$str = "666����� �����666";
$ltrim = ltrim($str, '6'); //�������� � ������
$rtrim = rtrim($str, '6'); //�������� � �����
$trim = trim($str, '6');   //�������� ���� ����
echo "ltrim: $ltrim<br>";  //���������
echo "rtrim: $rtrim<br>";
echo "trim: $trim";
?>