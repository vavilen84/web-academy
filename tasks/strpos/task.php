<div class="task">
    <strong>strpos</strong> — Возвращает позицию первого вхождения подстроки
    <div class="func-description">
        int strpos ( string haystack, string needle [, int offset] )
    </div>
    haystack - где ищем. needle - что ищем. Если набор символов не найден - функция вернет false(рассмотрим позже).
    <pre>
<code class="php">
$string = "Hello World!";
/*
пример ниже выведет 0. В PHP нумерация начинается с 0 а не с единицы.
*/
strpos($string, 'H');
echo strpos($string, 'e'); // 1
echo strpos($string, 'o'); // 4
/*
пример ниже не выведет ничего. Так как функция вернет false (рассмотрим позже)
*/
echo strpos($string, 'X');
</code>
</pre>
    Найдем позицию вхождения кода страны.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$string = "My contact phone: +1-800-111-11-11.";
echo strpos($string, "+1");
</code>
</pre>