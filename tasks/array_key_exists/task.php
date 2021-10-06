<div class="task">
    <strong>array_key_exists</strong> — Проверить, присутствует ли в массиве указанный ключ
    <div class="func-description">
        bool array_key_exists ( mixed key, array input )
    </div>
    key - ключ, который ищем. input - массив, в котором ищем ключ. Функция возвращает true (если ключ найден) или
    false (если ключ не найден).
    <pre>
<code class="php">
$month = [
    'Jan' => 'January',
    'Feb' => 'February',
    'Mar' => 'March',
];
array_key_exists('Jan', $month); //true
array_key_exists('abc', $month); //false
</code>
</pre>
    Проверим, есть ли в нашем массиве нужная нам марка авто
</div>
<div class="separator"></div>
<pre>
<code class="php">
$cars = [
    'zaz' => 100,
    'vaz' => 200,
    'maz' => 300,
    'kraz' => 400,
    'belaz' => 500
];
$car = 'bmw';
$result = array_key_exists($car, $cars);
var_dump($result);
</code>
</pre>