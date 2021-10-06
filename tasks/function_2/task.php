<div class="task">
    Функция может принимать несколько аргументов. Предположим, что продаем машины. Выведем строки описания.
</div>
<div class="separator"></div>
<pre>
<code class="php">
function getData ($brand, $year, $cost) {
    $result = "Car: " . $brand . '. ';
    /*
    используем короткий вариант конкатенации
    */
    $result .= "Year: " . $year . '. ';
    $result .= "Cost: $" . $cost . '. ';

    return $result;
}
/*
выводим результат и передаем аргументы без промежуточных переменных.
строку не забываем поместить в кавычки
*/
echo getData('KAMAZ', 2001, 10000);
/*
и повторно вызовем функцию, но уже с другими данными
*/
echo getData('ZIGULI', 2002, 1000);
</code>
</pre>
