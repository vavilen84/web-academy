<div class="task">
    Массив - один из 8ми типов данных в PHP. Массив может быть пустым или состоять из элементов. Элемент в свою очередь
    состоит из ключа и значения. В PHP версией 5.3 и ниже массив объявляется так array(1, 2, 3). PHP версии 5.4 и выше
    позволяет объявлять массив при помощи квадратных скобок [1, 2, 3]. При этом старый синтаксис будет работать,
    но мы не будем его использовать. Создадим массив с фруктами. Как Вы уже заметили, элементы разделяем запятыми.
    В данном примере каждый эелемент будет представлять собой строку (тип данных строка). Apple и Banana - это значения элементов.
    Ключи мы явно не указываем - PHP их сгенерирует сам по порядку начиная с нуля.
</div>
<div class="separator"></div>
<pre>
<code class="php">
$food = ['Apple', 'Banana'];
var_dump($food);
</code>
</pre>