<div class="task">
    <p>
        <strong>echo</strong> — Выводит одну или более строк
        <div class="func-description">
            void echo ( string $arg1 [, string $... ] )
        </div>
        Слово Void в описании функции говорит о том, что функция не возвращает ничего. Результат ее выполнения нельзя записать
    в переменную. Но об этом позже. Функцкия может принимать один аргумент, а может много. Следующие две строчки эквивалентны.
    </p>
<pre>
<code class="php">
echo "Hello World!" , " ", "I am Hacker!";
echo "Hello World! I am Hacker!";
</code>
</pre>
        так что для простоты мы не будем использовать много аргументов. Выведите строчку "This is string". Как Вы успели заметить,
        в конце каждого выражения мы ставим точку с запятой. Саму строку помещаем в кавычки. Но об этом дальше.
</div>
<div class="separator"></div>
<pre>
<code class="php">
echo "This is string";
</code>
</pre>