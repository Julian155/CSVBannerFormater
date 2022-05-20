<?php

if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
    $numberLength = $_POST['numberLength'];

    $numberArray = str_split($numbers);
    $filteredNumberArray = array_filter($numberArray, 'is_numeric');
    $filteredNumberArray = array_values($filteredNumberArray);

    for ($i = $numberLength; $i < count($filteredNumberArray); $i += $numberLength+1) {
        array_splice($filteredNumberArray,$i,0,',');
    }

    echo implode('',$filteredNumberArray);
}
