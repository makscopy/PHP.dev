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

// Сделайте класс City (город), в котором будут следующие свойства:
 // name (название города), population (количество населения).
 // Создайте 5 объектов класса City, заполните их данными и запишите в массив.
 // Переберите созданный вами массив с городами циклом и выведите города и их население на экран.

 class City
 {
     public $name;
     public $population;

     public function __construct($name, $population){
        $this->name = $name;
        $this->population = $population;
       
    }
   
}


$citys = [
$kemerovo = new City('Кемерово', 500000),
$Moskow = new City('Москва', 15000000),
$Bangkok = new City('Бангкок', 1500000),
$Barselona = new City('Барселона', 1500000),
$Lissabon = new City('Лиссабон', 600000)
];

foreach ($citys as $city) {
  echo  $city->name .' - '. $city->population. '<br>';
}

 
