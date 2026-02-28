<?php
/*
$student = "Темирлан";
$attendance = true; 

if ($attendance == true) {
    echo $student . " пришел на пару<br>";
} else {
    echo $student . " не пришел на пару<br>";
}*/

/*
$student = "Мария";
$attendance = false;

switch ($attendance) {
    case true:
        echo $student . " пришел на пару<br>";
        break;

    case false:
        echo $student . " не пришел на пару<br>";
        break;
}

*/
/*
$students = [
    ["name" => "Алексей", "attendance" => true],
    ["name" => "Ольга", "attendance" => false],
    ["name" => "Дмитрий", "attendance" => true]
];

$i = 0;

do {
    if ($students[$i]["attendance"] == true) {
        echo $students[$i]["name"] . " пришел на пару<br>";
    } else {
        echo $students[$i]["name"] . " не пришел на пару<br>";
    }

    $i++;

} while ($i < count($students));*/

$rows = 12;
$cols = 30;

echo "<table cellspacing='0' cellpadding='0' style='border-collapse: collapse; border: 1px solid black;'>";

$i = 0;

do {
    echo "<tr>";

    $j = 0;

    do {

        // Верхняя строка ИЛИ левый столбец — жёлтые
        if ($i == 0 || $j == 0) {
            $color = "yellow";
        } else {
            // шахматный порядок
            if (($i + $j) % 2 == 0) {
                $color = "white";
            } else {
                $color = "black";
            }
        }

        echo "<td style='width:20px; height:20px; background:$color;'></td>";

        $j++;

    } while ($j < $cols);

    echo "</tr>";

    $i++;

} while ($i < $rows);

echo "</table>";


?>
