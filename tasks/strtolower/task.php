<div class="task">
    <strong>strtolower</strong> — Преобразует строку в нижний регистр
    <div class="func-description">
        string strtolower ( string str )
    </div>
<pre>
<code class="php">
$string = 'Hello World!';
/*
Строчка ниже выведет 'hello world!'
*/
echo strtolower($string);
</code>
</pre>
    Преобразуем все символы в строке в нижний регистр
</div>
<div class="separator"></div>
<pre>
<code class="php">
$string = 'eMAIL@Example.coM';
echo strtolower($string);
</code>
</pre>