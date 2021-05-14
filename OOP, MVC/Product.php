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


//           Передача объектов по ссылке

// Сделайте класс Product (продукт), в котором будут следующие свойства:
//  name (название продукта), price (цена).

// Создайте объект класса Product, запишите его в переменную $product1.

// Присвойте значение переменной $product1 в переменную $product2.
//  Проверьте то, что обе переменные ссылаются на один и тот же объект.
/*
class Product 
{
    public $name = 'Егор';
    public $price;
}

$product1 = new Product;

$product2 = $product1; // присваиваю 
// проверка
echo $product1->name;
echo '<br>';
echo $product2->name;
*/



//                               Передача объектов параметрами

// Сделайте класс Product (товар), в котором будут приватные свойства name
// (название товара), price (цена за штуку) и quantity.
//  Пусть все эти свойства будут доступны только для чтения.

// Добавьте в класс Product метод getCost, который будет находить 
// полную стоимость продукта (сумма умножить на количество).

// Сделайте класс Cart (корзина). Данный класс будет хранить список
//  продуктов (объектов класса Product) в виде массива.
//  Пусть продукты хранятся в свойстве products.

// Сделайте класс Cart (корзина). Данный класс будет хранить список 
// продуктов (объектов класса Product) в виде массива. 
// Пусть продукты хранятся в свойстве products.

// Реализуйте в классе Cart метод add для добавления продуктов.

// Реализуйте в классе Cart метод remove для удаления продуктов.
// Метод должен принимать параметром название удаляемого продукта.

// Реализуйте в классе Cart метод getTotalCost,
// который будет находить суммарную стоимость продуктов.

class Product
{
    private $name;
    private $price;
    public $quantity;
    public $products = [];

    public function getCost($item1) {
       return $this->price * $this->quantity;

    }
}

class Cart
{
    public $products = ['Трусы', 'Футболка'];

    		// Добавляем новый товар:
		public function add($product)
		{
			$this->products[] = $product; 
		}

        public function remove($ProductName) {
            foreach($this->products as $key => $elem) {
                if($elem == $ProductName) {
                    unset($this->products[$key]);
                }
            }
        }

       
}



$cart = new Cart;
$cart->add('Рубашка'); // добавляю третий товар в массив

var_dump( $cart->products); // проверка
echo '<br>';

$cart->remove('Футболка'); // удаляю футболку
var_dump( $cart->products); // вывожу массив без футболки