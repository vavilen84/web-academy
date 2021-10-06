<div class="task">
    В прошлой задаче функция var_dump нам выдала результат "int(1)". Слово int означает тип данных <strong>integer</strong> и
     значение 1. Integer - это означает число. В PHP всего 8 типов данных:
<pre>
<code class="php">
1.integer - число: 0, 1, 21
2.float - число c плавающей точкой: 0.5, 1.55, 21.456
3.string - строка: "Hello World", "PHP is a web development language", "1", "1.5"
4.array - массив:
    [
        0 => 1,
        1 => 1,
        2 => 1
    ]
5.object - объект
    class A {}
    $object = new A();
6.resource - ресурс: $resource = fopen("/file.txt", "r");
7.boolean - булев тип: true, false
8.null - нуль: null.
</code>
</pre>
    <p>
        Начнем с первого типа. Число. Создадим две переменных. Каждой переменной присовоим числовое значение.
        Затем поместим сумму этих двух перменных в третью и проверим тип. В результате var_dump жолжен показать соответствующие
        значения, а так же тип integer для всех трех переменных.
    </p>
</div>
<div class="separator"></div>
<pre>
<code class="php">
$a = 1;
$b = 2;
$c = $a + $b;
var_dump($a);
var_dump($b);
var_dump($c);
</code>
</pre>