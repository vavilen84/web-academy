<div class="task">
    <strong>ucfirst</strong> — Преобразует первый символ строки в верхний регистр
    <div class="func-description">
        string ucfirst ( string str )
    </div>
<pre>
<code class="php">
$string = 'hello world!';
/*
Строчка ниже выведет 'Hello world!'
*/
echo ucfirst($string);
</code>
</pre>
    Выровняем строчку перед тем как сделать первый символ большим.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$string = 'helLO WOrld!';
echo ucfirst(strtolower($string));
</code>
</pre>