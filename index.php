<?php

$months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];

echo $months[2] . '<br>';
echo $months[5] . '<br>';

$months[7] = 'août';

$departmentsHDF = [
    2 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-calais',
    80 => 'Somme'
];

echo $departmentsHDF[59] . '<br>';

$departmentsHDF[51] = 'Marne';

for ($month = 0; $month <= 11; $month ++) {
    echo $months[$month] . '<br>';
}

$keysDptmt = array_keys($departmentsHDF);
$noDptmt = 0;

for ($number = 0; $number < count($keysDptmt); $number ++) {
    $noDptmt = $keysDptmt[$number];

    echo $departmentsHDF[$noDptmt] . '<br>';
}

$noDptmt = 0;

for ($number = 0; $number < count($keysDptmt); $number ++) {
    $noDptmt = $keysDptmt[$number];

    echo 'Le département ' . $departmentsHDF[$noDptmt] . ' a le numéro ' . $noDptmt . '<br>';
}


?>
