<div class="task">
    <strong>array_merge</strong> — Слить два или большее количество массивов
    <div class="func-description">
        array array_merge ( array array1, array array2 [, array ...] )
    </div>
    <pre>
<code class="php">
$winter = [
    'December',
    'January',
    'February'
];
$autumn = [
    'March',
    'April',
    'May'
];
$spring = [
    'June',
    'July',
    'August'
];
$autumn = [
    'September',
    'October',
    'November'
];
$months = array_merge($winter, $autumn, $spring, $autumn);
/*
Вывод var_dump($months) будет таким
array(12) {
  [0]=>
  string(8) "December"
  [1]=>
  string(7) "January"
  [2]=>
  string(8) "February"
  [3]=>
  string(9) "September"
  [4]=>
  string(7) "October"
  [5]=>
  string(8) "November"
  [6]=>
  string(4) "June"
  [7]=>
  string(4) "July"
  [8]=>
  string(6) "August"
  [9]=>
  string(9) "September"
  [10]=>
  string(7) "October"
  [11]=>
  string(8) "November"
}
*/
</code>
</pre>
    Сольем два массива с марками авто
</div>
<div class="separator"></div>
<pre>
<code class="php">
$ourCars = [
    'zaz',
    'vaz'
];
$importCars = [
    'bmw',
    'opel'
];
$allCars = array_merge($ourCars, $importCars);
var_dump($allCars);
</code>
</pre>