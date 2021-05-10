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

class User{
    public $surname; // фамилия
    public $name; // имя
    public $patronymic; // отчество
    
    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }    
}

$user = new User('Иванов', 'Иван', 'Иванович');
	
$props = ['surname', 'name', 'patronymic'];
echo $user->$props[0]; //!! так работать не будет
// Для того, чтобы такое сложное имя свойства заработало,
//  его нужно взять в фигурные скобки, вот так:
echo $user->{$props[0]}.'<br>';
echo $user->{$props[1]}.'<br>';
echo $user->{$props[2]}.'<br>';

// Скопируйте мой код класса User и массив $props.
//  В моем примере на экран выводится фамилия юзера. Выведите еще и имя, и отчество.





//       Имя свойства также может быть из функции:
/* 	function getProp()
	{
		return 'surname';
	}
	
	$user = new User('Иванов', 'Иван', 'Иванович');
	echo $user->{getProp()}; // выведет 'Иванов' */


    //  Имя свойства может быть даже свойством другого объекта.
    // Проиллюстрируем кодом. Пусть для примера дан объект Prop,
    // который в свойстве value будет содержать название свойства объекта User:


    /*
    class Prop
	{
		public $value;
		
		public function __construct($value)
		{
			$this->value = $value;
		}
	}

    // Давайте выведем фамилию юзера с помощью объекта Prop:

    $user = new User('Иванов', 'Иван', 'Иванович');
	$prop = new Prop('surname'); // будем выводить значение свойства surname
	
	echo $user->{$prop->value}; // выведет 'Иванов'
    */


    // Имя свойства также может браться из метода другого объекта:

    /*
    	class Prop
	{
		private $value;
		
		public function __construct($value)
		{
			$this->value = $value;
		}
		
		public function getValue()
		{
			return $this->value;
		}
	}
// Давайте выведем фамилию юзера:

	$user = new User('Иванов', 'Иван', 'Иванович');
	$prop = new Prop('surname'); // будем выводить значение свойства surname
	
	echo $user->{$prop->getValue()}; // выведет 'Иванов'

    */