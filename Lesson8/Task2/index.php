<?php
/* 2. Создайте HTML-форму, состоящую из двух текстовых полей, в первом из которых вводится количество товарных позиций, а во втором — их цена. Обработчик формы должен проверить, является ли введенная в первом поле информация целым числом, а во втором — удовлетворяющим денежному формату. Если все верно, необходимо вывести произведение этих двух чисел. */
include('calculate.php');

?>

<form method='post' >
<label> Введите количество товара: <input type='text' name='qty'></label>
<br />
<label> Введите цену товара: <input type='text' name='price'></label>
<br />
<button type='submit'>Посчитать стоимость всего товара</button>
</form>
<p><?=$message?></p>
