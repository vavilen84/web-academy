<div class="task">
    Строка - произвольные символы находящиеся в кавычках
</div>
<div class="separator"></div>
<pre>
<code class="php">
$a = "string";
/*
кавычки могут быть как двойные так и одинарные
*/
$b = 'string';
/*
число в кавычках - это string, а не integer
*/
$c = "123";
/*
дробное число в кавычках - это string, а не float
*/
$d = "3.14";
var_dump($a, $b, $c, $d);
</code>
</pre>