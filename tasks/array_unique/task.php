<div class="task">
    <strong>array_unique</strong> — Убрать повторяющиеся значения из массива
    <div class="func-description">
        array array_unique ( array array )
    </div>
    offset - с какого элемента от начала начинаем. Если offset принимает отрицательное значение - отсчет будет с
    конца входного массива. length - длинна среза.
    <pre>
<code class="php">
$array = ["a", "b", "b", "c"];
array_unique($array); // "a", "b", "c"
</code>
</pre>
    Выберем уникальные года из массива
</div>
<div class="separator"></div>
<pre>
<code class="php">
$data = [1984, 2000, 2015, 2015];
var_dump(array_unique($data));
</code>
</pre>