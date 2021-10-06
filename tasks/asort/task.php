<div class="task">
    <strong>asort</strong> — Отсортировать массив по значению, сохраняя ключи
    <div class="func-description">
        bool asort ( array &array [, int sort_flags] )
    </div>
    Знак амперсанда указывает на то, что массив передается "по ссылке". Подробнее разберем позже. Функция не будет
    возвращать отсортированный массив. Массив будет изменен непосредственно в переменной, в которой находится.
    <pre>
<code class="php">
$array = [
    1 => 'Konstantin',
    2 => 'Vladimir',
    3 => 'Alexey'
];
asort($array);
/*
отсортированный массив будет вот таким
[
    3 => Alexey,
    1 => Konstantin,
    2 => Vladimir
];
можно сортировать и числа
*/
$array = [
    2000 => 2000,
    1985 => 1985,
    1970 => 1970
];
/*
отсортированный массив будет вот таким
[
    1985 => 1985,
    1970 => 1970,
    2000 => 2000
];
*/
</code>
</pre>
    Отсортируем по алфавиту марки авто
</div>
<div class="separator"></div>
<pre>
<code class="php">
$data = ["Opel", "BMW", "Lada'];
asort($data);
var_dump($data);
</code>
</pre>