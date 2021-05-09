<?php
echo "<a href='index.php'>Обратно</a><br>";
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16];
echo "[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16] => " . findNumber($arr1) . "<br>";

$arr2 = [1, 2, 4, 5, 6];
echo "[1, 2, 4, 5, 6] => " . findNumber($arr2) . "<br>";

$arr3 = [];
echo "[] => " . findNumber($arr3) . "<br>";

$arr4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "[1, 2, 3, 4, 5, 6, 7, 8, 9, 10] => " . findNumber($arr4) . "<br>";

function findNumber(array $arr): int
{
    $result = 0;
    $countArray = count($arr);
    $start = 0;
    $end = $countArray - 1;

    while (true) {
        $base = floor(($start + $end) / 2);

        if ($end == $base) {
            $result =  $base + 2;
            break;
        }
        else if($arr[$base] == $base + 1) {
            if ($base < $countArray - 1 && $arr[$base + 1] != $base + 2) {
                $result =  $base + 2;
                break;
            }
            else {
                $start = $base + 1;
            }

        }
        else  {
            if ($base > 0 && $arr[$base - 1] != $base) {
                $result =  $base;
                break;
            }
            else {
                $end = $base - 1;
            }

        }
    }

    return $result;
}