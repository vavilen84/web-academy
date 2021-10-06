<div class="task">
    <strong>ksort</strong> — Сортирует массив по ключам
    <div class="func-description">
        bool ksort ( array &array [, int sort_flags] )
    </div>
    <pre>
<code class="php">
$array = [
    1990 => 'Opel',
    1987 => 'BMW',
    1992 => 'Lada'
];
asort($array);
/*
отсортированный массив будет вот таким
[
    1987 => 'BMW',
    1990 => 'Opel',
    1992 => 'Lada'
];
*/
</code>
</pre>
    Отсортируем товары по ключу
</div>
<div class="separator"></div>
<pre>
<code class="php">
$data = [
    5 => "Cola",
    3 => "Pepsi",
    4 => "Fanta"
];
ksort($data);
var_dump($data);
</code>
</pre>