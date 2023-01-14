<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$X = array(1, 2, 3, 4, 5, 6, 11);
$Y = array(3, 4, 6, 9, 1, 5, 12, 44);
$Z = array();

echo "<pre>";
print_r($X);
echo "</pre>";

echo "<pre>";
print_r($Y);
echo "</pre>";

for ($i = 0; $i < count($X); $i++) {
    $buf = (string) $X[$i];
    $sum = 0;
    for ($j = 0; $j < strlen($buf); $j++){
        $buf[$j] = (int) $buf[$j];
        $sum += $buf[$j];
    }
    $X[$i] = $sum;
//    for($j = 0; $j < strlen($X[$i]); $j++){
//
//    }
//    if ($X[$i] > 10) {
//        strval($X[$i]);
//    }
//    if ($X[$i] % 2 !== 0) {
//
//    }
}
echo "<pre>";
var_dump($X);
print_r($Z);
?>
</body>
</html>