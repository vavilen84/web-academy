<div class="task">
    <strong>array_chunk</strong> — Разбить массив на части
    <div class="func-description">
        array array_chunk ( array input, integer size [, bool preserve_keys] )
    </div>
    input - массив, который разбиваем на части. size - колчество значений массива в каждой части. preserve_keys - не
    обязательный параметр, сохраняем ли ключи. Разбъем по сезонам массив месяцев.
    <pre>
<code class="php">
$month = [
    'Jan' => 'January',
    'Feb' => 'February',
    'Mar' => 'March',
    'Apr' => 'April',
    'May' => 'May',
    'Jun' => 'June',
    'Jul' => 'July',
    'Aug' => 'August',
    'Sep' => 'September',
    'Oct' => 'October',
    'Nov' => 'November',
    'Dec' => 'December'
];
$seasons = array_chunk($month, 3);
var_dump($seasons);
/*

Вывод будет следующим

array(4) {
  [0]=>
  array(3) {
    [0]=>
    string(7) "January"
    [1]=>
    string(8) "February"
    [2]=>
    string(5) "March"
  }
  [1]=>
  array(3) {
    [0]=>
    string(5) "April"
    [1]=>
    string(3) "May"
    [2]=>
    string(4) "June"
  }
  [2]=>
  array(3) {
    [0]=>
    string(4) "July"
    [1]=>
    string(6) "August"
    [2]=>
    string(9) "September"
  }
  [3]=>
  array(3) {
    [0]=>
    string(7) "October"
    [1]=>
    string(8) "November"
    [2]=>
    string(8) "December"
  }
}

Мы получили двумерный массив из 4х новых элементов.
Каждый новый элемент состоит из 3х элементов входящего массива.
Теперь каждый новый элемент представляет собой сезон.
Ключи (Jan, Feb, ...) не сохранились, т.к. мы не передали 3й необязательный аргумент preserve_keys d значении true
*/
</code>
</pre>
    А теперь сохраним ключи
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
var_dump(array_chunk($cars, 2, true));
</code>
</pre>