<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 1</title>
</head>
<body>
<?php

//Заданы массивы целых чисел X(n) и Y (k).
//Все числа, с нечётной суммой цифр, переписать в массив Z.
//Найти три наибольших простых числа в массиве Z.

$X = array(1, 32, 321, 4, 54, 6, 11);
$Y = array(3, 45, 67, 9, 61, 5, 12, 44);
$Z = array();

echo "<pre>";
echo "Массив X<br>";
print_r($X);
echo "</pre>";

echo "<pre>";
echo "Массив Y<br>";
print_r($Y);
echo "</pre>";

$arrMerged = array_merge($X, $Y);

echo "<pre>";
echo "Смешанный массив<br>";
print_r($arrMerged);
echo "</pre>";

for ($i = 0; $i < count($arrMerged); $i++) {
    $buf = (string)$arrMerged[$i];
    $sum = 0;
    for ($j = 0; $j < strlen($buf); $j++) {
        $buf[$j] = (int)$buf[$j];
        $sum += $buf[$j];
    }
    $arrMerged[$i] = $sum;
}

for ($i = 0; $i < count($arrMerged); $i++) {
    if ($arrMerged[$i] % 2 != 0) {
        $Z[] = $arrMerged[$i];
    }
}

for ($i = 0; $i < count($Z); $i++) {
    $isSimple = 0;
    if ($Z[$i] % 1 == 0 && $Z[$i] % $Z[$i]) {

    }
}

echo "<pre>";
print_r($arrMerged);
echo "</pre>";

echo "<pre>";
echo "Массив Z<br>";
print_r($Z);
echo "</pre>";
?>
</body>
</html>