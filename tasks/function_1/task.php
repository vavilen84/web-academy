<div class="task">
    Как мы узнали из прошлой задачи, тело функции расположено между фигурными скобками. А круглые скобки служат для
    передачи аргументов(каких то данных, которые нам нужны для работы функции). Пусть наша функция нам вернет полный заголовок,
    а сам язык мы передадим в аргументе.
</div>
<div class="separator"></div>
<pre>
<code class="php">
/*
$language - это аргумент, содержащий наш язык
*/
function getLanguageTitle ($language) {
    /*
    объявим переменную и запишем туда строку с использованием нашего аргумента, используя конкатенцию
    */
    $title = "Here we study " . $language . " programm language";
    /*
    вернем результат
    */
    return $title;
}
/*
объявили переменную и положили туда строку
*/
$language = "PHP";
/*
передали функции аргумент и записали результат работы в переменную $result
*/
$result = getLanguageTitle($language);
/*
вывели на экран
*/
echo $result;
</code>
</pre>