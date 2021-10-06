<div class="task">
    <strong>substr</strong> — Возвращает подстроку (часть строки)
    <div class="func-description">
        string substr ( string string, int start [, int length] )
    </div>
    string - строка, откуда выбираем подстроку. start - число, с какого символа начинаем. length - длинна подстроки.
<pre>
<code class="php">
$string = 'email@example.com';
/*
Помним что в PHP порядоковый счет начинается с нуля, а не с единицы.
Строка ниже выведет 'email@example.com', тоесть без изменений
*/
echo substr($string, 0);
/*
Строка ниже выведет 'mail@example.com'
*/
echo substr($string, 1);
/*
Укажем длинну в четыре символа и получим 'mail'
*/
echo substr($string, 1, 4);
/*
Если аргумент start будет отрицательным, то отсчет будет идти с конца
Строчка ниже выведет 'com'
*/
echo substr($string, -3);
</code>
</pre>
    Получим имя домена без укзания протокола соединения и адреса страницы. Немного усложним задание - сделаем поиск нужной нам
    части строки динамической (тоесть не будем явно задавать начало и конец искомой строки, так как строки могут быть разные,
    а нам нужно получить в любом случае только доменное имя).
</div>
<div class="separator"></div>
<pre>
<code class="php">
/*
https://vk.com/id0000000 - это строка запроса
https:// - протокол соединения.
vk.com - доменное имя
id0000000 - все что идет после доменного имени - адрес страницы
*/
$email = 'http://example.com/some-url';
/*
Предположим, что мы знаем какой будет протокол. Предположим он будет http. Соответственно смело обрезаем его
*/
$email = trim($email, 'http://');
/*
Теперь строка в переменной $email будет вот такая 'example.com/some-url'. Дальше обрежем все то, что после слеша.
    Для этого надо найти его позицию в строке. В нашем случае это будет 11. Но доменное имя может быть и длиннее,
соответственно и позиция слеша будет другая, поетому мы используем функцию strpos.
*/
$slashPosition = strpos($email, '/');
/*
И воспользуемся нашей функцией substr. стартуем с 0 позиции - тоесть с начала строки.
И длинну укажем позицией вхождения слеша.
*/
$email = substr($email, 0, $slashPosition);
echo $email;
</code>
</pre>
$email = 'http://example.com/some-url';
$email = trim($email, 'http://');
$slashPosition = strpos($email, '/');
$email = substr($email, 0, $slashPosition);
echo $email;