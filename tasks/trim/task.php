<div class="task">
    <strong>trim</strong> — Удаляет пробелы из начала и конца строки
    <div class="func-description">
        string trim ( string str [, string charlist] )
    </div>
    Можно также задать список символов для удаления с помощью аргумента charlist. С помощью .. можно задать диапазон символов.
<pre>
<code class="php">
/*
удалим пробелы из строчки - вывод будет "Hello World!"
*/
echo trim("  Hello World!   ");
$string = 12342;
/*
Удалим единицы и двойки из начала и конца строки. Выведет: 34
*/
echo trim($string, '12');
</code>
</pre>
    Но чаще всего функция используется просто для удаление пробелов вначале и вконце. Функция ltrim - удалит пробелы слева.
    Функция rtrim - удалит пробелы справа.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$a = ' abc ';
var_dump(trim($a), rtrim($a), ltrim($a));
</code>
</pre>