<?php
echo "<a href='index.php'>Обратно</a><br>";
echo "<h2>Task 2</h2>";
$stack = new SplStack();
$brackets = ['{' => '}', '[' => ']', '(' => ')'];
$str_all = [
"\"Это тестовый вариант проверки (задачи со скобками). И вот еще скобки: {[][()]}\"",
"((a + b)/ c) - 2",
"\"([ошибка)\"",
"\"(\")"
];
foreach ($str_all as $key => $str) {
echo "Строчка номер $key <br>";
echo $str;
preg_match_all("/[\"\[\]{})(]/", $str, $strArray);
foreach ($strArray[0] as $symbol) {
if ($stack->isEmpty() || $stack->bottom() !== '"' && $brackets[$stack->bottom()] !== $symbol) {
$stack->push($symbol);
} else if ($stack->bottom() === '"' && $symbol === '"' || $brackets[$stack->bottom()] === $symbol) {
$stack->pop();
}
}
echo " - ";
var_dump($stack->isEmpty());
while (!$stack->isEmpty()) {
$stack->pop();
}
echo "<br>";
}