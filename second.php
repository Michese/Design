<?php
echo "<a href='index.php'>Обратно</a><br>";
$arr = [1, 8, 3, 4, 34, 76, 7, 36, 9, 10, 48, 11, 14, 23, 53];

for ($index = 0; $index < count($arr); $index++) {
    echo $arr[$index] . " ";
}
echo "<br>";

$sortedArray = sortArray($arr);

for ($index = 0; $index < count($sortedArray); $index++) {
    echo $sortedArray[$index] . " ";
}


function sortArray(array $arr): array
{
    $countArray = count($arr);

    $indexHelpArray1 = 0;
    $indexHelpArray2 = 0;
    $helpArray1 = [];
    $helpArray2 = [];

    while (true) {
        $helpArray1[] = $arr[0];
        for ($index = 1; $index < $countArray; $index++) {
            if ($arr[$index] >= $helpArray1[$indexHelpArray1]) {
                $helpArray1[++$indexHelpArray1] = $arr[$index];
            } else {
                $helpArray2[] = $arr[$index];
            }
        }

        $countHelpArray2 = count($helpArray2);
        if ($countHelpArray2 == 0) {
            break;
        }

        $arr = array();
        $indexHelpArray1 = 0;
        $countHelpArray1 = count($helpArray1);

        while ($indexHelpArray1 < $countHelpArray1 || $indexHelpArray2 < $countHelpArray2) {
            if ($indexHelpArray1 < $countHelpArray1 && $indexHelpArray2 < $countHelpArray2) {
                if ($helpArray1[$indexHelpArray1] < $helpArray2[$indexHelpArray2]) {
                    $arr[] = $helpArray1[$indexHelpArray1++];
                } else {
                    $arr[] = $helpArray2[$indexHelpArray2++];
                }
            } else if ($indexHelpArray1 < $countHelpArray1) {
                $arr[] = $helpArray1[$indexHelpArray1++];
            } else {
                $arr[] = $helpArray2[$indexHelpArray2++];
            }
        }

        $helpArray1 = array();
        $helpArray2 = array();
        $indexHelpArray1 = 0;
        $indexHelpArray2 = 0;
        $countHelpArray1 = 0;
        $countHelpArray2 = 0;
    }
    return $arr;
}