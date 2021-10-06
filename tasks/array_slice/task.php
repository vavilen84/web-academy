<div class="task">
    <strong>array_slice</strong> — Выбрать срез массива
    <div class="func-description">
        array array_slice ( array array, int offset [, int length [, bool preserve_keys]] )
    </div>
    offset - с какого элемента от начала начинаем. Если offset принимает отрицательное значение - отсчет будет с
    конца входного массива. length - длинна среза.
    <pre>
<code class="php">
$array = ["a", "b", "c", "d", "e"];
array_slice($array, 2); // "c", "d", "e"
array_slice($array, -2, 1); // "d"
array_slice($array, 0, 3);  // "a", "b", "c";
</code>
</pre>
    Возьмем первые три элемента массива
</div>
<div class="separator"></div>
<pre>
<code class="php">
$integers = [1,2,3,4,5];
$sliced =array_slice($integers, 0, 3);
var_dump($sliced);
</code>
</pre>