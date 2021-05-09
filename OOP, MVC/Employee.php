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
// Подключите к файлу index.php класс Employee, создайте два объекта этого класса
// с произвольными данными, выведите на экран сумму их зарплат.


class Employee 
{
public $name;
public $surname;
public $patronymic; // отчество
public $salary;
}

$employee1 = new Employee;
$employee2 = new Employee;

$employee1->salary = 2600;
$employee2->salary = 3000;