<div class="task">
    Ключи массива можно задать явно
<pre>
<code class="php">
$food = [
    23 => 'Apple',
    'some-key' => 'Banana'
];
/*
А теперь обратимся к значению по ключу
Строчка ниже выведет 'Apple'
*/
echo $food[23];
/*
Ключи могут быть не только числом, а и строкой(ассоциативный массив)
Строчка ниже выведет 'Banana'
*/
echo $food['some-key'];
</code>
</pre>
    Создадим массив c маркой автомобиля и его ценой и выведем цены в зависимости от марки. Добавим вначале строку,
    состоящую из одного символа(доллар) перед ценой при помощи конкатенации
</div>
<div class="separator"></div>
<pre>
<code class="php">
$cars = [
    'ZIGULI' => 100,
    'KAMAZ' => 1000
];
echo '$' . $cars['ZIGULI'];
</code>
</pre>