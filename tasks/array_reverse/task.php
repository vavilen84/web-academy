<div class="task">
    <strong>array_reverse</strong> — Возвращает массив с элементами в обратном порядке
    <div class="func-description">
        array array_reverse ( array array [, bool preserve_keys] )
    </div>
    <pre>
<code class="php">
$month = [
    'Jan' => 'January',
    'Feb' => 'February',
    'Mar' => 'March',
];
$a = array_reverse($month);
var_dump($a);
/*
Вывод будет
array(3) {
  ["Mar"]=>
  string(5) "March"
  ["Feb"]=>
  string(8) "February"
  ["Jan"]=>
  string(7) "January"
}

*/
</code>
</pre>
    Перевернем массив чисел
</div>
<div class="separator"></div>
<pre>
<code class="php">
$integers = [111,222,333];
$reversed = array_reverse($integers);
var_dump($reversed);
</code>
</pre>