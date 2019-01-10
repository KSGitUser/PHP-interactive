<?php

/* 1. Создайте функцию is_odd(), которая принимает в качестве аргумента целое 
число и возвращает true, в случае если число нечетное и false — в противном 
случае.
*/

function is_odd($var)
{
    return ($var % 2) ? true : false;
}

var_dump(is_odd(3)); //true

var_dump(is_odd(6)); //false

/*   2. Создайте функцию sum(), которая принимает любое количество числовых 
аргументов и возвращает их сумму. */

function sum(...$args)
{
    foreach ($args as $value) {
        $result += $value;
    }
    return $result;
}

echo sum(1, 2, 3, 4) . "<br />"; //10

/* 3. Создайте функцию, которая по дате рождения пользователя возвращает его 
количество лет. */

function userAge($dateOfBirth)
{
    $datetime1 = date_create($dateOfBirth); // функция приобразющая строку в объет даты
    var_dump($datetime1);
    $datetime2 = date_create(date("d-m-Y"));
    $interval = date_diff($datetime1, $datetime2); // функция вычисляющая разницу между двумя датами
    return $interval->y; //получаем из объекта интервала количество лет
}

echo "Ваш возраст " . userAge("10-02-1995") . "<br />";

/* 4. *По желанию. Создайте массив с датами текущего месяца, выведите список 
дат в браузер, выделите субботы и воскресенья жирным шрифтом (тэгом <b>...</b>) */

function calenarOfMonth()
{
    $unixStamp = mktime(0, 0, 0, date("m"), date("d"), date("Y")); //определяем UNIXStamp для текущей даты
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, date("m", $unixStamp), date("y", $unixStamp)); // определяем количество дней в текущем месяце
    $arrayOfDays = [];
    for ($i = 1; $i <= $daysInMonth; $i++) {
        $numberOfWeek = date("w", mktime(0, 0, 0, date("m"), $i, date("y")));
        switch ($numberOfWeek) {
            case 0:$arrayOfDays[] = ['date' => $i,
                    'dayOfWeek' => '<strong>Воскресение</strong>'];
                break;
            case 1:$arrayOfDays[] = ['date' => $i,
                    'dayOfWeek' => 'Понедельник'];
                break;
            case 2:$arrayOfDays[] = ['date' => $i,
                    'dayOfWeek' => 'Вторник'];
                break;
            case 3:$arrayOfDays[] = ['date' => $i,
                    'dayOfWeek' => 'Среда'];
                break;
            case 4:$arrayOfDays[] = ['date' => $i,
                    'dayOfWeek' => 'Четверг'];
                break;
            case 5:$arrayOfDays[] = ['date' => $i,
                    'dayOfWeek' => 'Пятница'];
                break;
            case 6:$arrayOfDays[] = ['date' => $i,
                    'dayOfWeek' => '<strong>Суббота</strong>'];
        } // формируем массив состояший из подмоссивов с днями месяца и днями недели

    }
    return $arrayOfDays; // возвращаем полученный массив
}

$arrayOfDays = calenarOfMonth();

foreach ($arrayOfDays as $idx => $values) {
  echo "<p> Дата: {$values['date']} - день недели: {$values['dayOfWeek']}</p>";
} // выводим данные в браузер

/* 5. По желанию. Напишите функцию для вычисления произвольного числа
Фибоначчи. Числами Фибоначчи называется последовательность, в которой число
 равно сумме двух предыдущих чисел. Вызов функции fibonacci(10) должен
 возвращать число 55.  */

function fibonacci($n) {
    $index = pow(5, 0.5);
   
    $left = (1 + $index) / 2;
    $right = (1 - $index) / 2;
    
    return round((pow($left, $n) - pow($right, $n)) / $index);
} // вычисляем последовательность фибоначи по формуле Бине

 var_dump(fibonacci(10)); //55