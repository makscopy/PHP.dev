<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?=  "проверка"; // Таким образом можно просто написать текст ?> 

<?php
echo '<hr>';

echo "Some text";
echo '<hr>';
// Вывод даты
echo date(DATE_RSS);
echo '<hr>';
// Типы данных
$numer = 23456;
$str1 = "Hello, world - $numer"; //  в таких кавычках на страницу выведется содержание переменной
$str2 = "Hello, world - \$numer"; // (Содержимое переменной не выведится)  Обратный слэш (экранирование) подавляет вывод переменной
$str = 'Hello, world - $numer'; // А в таких всё выведится как текст

echo $str1;
echo '<br>';
echo $str;
echo '<br>';
echo $str2;

echo '<hr>';
// Конструкции isset(), empty(), gettype().

$var = 'just text';
$num = '123';

$status = isset($var); // если есть переменная = true 
// $status = empty($var); // нет переменной, пустая строка, '0', 'false' тогда = true
echo $status;

echo '<hr>';

$I_am = 'Я есть';

if (isset($I_am)) {
    echo "Переменная $I_am существует";
}

echo '<hr>';

echo gettype($I_am); // выведет string  определяет тип значения
echo '<hr>';

// на 'is_'  начинаются поверки на все возможные значения и типы.
$num2 = 1234;
echo is_int($num2); // выведет 1. Что означает да это интеджер


// Классы и объекты

echo '<h2>Классы и объекты</h2>';
echo '<hr>';
// public, private, protected - спецификаторы доступа

class SomePeople { // В одном скрипте может находится только один класс с таким именем
    public $age = 28; // public используется для задания области видимости переменной
    public $name = 'maksim';
    public static $people = 1; // Статическая переменная класса
}

$max = new SomePeople; // создание объекта
$max -> age = 30; // присвоение значения
$max -> name = 'maksim'; // Присвоение значения

echo $max->name, '<br>';
unset($max); // удаление переменной
echo $max->name; // не выведится


class Location {
    public $x;
    private $y;
    public $z;
   
}

$loc = new Location();
echo $loc->x = 23.22,'<br>';
 // echo  $loc->y = 54.23, '<br>';  // Вызовет ошибку, так как переменная доступна только внутри класса
echo $loc->z = 54.23, '<br>';


 // Константы 

 echo '<h2>Константы</h2>';

 define('PI', "3,14");
 
 echo PI; // твк выводится константа

 echo '<hr>';

 // Дз






echo __LINE__; // на какой строке написано
echo '<br>';
echo __FILE__; // полный путь к файлу
echo '<br>';
echo __FUNCTION__;
echo '<br>';
echo __CLASS__;
echo '<br>';
echo __METHOD__;
echo '<br>';
echo __DIR__; // В какой папке находится
echo '<br>';
echo PHP_VERSION; // проверка версии php


/*

ДЕЛАЕМ:
Написать код с задействованием, каждой константы приведенной ниже:
__LINE__
__FILE__
__FUNCTION__
__CLASS__
__METHOD__
__DIR__
PHP_VERSION
OS_VERSION
PHP_EOL

*/ 
echo '<hr>';
////////////////////////////

// require_once 'file.php';       echo ' (относительный путь)';


require_once 'C:/Users/Acer/Desktop/OpenServer/domains/BigCourse/file.php';      echo ' (абсолютный путь)';

echo '<hr>';

class ConstantClass{
    const Name = "const";
}

echo ConstantClass::Name; // получаем содержимое константы Name
echo '<hr>';


if(defined('ConstantClass::Name')) { // проверяем есть ли такая константа
    echo 'Константа оределена <br>';
} else {
    echo 'Константа не определена <br>';
}

echo '<hr>';


 //                   Операторы

 $str1 = "хоошо, что я учу";
 $str2 = " PHP";

 echo $str1.$str2;

 echo '<hr>';

 echo (int)(5 / 3); // так можно привести к целому
 echo '<hr>';

 // Инкремент и декремент
$number = 4;
$num = 3;


 echo $number ** $num; // получение $number в трейтьей степени
 echo '<hr>';
 // Инкримент ++ 
 // Дикримент --
 
 echo ++$number.'<br>'; // префиксный декримент 
 echo $number++; // посфиксный декремент

 echo '<hr>';


 $str1 = 'abc';
 echo ++$str1.'<br>'; // получится a и с d
 echo --$str1.'<br>'; // ничего не изменится


// Логические операторы OR и AND

if (file_get_contents("C:\Users\Acer\Desktop\OpenServer\domains\BigCourse/test.txt")) {  // Если получаем файл через абсолютный путь
    $content = file_get_contents("C:\Users\Acer\Desktop\OpenServer\domains\BigCourse/test.txt"); // то присваиваем его получение в переменную
    echo $content; // выводим полученный файл
}
echo '<hr>';
// тернарный оператор

// выражение1 ? выражение2 : выражение3  
// тернарный оператор это сокращённый вариант  if;   else



// Циклы

$arr = [1, 2, 3];

list($one, $two, $three) = $arr;  // можно получить элементы массива таким образом

echo $two;
echo '<hr>';


//                           Работа с параметрами функции

function mylist(...$items) { // три точки означает что здесь какое-то колличество параметров
    foreach ($items as $v) {
        echo $v.'<br>';
    }
}

mylist('Vasili', 'Antoshka', 'Genadi', 'Albert'); //  вызываем функцию с добавленными параметрами
 
$arr = ['PHP', 'Python', 'JS', 'HTML', 'CSS'];

mylist(...$arr); // так можно добавить массив



// возврат функцией массива

function myFriends() {
    $kate = 'Kate';
    $masha = 'Maria';
    $petr = 'Peter';

    return [$kate, $masha, $petr];
} 
echo '<pre>'; // теги пре выводят массив красиво
print_r(myFriends());
echo '<pre>';

echo '<hr>';

//                              Вложенные и динамические функции


function box() {
    function inn() {
        echo 'TEST';
    }
    inn(); // что-бы запустилась inn её нужно вызвать внутри 
}

// $dimam = box(); // создание динамическаой функции 

box();


// Анонимная функция

$some = function (...$arr1) {
    foreach($arr1 as $val) {
        echo $val.'<br>';
    }
};  // тут нужна точка с запятой

$some(12, 34, 54, 32, 54);  // вызов ананимной функции