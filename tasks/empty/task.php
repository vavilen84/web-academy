<div class="task">
    <strong>empty</strong> — Проверяет, пуста ли переменная
    <div class="func-description">
        bool empty ( mixed $var )
    </div>
    Если обратиться к несуществующему ключу, то получим ошибку (уровень E_NOTICE).
<pre>
<code class="php">
$cars = [
    'KAMAZ' => 1000,
    'ZIGULI' => 100
];
/*
Строчка ниже выведет ошибку 'PHP Notice:  Undefined offset: TAVRIA'
*/
echo $cars['TAVRIA'];
</code>
</pre>
    Ошибка не критическая и скрипт продолжит свою работу, но таких ошибок допускать нельзя. Ошибка очень частая. Также,
    очень частая ошибка - обращение к несуществующим переменным.
<pre>
<code class="php">
/*
Строчка ниже выведет ошибку 'PHP Notice:  Undefined variable: superCars'
*/
echo $superCars;
</code>
</pre>
    Чтобы избегать подобных ошибок, нужно всегда проверять ключи массива на существование, а так же можно проверять
    переменные на существование (это реже понадобится, но иногда уместно).
    Но функция проверяет нетолько на существование, но и на то, "пустые" ли проверяемые данные. На этом подробнее
    остановимся в следующих уроках. А пока проверим данные на существование.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$city = 'London';
$cars = [
    'ZIGULI' => 100,
    'KAMAZ' => 1000
];
var_dump(
    empty($city),
    empty($country),
    empty($cars['ZIGULI']),
    empty($cars['TAVRIA'])
);
</code>
</pre>