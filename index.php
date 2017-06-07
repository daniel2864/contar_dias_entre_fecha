<?php


setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
date_default_timezone_set('America/Caracas');




function contar_dias_entre_fechas($inicio, $final, $dia){

	$dias = array(
		            'lunes' => 1, 
		            'martes' => 2,
		            'mmiercoles' => 3,
		            'jueves' => 4,
		            'viernes' => 5,
		            'sabado' => 6,
		            'domingo' => 7
		            );

	$dia = $dias[strtolower($dia)];
	$no = 0;

	if(is_numeric($dia)){

		$start = new DateTime($inicio);
		$end   = new DateTime($final);
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($start, $interval, $end);
		foreach ($period as $dt)
		{
			if ($dt->format('N') == $dia)
			{
				$no++;
			}
		}
	}
	

return $no;

}

echo contar_dias_entre_fechas('2017-06-01', '2017-06-30', 'lunes');