<?php
/*
2. написать программку которая будет расчитывать количество пятниц 13-го в високосные года в любой заданный период, входные параметры:
- год начала расчета
- год конца расчета
*/

function isItLeapYear($year)
{
    return date("L", mktime(0,0,0, 7,7, $year));
}

function thirteentFridaysCount ($starting_year, $ending_year)       //counting fridays 13th in curent period
{
	$fridays13 = 0;

	for ($year = $starting_year; $year <= $ending_year; $year++)
	{

		if (isItLeapYear($year))
		{
			$first = $year."/01/13";                                   // (to begin count from 13/01/curent_year)

			for ($month = 1; $month <= 12; $month++)
			{
				$cur_date = strtotime($first ."+". $month . "month");    
				if (getdate($cur_date)['weekday'] == 'Friday' && getdate($cur_date)['mday'] == 13)  //cheking if cur_date is friday 13
					$fridays13++;
			}
		}

	}

	echo "There were ".$fridays13. " fridays 13th  (" .$starting_year." - ".$ending_year. ")";
}
thirteentFridaysCount(1980,1990);
