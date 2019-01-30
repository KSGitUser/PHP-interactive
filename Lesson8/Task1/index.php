<?php 
/*  1. Создайте скрипт, который через HTML-форму принимал бы координаты двух точек в декартовой системе координат, а после нажатия на кнопку типа submit выводил бы расстояние между двумя точками. */

include('calculate.php') //добавляем код из другого файла для вычисления

?>


<form>
<label> Введите координаты 1й точки x=<input type='text' name='p1[x]'> y=<input type='text' name='p1[y]'></label>
<br />
<label> Введите координаты 2й точки x=<input type='text' name='p2[x]'> y=<input type='text' name='p2[y]'></label>
<br />
<button type='submit'>Вычислить растояние</button>
</form>
<br/>
<p><?php echo $message ?></p>
