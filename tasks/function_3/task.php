<div class="task">
    Некоторые аргументы можно не передавать, задав им при этом значения по умолчанию
</div>
<div class="separator"></div>
<pre>
<code class="php">
function getData ($brand, $year = 1980) {
    return $brand . ' ' . $year . '. ';
}
echo getData('KAMAZ', 2001);
echo getData('ZIGULI');
</code>
</pre>
