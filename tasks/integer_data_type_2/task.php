<div class="task">
    Существуют кратки записи. Пускай $a равно единице.
<pre>
<code class="php">
$a = 1;
</code>
</pre>
    Следующие две строчки идентичны
<pre>
<code class="php">
$a = $a + 1;
$a += 1;
</code>
</pre>
    Тоесть вначале мы задали значение $a единицу. А потом задали ей новое значение, которое состояло из суммы
    ее текущего значения(1) и нового(1). В короткой записи мы опускаем значение текущей переменной и добавляем знак нужной
    нам оперцаии перед знаком равно. Проделаем тоже самое с умножением. Скажем нам надо умножить текущее значение переменной
    на 3.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$a = 100;
/*
Следующая запись эквивалентна $a = $ * 3; или $a = 100 * 3;
*/
$a *= 3;
var_dump($a);
</code>
</pre>