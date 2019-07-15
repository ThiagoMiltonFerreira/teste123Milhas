<?php
class Equacao
{

	public static function calcularEquacao()
	{
		$coeficienteA = $_GET["coeficienteA"];
		$coeficienteB = $_GET["coeficienteB"];
		$coeficienteC = $_GET["coeficienteC"];

		$delta = (pow($coeficienteB,2))-4*$coeficienteA*$coeficienteC;
		
		if($delta>=0)
		{
			$x1 = round(((-$coeficienteB)+sqrt($delta))/(2*$coeficienteA));
			$x2 = round(((-$coeficienteB)-sqrt($delta))/(2*$coeficienteA));
			
			echo "O valor de x1 é: $x1 <br>";
			echo "O valor de x2 é: $x2 <br>";
			echo "O valor de delta é: $delta <br>";


		}
		else
		{
			echo"Delta negativo impossivel calcular";

		}
	}




}

Equacao::calcularEquacao();


?>