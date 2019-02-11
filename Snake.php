<?php



$size = $argv[1];
if(!(isset($size))) {
    exit("Ne zadan razmer matricu");
}

$matrix = createMatrix($size);
$matrix = transposeMatrix($matrix);
printMatrix($matrix);



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

function transposeMatrix($matrix)
{
    $transponedMatrix = [];
    foreach ($matrix as $row => $columns) {
        if ($row % 2 == 0) {
            foreach ($columns as $row2 => $column2) {
                $transponedMatrix[$row2][$row] = $column2;
            }
        }
        else {
            foreach (array_reverse($columns) as $row2 => $column2) {
                $transponedMatrix[$row2][$row] = $column2;
            }
        }
    }
    return $transponedMatrix;
}



function printMatrix ($matrix)
{
    foreach($matrix as $rows) {
        foreach($rows as $row) {
            echo "$row ";
        }
        echo PHP_EOL;
    }
}
