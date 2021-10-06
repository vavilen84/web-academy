<div class="task">
    <strong>array_keys</strong> — Выбрать все ключи массива
    <div class="func-description">
        array array_keys ( array input [, mixed значение_для_поиска] )
    </div>
    <pre>
<code class="php">
$metallicaAlbums = [
    '1983' => 'Kill em all',
    '1984' => 'Ride the Lightning',
    '1986' => 'Master of Puppets',
];
$keys = array_keys($metallicaAlbums);
/*
Массив $keys будет такой ['1983', '1984','1986']
*/
</code>
</pre>
    Выберем коды стран
</div>
<div class="separator"></div>
<pre>
<code class="php">
$countries = [
    '+1' => 'Amercia',
    '+355' => 'Albania',
    '+32' => 'Belgium',
];
$codes = array_keys($countries);
var_dump($codes);
</code>
</pre>