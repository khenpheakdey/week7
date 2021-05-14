<?php
echo "<h2> Pheakdey Khen </h2>";
echo "<h3> Week 3 Assignment</h3>";
echo "Task 1:" . '<br>';

$str = "emocleW oT PHP";

$string = explode(" ", $str);
/* [0] => emocleW [1] => oT. [2] => PHP */
$result = "";
foreach ($string as $array) {
    for ($i = strlen($array) - 1; $i >= 0; $i--) {
        $result .= $array[$i];
    }
    $result .= " ";
}
echo $str . '<br> to <br>';
echo $result;
echo '<br>';
echo "---------------------------------------------";
echo '<br>';

echo "Task 2:" . '<br>';

$arr = [2, 3, 4, 6, 7, 9, 11, 20];
$getEven = array_filter($arr, fn ($num) => $num % 2 === 0);
print_r($getEven);

echo '<br>';
echo "---------------------------------------------";
echo '<br>';


echo "Task 3:" . '<br>';

function sum(...$num)
{
    $result = 0;
    foreach ($num as $value) {
        $result += $value;
    }
    return $result;
}
echo sum(1, 2, 3, 4, 5, 6);
echo '<br>';
echo sum(2, 3, 4);
echo '<br>';
echo sum(2, 3, 4, 5);
