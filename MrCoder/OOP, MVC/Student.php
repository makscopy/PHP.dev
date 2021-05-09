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

// Начальные значения свойств в конструкторе

// Не подсматривая в мой код реализуйте такой же класс Student.
// Модифицируйте метод transferToNextCourse так, чтобы при переводе на 
// новый курс выполнялась проверка того, что новый курс не будет больше 5.

class Student 
{
private $name; // доступно только для чтения
private $course; // Изменяемо 

public function __construct($name)
{
    $this->name = $name;
    $this->course = 1; // делаем курс по умолчанию
}
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		// Геттер курса:
		public function getCourse()
		{
			return $this->course;
		}

        public function transferToNextCourse() {
           
            if ($this->isRightCourse()) {
            $this->course++;
            }
        }

        public function isRightCourse() {
           return $this->course < 5;
        }

}

$student = new Student('Колян');
echo $student->getCourse(); // значение по умолчанию - 1
echo '<br>';
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет 2

