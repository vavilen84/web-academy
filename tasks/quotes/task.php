<div class="task">
    Если мы поместим переменную в двойные кавычки - они будут обработаны интерпретатором. Если в одинарные -
    название переменной будет считаться строкой.
<pre>
<code class="php">
$number = 123;
/*
Следующая строчка выведет: This is parsed integer 123
*/
echo "This is parsed integer $number";
/*
Следующая строчка выведет: This is parsed integer $number
*/
echo 'This is just string $number';
</code>
</pre>
    Давайте убедимся сами.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$number = 123;
echo "$number";
</code>
</pre>