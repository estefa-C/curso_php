<?php
date_default_timezone_set("Europe/Madrid");


function fecha_es_lg(){
	$f_dia=date("d");
	$f_mes=date("m");
	$f_anio=date("Y");

	$d_semana=[
		"1"=>"Lunes",
		"2"=>"Martes",
		"3"=>"Miercoles",
		"4"=>"Jueves",
		"5"=>"Viernes",
		"6"=>"Sabado",
		"7"=>"Domingo"
	];

	$mes=[
		"01"=>"Enero",
		"02"=>"Febrero",
		"03"=>"Marzo",
		"04"=>"Abril",
		"05"=>"Mayo",
		"06"=>"Junio",
		"07"=>"Julio",
		"08"=>"Agosto",
		"09"=>"Septiembre",
		"10"=>"Octubre",
		"11"=>"Noviembre",
		"12"=>"Diciembe"
	];

	$fecha=$d_semana[date("N")]." ".$f_dia." de ".$mes[$f_mes]." de ".$f_anio;
	return $fecha;
}

echo fecha_es_lg(); 
echo "</br>";

function fecha_es_corta($f=""){

	if($f==""){
		$f=date("d-m-Y");
	}else{
		$fecha=date("d-m-Y",strtotime($f));
	}
	$f=explode("-", $f);

	$f_dia=$f[0];
	$f_mes=$f[1];
	$f_anio=$f[2];

	$mes=[
		"01"=>"Enero",
		"02"=>"Febrero",
		"03"=>"Marzo",
		"04"=>"Abril",
		"05"=>"Mayo",
		"06"=>"Junio",
		"07"=>"Julio",
		"08"=>"Agosto",
		"09"=>"Septiembre",
		"10"=>"Octubre",
		"11"=>"Noviembre",
		"12"=>"Diciembe"
	];

	$fecha=$f_dia." de ".$mes[$f_mes]." de ".$f_anio;
	return $fecha;
}
echo fecha_es_corta();
echo "</br>";
echo fecha_es_corta("01-01-2020");
