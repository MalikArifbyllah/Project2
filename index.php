<?php
function find_target($numbers, $target) {
    if (in_array($target, $numbers)) {
        $index = array_search($target, $numbers);
        return "Target telah tercapai pada indeks nomor $index";
    } else {
        return "Target tidak ditemukan dalam array";
    }
}


$numbers1 = [1, 2, 3, 4, 5];
$target1 = 4;
echo find_target($numbers1, $target1) . "\n";  

$numbers2 = [2, 4, 3];
$target2 = 4;
echo find_target($numbers2, $target2) . "\n";  

$numbers3 = [1, 5, 8, 9];
$target3 = 2;
echo find_target($numbers3, $target3) . "\n";  

?>
