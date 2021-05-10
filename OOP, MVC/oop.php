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
	// Объявляем класс:
	class User
	{
		public $name; // свойство для имени
		public $age; // свойство для возраста
        		// Создаем метод:
		public function show($str)
		{
			return $str. '!!!';
		}
	}
	
	// Создаем объект нашего класса:
	

    $user = new User; // создаем объект нашего класса
	$user->name = 'Коля'; // записываем имя в свойство name
	$user->age = 25; // записываем возраст в свойство age
	
	echo $user->name; // выводим записанное имя
	echo $user->age; // выводим записанный возраст
*/
   // Задача 2.1

 // Сделайте класс Employee (работник), в котором будут следующие свойства 
 // - name (имя), age (возраст), salary (зарплата).

/* class Employee
 {
    public $name; 
    public $age;
    public $salary;
 }

 // Создайте объект класса Employee, затем установите его свойства 
 // в следующие значения - имя 'Иван', возраст 25, зарплата 1000.

 $employee = new Employee;
 $employee->age = 25;
 $employee->name = 'Иван';
 $employee->salary = 1000;

 // Создайте второй объект класса Employee, установите его свойства 
 // в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

 $employee2 = new Employee;
 $employee2->age = 26;
 $employee2->name = 'Вася';
 $employee2->salary = 2000;

 // Выведите на экран сумму зарплат Ивана и Васи.
echo '<hr>';
 echo $employee->salary + $employee2->salary;

 // Выведите на экран сумму возрастов Ивана и Васи.
 echo '<hr>';
 echo $employee->age + $employee2->age;

// вызываю метод
 echo '<hr>';
 echo $user->show('Hello user!'); // '!!!'
 echo '<br>';
 // Давайте создадим объект нашего класса и проверим работу метода show():
*/
 class User_lol
 {
     public $name;
     public $age;
     
     public function show1()
     {
         // Возвращаем имя:
         return $this->name;
     }
 }
 
 $user = new User_lol; // создаем объект класса
 $user->name = 'Коля'; // записываем имя
 $user->age = 25; // записываем возраст
 
 // Вызываем наш метод:
 echo $user->show1(); // выведет 'Коля'

 class Employee_lol
 {
     public $name;
     public $age;
     public $salary;
     
     public function getName()
     {
         // Возвращаем имя:
         return $this->name;
     }
     public function getAge()
     {
         // Возвращаем возраст
         return $this->age;
     }
     public function getSalary()
     {
         // Возвращаем зарплату:
         return $this->salary;
     }

     
     // Сделайте в классе Employee метод checkAge, 
     // который будет проверять то, что работнику больше 18 лет
     // и возвращать true, если это так, и false, если это не так.

     public function checkAge()
     {
        if  ($this->age > 18) {
            return true;
        } 

    }

   // Сделайте метод setAge, который параметром будет принимать 
   // новый возраст пользователя.

   		// Метод для изменения возраста юзера:
		public function setAge($age)
		{
			$this->age = $age;
		}
	}


            // Создайте два объекта класса Employee, запишите в их 
        // свойства какие-либо значения.
        // С помощью метода getSalary найдите сумму зарплат 
        // созданных работников.

 
 
 $employee_lol = new Employee_lol; // создаем объект класса
 $employee_lol_2 = new Employee_lol; // создаем объект класса
// первый работник
 $employee_lol->name = 'Коля'; // записываем имя 
 $employee_lol->salary = 2500; // записываем зарплату
// второй работник
 $employee_lol_2->name = 'Игорь'; // записываем имя 
 $employee_lol_2->salary = 3500; // записываем зарплату

 
 // Вызываем наш метод:
 echo $employee_lol->getSalary() +  $employee_lol_2->getSalary(); //выведет зп Коли.и Игоря 6000

 // Установим возраст 
 $employee_lol->age = 26;
 // изменим имя с помощью метода
 $employee_lol->setAge(27);

 echo '<br>';
 echo $employee_lol->age; // проверим


 //  задача 


// Сделайте класс User, в котором будут следующие свойства
// - name (имя), age (возраст).

 // Сделайте метод setAge, который параметром 
 // будет принимать новый возраст пользователя.

 // Создайте объект класса User с именем 'Коля'
 //  и возрастом 25. С помощью метода setAge поменяйте возраст на 30.
 // Выведите новое значение возраста на экран.

 // Модифицируйте метод setAge так, чтобы он вначале проверял,
 //  что переданный возраст больше или равен 18. Если это так - 
 // пусть метод меняет возраст пользователя, а если не так -
 //  то ничего не делает.

 class User_2
 {
public $name;
public $age;

public function setAge($age)
{
    if ($this->age >= 18){ // проверяем текущее значение age
    $this->age = $age;  // если больше то меняем
    } else {
       return false;
    }
}




 }
 // создаю
 $user_2 = new User_2;
 $user_2->name = 'Коля';
 $user_2->age = 18;

 // меняю возраст
 echo '<br>';
  $user_2->setAge(30);

 echo $user_2->age;

 echo '<br>';

 //             задача

 // Сделайте класс Employee (работник), в котором будут следующие
 // свойства - name (имя), salary (зарплата).
 // Сделайте метод doubleSalary, который текущую зарплату
 // будет увеличивать в 2 раза.

 class Employee_3
 {
     public $name;
     public $salary;

    public function doubleSalary() {
        $this->salary = $this->salary * 2;
    }

 }

 $employee_3 = new Employee_3;
 $employee_3->salary = 3000;
 


 $employee_3->doubleSalary();
 echo $employee_3->salary;

 //     задача. Назначить возраст. Изменить возраст
 echo '<br>';
 class setUser 
 {
    public $name;
    public $age;

    private function isAgeCorrect ($age) {  // делаем метод приватным(работает тоько внутри класса)
      return  $age >=18 AND $age<= 60;
              
    } 

    public function setAge($age) {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function addAge($years) {
    $newAge = $this->age + $years;  
    if ($this->isAgeCorrect($newAge)) {
        $this->age = $newAge;
        }
 
    }
    public function godOfNature($life_back) {
        $yang_man = $this->age - $life_back;
        if ( $this->isAgeCorrect($yang_man)) {
            $this->age = $yang_man;
        }
    }
 }

  // Создайте объект этого класса User,
 // проверьте работу методов setAge и addAge.

 $user = new setUser;
// задать возраст
 $user->setAge(54);
 echo $user->age;
 echo '<br>';
// добавление возраста
 $user->addAge(5);
 echo $user->age;
 echo '<br>';
 // уменьшение возраста
 $user->godOfNature(19);
 echo $user->age;
 echo '<br>';


 
 //                                 Модификаторы доступа public и private

 // Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
// В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс. 
// Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
// Вынесите проверку курса в отдельный private метод isCourseCorrect.

class Student
{
    
    public $name;
    public $course;

    public function transferToNextCourse($next) {
        $newCourse = $this->course + $next;
        if ($this->isCourseCorrect($newCourse)) {
        $this->course = $newCourse;
        }
    }

    private function isCourseCorrect($course) {
        return $course <= 5;
    }

}




// $Student = new Student;

$Student->course = 3;
echo $Student->course;
echo '<br>';

// изменяем курс 
$Student->transferToNextCourse(1);
echo $Student->course;
echo '<br>';


//                  Конструктор объекта 

// Итак, давайте переделаем наш код, применив конструктор:

class User_const
{
    public $name;
    public $age;
    
    // Конструктор объекта:
    public function __construct($name, $age)
    {
        $this->name = $name; // запишем данные в свойство name
        $this->age = $age; // запишем данные в свойство age
    }
}

$user = new User_const('Коля - ', 25); // создадим объект, сразу заполнив его данными

echo $user->name; // выведет 'Коля'
echo $user->age; // выведет 25
echo '<br>';

// Сделайте класс Employee, в котором будут следующие публичные свойства
//  - name (имя), age (возраст), salary (зарплата). Сделайте так,
//  чтобы эти свойства заполнялись в методе __construct при создании объекта.

class Employee_con
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
   
}


$emplyee_con1 = new Employee_con('Коля', 43, 2400 );
$emplyee_con2 = new Employee_con('Петя', 20, 1400 );
echo $emplyee_con1->salary + $emplyee_con2->salary;
echo '<br>';

//                                       Работа с геттерами и сеттерами

// Сделайте класс Employee, в котором будут следующие private свойства:
//  name (имя), age (возраст) и salary (зарплата).

 // Сделайте геттеры и сеттеры для всех свойств класса Employee.

 // Дополните класс Employee приватным методом isAgeCorrect, который будет проверять
 //  возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться
 //  в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).

//  Пусть зарплата наших работников хранится в долларах. Сделайте так,
// чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. 
// Говоря другими словами в свойстве salary зарплата будет хранится просто числом, 
// но геттер будет возвращать ее с долларом на конце.

class Employee_getter 
{
    private $name; 
    private $age; 
    private $salary;
    // геттеры
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSlary()
    {
        return $this->salary.'$';
    }
//      сеттеры
    public function setAge($age)
    {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function setName($name)
    {  
            $this->name = $name;
    }

    public function setSalary($salary)
    {   
            $this->salary = $salary;   
    }

// проверка корректности возраста
    private function isAgeCorrect($age)
    {
        return $age >= 1 and $age <= 100;
    }
}

$emlo_emplo = new Employee_getter;

 $emlo_emplo->setSalary(3000); // добавляю зп 
echo $emlo_emplo->getSlary();  // вывожу со знаком $
echo '<br>';


//                             Хранение классов в отдельных файлах
// require 'User.php';
 require_once 'User.php'; // подключает файл, если он не был подключён ранее

//Сделайте класс Employee, в котором будут следующие свойства: name (имя),
//  surname (фамилия), patronymic (отчество) и salary (зарплата).
//  Пусть этот класс хранится в отдельном файле.

// Подключите к файлу index.php класс Employee, создайте два объекта этого класса
// с произвольными данными, выведите на экран сумму их зарплат.

require_once 'Employee.php';
echo $employee1->salary + $employee2->salary;


// Задача 11.1

// Сделайте класс City (город), в котором будут следующие свойства:
 // name (название города), population (количество населения).
 // Создайте 5 объектов класса City, заполните их данными и запишите в массив.
 // Переберите созданный вами массив с городами циклом и выведите города и их население на экран.

// Сделано 


