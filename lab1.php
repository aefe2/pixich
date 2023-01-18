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

$X = array(12, 34, 321, 42, 54, 6, 11);
$Y = array(3, 45, 67, 9, 63, 5, 12, 44);
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

echo "<pre>";
echo "Массив Z<br>";
print_r($Z);
echo "</pre>";

$simpleArr = [];
foreach ($Z as $item) {
    if (gmp_prob_prime($item, 10) == 2) {
        $simpleArr[] = $item;
    }
}

function arrSortDesc($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1;
}

uasort($simpleArr, 'arrSortDesc');
echo "Три наибольших простых числа массива Z : $simpleArr[0]; $simpleArr[1]; $simpleArr[2]"

?>
</body>
</html>