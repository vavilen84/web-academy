<div class="task">
    <strong>ucwords</strong> — Преобразует первый символ каждого слова строки в верхний регистр
    <div class="func-description">
        string ucwords ( string str )
    </div>
<pre>
<code class="php">
$string = 'hello world!';
/*
Строчка ниже выведет 'Hello World!'
*/
echo ucwords($string);
</code>
</pre>
    Выровняем строчку перед тем как сделать первые буквы слов заглавными
</div>
<div class="separator"></div>
<pre>
<code class="php">
$string = 'helLO WOrld!';
echo ucwords(strtolower($string));
</code>
</pre>