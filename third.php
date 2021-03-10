<?php
echo "<a href='index.php'>Обратно</a><br>";
echo "<h2>Task 2</h2>";

$numbersDoublyList = new SplDoublyLinkedList();
$number = 600851475143;
$seconds = microtime();
for ($count = 2; $count <= sqrt($number); $count++) {
    if ($number % $count == 0) {
        $numbersDoublyList->push($count);
    }
}

echo "<br>";
while (!$numbersDoublyList->isEmpty()) {
    $numbersDoublyList->rewind();
    $result = true;
    while ($numbersDoublyList->current() <= sqrt($numbersDoublyList->top())) {
        if ($numbersDoublyList->top() % $numbersDoublyList->current() === 0) {
            $result = false;
            $numbersDoublyList->pop();
        }
        $numbersDoublyList->next();
    }
    if ($result) {
        break;
    }
}
$seconds = microtime() - $seconds;
echo "Простой наибольший делитель числа " . $number . " = " . $numbersDoublyList->top() . "<br>";
echo "Программа работала " . $seconds . " секунд";