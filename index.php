<!DOCTYPE html>
    <html>
        <head>
        <meta charset='utf-8'>
        <title>ДЗ1</title></head>
        <body>
            <?php
            echo 'Задание 1'.'<br>';
            $name = 'Светлана';
            $age = 38;
            echo 'Меня зовут: '.$name.'<br>';
            echo 'Мне '.$age.' лет'.'<br>';
            $str = "\"!|\/'\"\\";
            $str = addslashes($str);
            echo stripcslashes($str).'<br>'.'<br>';


            echo 'Задание 2.<br>';
            $all = 80;
            $col1 = 23;
            $col2 = 40;
            $res = $all-$col1-$col2;
            echo 'На школьной выставке '.$all.' рисунков '.$col1.' из них выполнены 
            фломастерами '.$col2.' карандашами, а остальные - красками.'.'<br>'.
            'Сколько рисунков, выполненные красками, на школьной выставке?'.'<br>';
            echo 'Ответ: '.$res.' рисунков, выполнено красками'.'<br>'.'<br>';

            echo 'Задание 3.<br>';
            define(MAIN_CONST,'Моя константа');
            echo MAIN_CONST.'<br>';
            define(MAIN_CONST,'Другая константа');
            echo MAIN_CONST.'<br>'.'<br>';

            echo 'Задание 4.<br>';
            $age = mt_rand(0,100);
            if(($age >= 18)&&($age <= 65)){
	            echo 'Вам еще работать и работать'.'<br>'.'<br>';
	        } elseif ($age > 65){
	            echo 'Вам пора на пенсию'.'<br>'.'<br>';
	        } elseif (($age >= 1)&&($age <= 17)){
	            echo 'Вам еще рано работать'.'<br>'.'<br>';
	        } else{
	            echo 'Неизвестный возраст'.'<br>'.'<br>';
	        }

            echo 'Задание 5.<br>';
            $dey = mt_rand(0,10);
			
            switch ($dey){
                case 1:
				    echo 'Это будний день'.'<br>'.'<br>';
                    break;
                case 2:
                    echo 'Это будний день'.'<br>'.'<br>';
                    break;
                case 3:
                    echo 'Это будний день'.'<br>'.'<br>';
                    break;
                case 4:
                    echo 'Это будний день'.'<br>'.'<br>';
                    break;
                case 5:
                    echo 'Это будний день'.'<br>'.'<br>';
                    break;
                case 6:
				    echo 'Это выходной день'.'<br>'.'<br>';
                    break;
                case 7:
                    echo 'Это выходной день'.'<br>'.'<br>';
                    break;
                default: 
				    echo 'Неизвестный день'.'<br>'.'<br>';
            }

            echo  'Задание 6.<br>';
            $bmw = ['model' => 'X5','speed' => 20,'doors' => 5,'year' => '2015'];
            $toyota=['model' => 'XХХ','speed' => 30,'doors' => 7,'year' => '2018'];
            $opel=['model' => 'X5Н','speed' => 10,'doors' => 10,'year' => '2001'];
            $car=['bmw' => $bmw,'toyota' => $toyota,'opel' => $opel];
            foreach ($car as $key => $value){
                echo "CAR ".$key.'<br>';
                echo $value['model'].' '.$value['speed'].' '.$value['doors'].' '.$value['year'].' '.'<br>'.'<br>';
            }

            echo 'Задание 7.<br>';
            echo '<table border="1">';
            for($i = 1; $i < 11; $i ++){
				$s = $i + 1;
				$mod1 = $s % 2;
                echo '<tr>';
                for($n = 1; $n < 11; $n ++){
					$s = $n + 1;
					$mod2 = $s % 2;
					if(($mod1 == 0)&&($mod2 == 0)){
						$str = '<td>'.$i.' * '.$n.' = '.'['.$i*$n.']'.'</td>';
					} elseif (($mod1 == 1)&&($mod2 == 1)){
						$str = '<td>'.$i.' * '.$n.' = '.'('.$i*$n.')'.'</td>';
					} else {
						$str = '<td>'.$i.' * '.$n.' = '.$i*$n.'</td>';
					}
                    echo $str;
                }
                echo '</tr>';
            }
            echo '</table>'.'<br>';

            echo 'Задание 8.<br>';
            $str = 'на охоту заяц пошел';
            echo $str.'<br>';
            $str = explode(" ",$str);
            $i = count($str);
            while($i > 0){
                $i--;
                $str1[] = $str[$i];    
            }
            $str1 = implode("+",$str1);
            echo $str1;
	    ?>
         </body>
    </html>
