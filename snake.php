<?php



//1 2 3
//4 5 6
//7 8 9

$size = 3;

$numArr = createMatrix($size);
$newArr = [];

foreach ($numArr as $key => $value) {
    if ($key % 2 == 0) {
        $newArr[$key] = array_shift($value);
    }
}



function createMatrix($size)
{
    $numArr = [];
    $count = 1;

    for ($i = 0; $i < $size; $i++) {
        $numArr[$i] = [];
        for ($j = 0; $j < $size; $j++) {
            $numArr[$i][$j] = $count;
            $count += 1;
        }
    }

    return $numArr;

}


