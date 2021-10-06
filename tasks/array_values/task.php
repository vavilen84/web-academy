<div class="task">
    <strong>array_values</strong> — Выбрать все значения массива
    <div class="func-description">
        array array_values ( array input )
    </div>
    Функция противоположная array_keys. Если array_keys выбирает нам только ключи массива, то array_values выберет
    только значения. Ключи будут перезаписаны.
    <pre>
<code class="php">
$array = [
    "en" => "English",
    "ru" => "Russian",
    "ua" => "Ukrainian"
];
/*
array_values вернет
$array = [
    0 => "English",
    1 => "Russian",
    2 => "Ukrainian"
];
*/
</code>
</pre>
    Выберем значения
</div>
<div class="separator"></div>
<pre>
<code class="php">
$data = ["a" => 1, "b" => 2, "c" => 3];
var_dump(array_values($data));
</code>
</pre>