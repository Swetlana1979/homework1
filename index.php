<?php
    echo "<!DOCTYPE html>
    <html>
        <head>
        <meta charset='utf-8'>
        <title>ДЗ1</title></head>";
        echo "<body>";
            echo"Задание 1".'<br>';
            $name='Светлана';
            $age=38;
            echo "Меня зовут: ".$name.'<br>';
            echo "Мне ".$age." лет".'<br>';
            $str="“!|\/’”\\";
            $str=addslashes($str);
            echo stripcslashes($str).'<br>';


            echo"Задание 2.<br>";
            $all=80;
            $col1=23;
            $col2=40;
            $res=$all-$col1-$col2;
            echo "На школьной выставке ".$all." рисунков ".$col1." из них выполнены 
            фломастерами ".$col2." карандашами, а остальные - красками."."<br>".
            "Сколько рисунков, выполненные красками, на школьной выставке?"."<br>";
            echo "Ответ: ".$res." рисунков, выполнено красками"."<br>";

            echo"Задание 3.<br>";
            define(MAIN_CONST,'Моя константа');
            echo MAIN_CONST."<br>";
            define(MAIN_CONST,'Другая константа');
            echo MAIN_CONST."<br>";

            echo"Задание 4.<br>";
            $age=mt_rand(0,100);
            if(($age>=18)&&($age<=65)){
	            echo "Вам еще работать и работать".'<br>';
	        } elseif ($age>65){
	            echo "Вам пора на пенсию".'<br>';
	        } elseif (($age>=1)&&($age<=17)){
	            echo "Вам еще рано работать".'<br>';
	        } else{
	            echo "Неизвестный возраст".'<br>';
	        }

            echo"Задание 5.<br>";
            $dey=mt_rand(0,10);
            switch ($dey){
                case (($dey>=1)&&($dey<=5)):
				    echo "Это будний день".'<br>';
                    break;
                case (($dey==6)||($dey==7)):
				    echo "Это выходной день".'<br>';
                    break;
                default: 
				    echo "Неизвестный день".'<br>';
            }

            echo"Задание 6.<br>";
            $bmw=['model'=>'X5','speed'=>20,'doors'=>5,'year'=>'2015'];
            $toyota=['model'=>'XХХ','speed'=>30,'doors'=>7,'year'=>'2018'];
            $opel=['model'=>'X5Н','speed'=>10,'doors'=>10,'year'=>'2001'];
            $car=['bmw'=>$bmw,'toyota'=>$toyota,'opel'=>$opel];
            foreach ($car as $key=>$value){
                echo "CAR ".$key.'<br>';
                echo $value['model'].' '.$value['speed'].' '.$value['doors'].' '.$value['year'].' '.'<br>';
            }

            echo"Задание 7.<br>";
            echo '<table border="1">';
            for($i=1;$i<11;$i++){
                echo "<tr>";
                for($n=1;$n<11;$n++){
                    echo '<td>'.$i.'*'.$n.'='.$i*$n.'</td>';
                }
                echo "</tr>";
            }
            echo '</table>';

            echo"Задание 8.<br>";
            $str='на охоту заяц пошел';
            echo $str.'<br>';
            $str=explode(" ",$str);
            $i=count($str);
            while($i>0){
                $i--;
                $str1[]=$str[$i];    
            }
            $str1=implode("+",$str1);
            echo $str1;
        echo "</body>";
    echo "</html>";
