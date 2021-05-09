<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
									<!--Геоданные API - прогноз погоды -->   
                                    <?php
	
    $url ='http://api.openweathermap.org/data/2.5/weather';


    $options = array(
        'q' => 'Кемерово',  // поиск по городу
        'APPID' => 'b7334a3c54058367a1ebc3235804f297',  // мой Api ключ
        'units' => 'metric',
        'lang' => 'ru',  
    );
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

    $response = curl_exec($ch);
    $data = json_decode($response, true); // преобразовываю данные из строки в массив
    curl_close($ch);

    // Теперь получим и выведем температуру из массива
  


          $temp = $data['main']['temp']; // обычная температура
          $feels_like =  $data['main']['feels_like']; // Чувствуется как
          $humidity = $data['main']['humidity']; //  Влажность 
          $pressure =  $data['main']['pressure']; // Давление 
          $sunrise = $data['sys']['sunrise']; // Восход 
          $sunset = $data['sys']['sunset']; // Закат 


          // далее я прибавляю 4 часа для wordpress. На локальном хосте выводится другой часовой пояс

          
              // Восход
             
                      $date = date( 'H:i:s',  $sunrise); // первожу в формат часы, минуты, секунды	
                     $date_2 = date_create($date); // необходимо создать объект
                     date_modify($date_2, '+7 hours'); // пребовляю время
                     $trueRise = date_format($date_2, 'H:i'); // вывожу результат в нужном формате
                 
                  // Закат 
             
                      $dateSet = date( 'H:i:s',  $sunset); // первожу в формат часы, минуты, секунды	
                     $date_2Set = date_create($dateSet); // необходимо создать объект
                     date_modify($date_2Set, '+7 hours'); // пребовляю время
                     $trueSet = date_format($date_2Set, 'H:i'); // вывожу результат в нужном формате

        

             

          // вывод на экран
 Echo "<h2>Геоданные города Кемерово</h2>";

 Echo "<ul style=\"list-style-type: none\">";

 echo "<li>Температура в городе: $temp градусов  </li>";
 echo "<li>Температура ощущается как: $feels_like градусов  </li>";
 echo  "<li>Влажность воздуха: $humidity  </li>";
 echo  "<li>Давление: $pressure  </li>";
 echo  "<li>Восход солнца: $trueRise  </li>";
 echo  "<li>Закат солнца: $trueSet   </li>";
 
 echo "</ul>"; ?>