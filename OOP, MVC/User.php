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
/*
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
*/




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
/*
	class User
	{
		private $name;
		private $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}

	$user = new User('Коля', 21);
	
	$method = 'getName';
	echo $user->$method(); // выведет 'Коля'
	echo '<br>';
	// Если имя метода получается из массива, то такое обращение к методу 
	//следует брать в фигурные скобки вот таким образом (круглые скобки будут снаружи фигурных):

	$methods = ['getName', 'getAge'];
	echo $user->{$methods[0]}(); // выведет 'Коля'
	echo '<br>';

			// Задача
//	Пусть массив $methods будет ассоциативным с ключами method1 и method2:


	$methods = ['method1' => 'getName', 'method2' => 'getAge'];

// Выведите имя и возраст пользователя с помощью этого массива.

echo $user->{$methods['method1']}().' ';
echo $user->{$methods['method2']}();
*/



//                   задача

// Сделайте класс User, у которого будут приватные свойства 
// surname (фамилия), name (имя) и patronymic (отчество).
// Эти свойства должны задаваться с помощью соответствующих сеттеров.

// Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке, 
// а самым последним методом в цепочке можно было вызвать метод getFullName, 
// который вернет ФИО юзера (первую букву фамилии, имени и отчества).
/*
class User
{
	private $name;
	private $surname;
	private $patronymic;
	
	
    public function setSurname($surname) {
            $this->surname = $surname;
			return $this;
        }
    public function setName($name) {
            $this->name = $name;
			return $this;
        }
    public function setPatronymic($patronymic) {
            $this->patronymic = $patronymic;
			return $this;
        }

		public function getFullName() {
			return mb_substr($this->name, 0, 1).'. '.mb_substr($this->surname, 0, 1).'. '.mb_substr($this->patronymic, 0, 1).'.';
		}
	

}

// echo mb_substr($test, 0, 1);  // выведет первую букву в строке
$user = new User;
echo $user->setName('Василий')->setSurname('Петров')->setPatronymic('Поликарпыч')->getFullName(); // получилось!
*/

// 

//                             Перезапись методов родителя в классе потомке

							/*

 class User
	{
		private $name;
		protected $age; // изменим модификатор доступа на protected
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			if(strlen($name) < 10){  // тут выполняется проверка на менее 10 символов в строке
			$this->name = $name;
		}
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function setAge($age)
		{
			if ($age >= 18) {
				$this->age = $age;
			}
		}
	}
*/

	// От класса User наследует класс Student с приватным свойством course, его геттером и сеттером:

/*
	class Student extends User
	{
		private $course;
		
		public function getCourse()
		{
			return $this->course;
		}
		
		public function setCourse($course)
		{
			$this->course = $course;
		}
	}
*/
	// Предположим теперь, что метод setAge, который Student
	// наследует от User нам чем-то не подходит, например,
	//  нам нужна также проверка того, что возраст студента до 25 лет.

// То есть проверка на то, что возраст более 18 лет нас устраивает,
// но хотелось бы иметь добавочную проверку на то, что он меньше 25.
// Для решения проблемы мы используем то, что в PHP в классе-потомке
// разрешено сделать метод с таким же именем, как и у родителя,
//  таким образом переопределив этот метод родителя на свой.

// Как раз то, что нам нужно.
// Итак, давайте напишем студент свой setAge в классе Student.
// Наш setAge будет проверять то, что возраст студента меньше от 18 до 25 лет:

/*
class Student extends User
{
	private $course;
	
	// Перезаписываем метод родителя:
	public function setAge($age)
	{
		if ($age >= 18 and $age <= 25) {
			$this->age = $age;
		}
	}
	// выполняю задание
	public function setName($name)
	{
	if (strlen($name) > 3) // проверяю длинну строки
	{
		$this->name = $name;
	}
	}
	
	public function getCourse()
	{
		return $this->course;
	}
	
	public function setCourse($course)
	{
		$this->course = $course;
	}
}
}

// Так как наш метод setAge использует свойство age от родителя,
//  то в родителе это свойство надо объявить как защищенное:
// protected $age; // изменим модификатор доступа на protected


// Давайте проверим работу переопределенного метода setAge:


$student = new Student; 
	
$student->setAge(24); // укажем корректный возраст
echo $student->getAge(); // выведет 24 - возраст поменялся

$student->setAge(30); // укажем НЕкорректный возраст
echo $student->getAge(); // выведет 24 - возраст НЕ поменялся


// задача 

// Модифицируйте код класса User так, чтобы в методе 
// setName выполнялась проверка того, что длина имени более 3-х символов и менее 10 символов.
// Пусть метод setName класса Student использует метод 
// setName своего родителя, чтобы выполнить часть проверки.  // сделано 

*/


//             Перезапись конструктора родителя в потомке

/*
class User
{
	protected $name; // объявим свойство защищенным
	protected $age;  // объявим свойство защищенным
	
	// Конструктор объекта:
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
}

// Все замечательно, но есть проблема: мы бы хотели при создании
//  объекта класса Student третьим параметром передавать еще и курс, вот так:
// ('Коля', 19, 2); // это пока не работает

// Самое простое, что можно сделать, это переопределить 
// конструктор родителя своим конструктором, забрав из родителя его код:


class Student extends User
{
	private $course;
	
	// Конструктор объекта:
	public function __construct($name, $age, $course)
	{
		// Дублируем код конструктора родителя:
		$this->name = $name;
		$this->age = $age;
		
		// Наш код:
		$this->course = $course;
	}
	
	public function getCourse()
	{
		return $this->course;
	}
}

$student = new Student('Коля', 19, 2); // сработает конструктор родителя
	
echo $student->getName(); // выведет 'Коля'
echo $student->getAge(); // выведет 19
echo $student->getCourse(); // выведет 2
*/



//                      Используем конструктор родителя


// Сделайте класс User, в котором будут следующие свойства только для чтения:
//  name (имя), surname (фамилия), Начальные значения этих свойств должны
//  устанавливаться в конструкторе. Сделайте также геттеры этих свойств.

// Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения
//  работника в формате год-месяц-день Запишите ее в свойство birthday.
//  Сделайте геттер для этого свойства.

// Сделайте приватный метод calculateAge, который параметром будет принимать дату рождения,
//  а возвращать возраст с учетом того, был ли уже день рождения в этом году, или нет.

// Сделайте так, чтобы метод calculateAge вызывался в конструкторе объекта,
// рассчитывал возраст пользователя и записывал его в приватное свойство age.
// Сделайте геттер для этого свойства.


                 // не могу понять как сделать 
class User
{
	protected $name; // объявим свойство защищенным
	protected $surname;  // объявим свойство защищенным
	protected $birthday;
	
	private $age;  // дата рождения
	
	
	// Конструктор объекта:
	public function __construct($name, $surname, $birthday)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = $birthday;
		
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getSurname()
	{
		return $this->surname;
	}
	public function getAge() // геттер для age
{
	return $this->age;
}


	protected function calculateAge($birthday) { //подсчёт возраста
		//substr(строка, откуда, [сколько]);
// вырезаем год 
 $DATE = substr($birthday , 0, 4); // 1994 
// отнимаем от текущего года
 $this->age = date('Y') - $DATE; // присваиваю $age возраст 27 лет 
}

}

$user = new User('Лёша', 34, '1994-6-25', $age);

echo $user->getAge();


// Сделайте класс Employee, который будет наследовать от класса User.
//  Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника.
//  Зарплата должна передаваться четвертым параметром в конструктор объекта.
//  Сделайте также геттер для этого свойства.

class Employee extends User{
public $salary;
}

$emloyee = new Employee('Лёша', 34, '1994-6-25');