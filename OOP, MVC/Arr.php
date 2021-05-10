<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Реализуйте класс Arr, похожий на тот, который я реализовал выше.
// В отличие от моего класса метод add вашего класса параметром должен принимать массив чисел.
//  Все числа из этого массива должны добавляться в конец массива $this->numbers.

class Arr
{
  private $numbers = []; // задаем начальное значение свойства как []
  
  public function add($num)
  {
    $this->numbers[] = $num;
  }
  
  public function getSum()
  {
    return array_sum($this->numbers);
  }
}

$mass = [4, 5, 6];

$arr = new Arr;
$arr->add(1, 2, 3);

echo $arr->getSum(); // выведет 0


// не понял как решить 