<?php
/*
1. написать класс который будет считать корень квадратный от числа ( использовать стандартную функцию корня нельзя ), входные параметры:
- число с которого нужно узнать корень (положительное число)
- количество символов после запятой

*/

class NumRootCalcClass {

    public function numRoot($number, $decimals) 
    {	
    	if ($number > 0)
    	{
        	$sqrt = exp(log($number)/2);  // number = x^2 
			return round($sqrt, $decimals);
		}
		else 
			echo "Number should be more, than 0";
    }

}	
	$ob = new NumRootCalcClass();
	echo $ob->numRoot(0,3);
