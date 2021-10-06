<div class="task">
    А теперь заменим используя массивы (более детальнее массивы будут рассмотрены в слеующих уроках). Заменим данные в
    телефонных номерах. Если первый аргумент массив, а второй строка - каждый эелемент из массива будет заменен на
    строку второго аргумента. Если же и второй аргумент массив - сервер будет искать соответствия, первый элемент поиска
    будет заменен на первый элемент замены итд.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$phoneNumbers = '+3-067-111-11-11; +3-095-111-11-11';
$a = str_replace(['067', '095'], '096', $phoneNumbers);
$b = str_replace(['+3', '067', '095'], ['+7', '926', '916'], $phoneNumbers);
var_dump($a, $b);
</code>
</pre>