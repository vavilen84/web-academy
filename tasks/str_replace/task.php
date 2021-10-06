<div class="task">
    <strong>str_replace</strong> — Заменяет все вхождения строки поиска на строку замены
    <div class="func-description">
        mixed str_replace ( mixed search, mixed replace, mixed subject [, int &count] )
    </div>
    Первый аргумент (mixed search) - то какие символы хотим заменить. Слово mixed нам указывает на то, что это может быть
    число, строка или массив(рассмотрим позже). Второй аргумент(replace) - на какие символы будем менять. Третий аргумент(subject) - где будем менять.
     Четвертый аргумент необязателен(на это нам указывают квадратные скобки) - число. Знак амперсанда(&) говорит нам
     что это переменная передана по ссылке(рассмотрим в следующих уроках). В нее будет помещена сумма всех замен.
    Заменим слово Javascript на слово PHP.
</div>
<div class="separator"></div>
<pre>
<code class="php">
echo str_replace('Javascript', 'PHP', 'Javascript is the best. I learn Javascript.');
</code>
</pre>