<div class="task">
    <strong>count</strong> — Посчитать количество элементов массива
    <div class="func-description">
        int count ( mixed var [, int mode] )
    </div>
    var - массив который считаем. mode - если параметр установлен в единицу, count() будет считать
    количество элементов массива рекурсивно (тоесть будут посчитаны вложенные элементы).
<pre>
<code class="php">
$month = [
    'Jan' => 'January',
    'Feb' => 'February',
    'Mar' => 'March',
];
$season = [
    'winter' => $month
];
/*
Строка ниже выведет 3
*/
echo count($month);
/*
Строка ниже выведет 4
1 элемент winter и три месяца
*/
echo count($season);
</code>
</pre>
    Пустой массив будет посчитан как 0
</div>
<div class="separator"></div>
<pre>
<code class="php">
$a = [];
var_dump(count($a));
</code>
</pre>