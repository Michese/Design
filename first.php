<?php
echo "<a href='index.php'>Обратно</a><br>";
echo "<h2>task 1</h2>";

echo "Поиск элемента массива с известным индексом - O(1)<br>
Дублирование одномерного массива через foreach - O(n)<br>
Рекурсивная функция нахождения факториала числа - O(n!)<br>
Удаление элемента массива с известным индексом - O(n)<br>";

echo "<h2>task 1.2</h2>";
echo "<h3>1)</h3>";
echo '<pre>
$n = 10000;
$array[]= [];
for ($i = 0; $i < $n; $i++) {
  for ($j = 1; $j < $n; $j *= 2) {
     $array[$i][$j]= true;
} }
// O(n*log(n))
</pre>';

echo "<h3>2)</h3>";
echo '<pre>
$n = 10000;
$array[] = [];
for ($i = 0; $i < $n; $i += 2) {
  for ($j = $i; $j < $n; $j++) {
   $array[$i][$j]= true;
} }
// O(n<sup>2</sup>)
</pre>';

echo "<h3>3)</h3>";

echo '<pre>
$n = 10000;
$array[] = [];
foo(n);
function foo()  {
while(n > 0) {
  for ($j = sqrt(n); $j < $n; $j++) {
        n--;
        foo(n);
   } } }
   
   // O(n!)
   </pre>';