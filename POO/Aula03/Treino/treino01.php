<?php 
	// Importando classe
	require_once "classTreino01.php";
	// Instanciando objeto
	$v01 = new Ventilador;
	// Passando valores aos atributos do objeto
	$v01 ->nome   = "Ventilador";
	$v01 ->marca  = "Sei lá";
	$v01 ->cor    =	"branco";
	$v01 ->altura = 0.3;
	
	// Invocando métodos
	$v01 ->desligar();
	$v01 ->ligar();

	// Aumentando a velocidade 
	echo "Rotação atual: " . $v01 ->rotacao . "<br>";
	
	echo "Rotação atual: " . $v01 ->velocidade() . $v01 ->rotacao  . "<br>";
	echo "Rotação atual: " . $v01 ->velocidade() . $v01 ->rotacao  . "<br>";
	echo "Rotação atual: " . $v01 ->velocidade() . $v01 ->rotacao  . "<br>";

	// Tentando exceder a velocidade máxima permitida
	$v01 ->velocidade();

	$v01 ->desligar();

	echo "<p>As caracteríticas do objeto " . $v01->nome . " são: </p>";
 ?>

 <form>
 	<table border="2">
 			<tr>
 				<td>Marca</td>
 				<td><?php echo $v01 ->marca; ?></td>
 			</tr>
 			<tr>
 				<td>Cor</td>
 				<td><?php echo $v01 ->cor; ?></td>
 			</tr>
 			<tr>
 				<td>Altura</td>
 				<td><?php echo $v01 ->altura; ?></td>
 			</tr>
 	</table>
 </form> 