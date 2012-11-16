<?php
    $title="Site.com";
	$subtitle="este é um site em PHP";
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title. "-". $subtitle; ?></title>
</head>
<body>
	<!-- INICIO DO EXERCICIO 1 -->
	<h2>Exercício 1:</h2>
	<div id="rodape">
		<p>&reg copyright Site.com – <?php echo date("Y") ?></p>
	</div>
	<!-- FIM DO EXERCICIO 1 -->
	
	<!-- INICIO DO EXERCICIO 2-->
	<h2>Exercício 2:</h2>
	<h1>
		<div id="conteudo">
		<?php 
		$nome1="Fulano"; $nome2="Fulana"; $nome3="Ciclana"; $sexo1="M"; $sexo2="F"; $sexo3="M"; 
		?>
		
		<p><?php echo $nome1. ", ". $nome2. " e ". $nome3;?></p>		
		
		<?php
		if($sexo1 == "M" && $sexo2 == "M" && $sexo == "M"){
			echo "A equipe é formada por meninos";
		} else if($sexo1 == "F" && $sexo2 == "F" & $sexo == "F"){
			echo "A equipe é formada por meninas";
		} else {
			echo "A equipe é mista";
		}
		?>
		</div>
	</h1>
	<!-- FIM DO EXERCICIO 2 -->
	
	<!-- INICIO DO EXERCICIO 3 -->
	<h2>Exercício 3:</h2>
	<?php 
	switch ($qt="1") {
		case '0':
			echo "Não possui nenhum produto cadastrado";
			break;
		case '1':
			echo "Você possui um produto cadastrado";
			break;
		case '1,2,3':
			echo "Você possui vários produtos cadastrados";
			break;
		default:
			echo "Cadastro inválido, tente novamente";
			break;
	}
	?>
	<!-- FIM DO EXERCICIO 3-->
	
	<!-- INICIO DO EXERCICIO 4 -->
	<h2>Exercício 4:</h2>
	<h3>4a:</h3>
	<!-- A -->
	<?php
	for ($x=0; $x<=25; $x=$x+1) {
	   echo '<p>Lactobacilos vivos também possuem sentimentos</p>';
	}
	?>
	
	<!-- B  Escrever um algoritmo que receba qualquer valor e mostre os 
		valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3"; -->
	<h3>4b:</h3>
	<?php
	$valor = 5;
	for($x=0; $x<=$valor; $x++){
		echo "$x <br/>";
	}
	?>
	
	<!-- C  capturar dois valores em variáveis e mostrar os números entre 
		eles. Ex: 5 e 10, imprimir: "6 7 8 9"; -->
	<h3>4c:</h3>
	<?php 
	$valor1 = 5;
	$valor2 = 10;
	for($valor1; $valor1<=$valor2; $valor1++){
		echo "$valor1 <br/>";
	}
	?>
	
	<!-- D Escrever um algoritmo que multiplique os números utilizando apenas o 
		operador +, ex: (3 * 5) = 5 + 5 + 5 -->
	<h3>4d:</h3>
	<!-- FIM DO EXERCICIO 4 -->
	<?php
	$v1 = 3;
	$v2 = 5;
	$resultado = 0;
	for($i = 0; $i <= $v2; $i++):
		$resultado = $resultado + $i;
	endfor;
		echo "$resultado";
	?>
	
	<!-- INICIO DO EXERICIO 5-->
	<h3>Exercício 5:</h3>
	<?php
	function multiplica(){
		$v1 = 3;
		$v2 = 5;
		$resultado = 0 ;
		for($i = 0; $i <= $v2; $i++):
			$resultado = $resultado + $i;
		endfor;
			echo "$resultado";	
	}
		echo multiplica();
	?>
	<!-- FIM DO EXERCICIO 5  -->
	
	<!-- INICIO DO EXERCICIO 6-->
	<h3>Exercício 6:</h3>
	<?php
	function imprime($teste) {
	   $string = $teste;
	   return $string;
	}   
	  echo "mas oque eh isso: ". imprime("vamos ver se funfa assim?");
	?>
	<!-- FIM DO EXERCICIO 6 -->
	
	<!-- INICIO DO EXERCICIO 7 -->
	<h3>Exercício 7:</h3>
	<p></p><i>a - Descrever a sua funcionalidade e fazer exemplos das seguintes funções:<br/>Array(): Array é uma coleção de elementos 
		indexados na qual cada um dos elementos tem um número identificador único.<br/>Exemplo:</i></p>
	<?php 
	$lista = "mas o que, eu estou fazendo, bora dormir huee";
	$arrayList = explode(",", $lista);
	
	echo "<p>Olha a lista: </p>";
	echo "<ul>";
	   echo "<li>" . $arrayList[0] . "</li>";
	   echo "<li>" . $arrayList[1] . "</li>";
	   echo "<li>" . $arrayList[2] . "</li>";
	echo "</ul>";
	?>
	
	<p><i>b - Trim(): Retira espaço no ínicio e final de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$texto = " \t\t hehueuheuh... ";
	$trimmed = trim($texto);
	var_dump($texto);
	echo "<br/>";
	var_dump($trimmed);	
	?>
	
	<p><i>c - Substr(): Responsável por retornar um pedaço da string, utilizando três parâmetros: a própria string, o índice inicial
		 e a quantidade de caracteres a ser retornada.<br/>Exemplo:<br/></i></p>
	<?php
	$texto = "eheueeheu vamos fazer o teste!";
	echo "Sem o substr: "."$texto <br/>";
	echo "Com o substr: ". substr($texto, 0, 12);
	?>
	
	<p><i>d - Strtolower(): Convete toda a string em letra minúsculas.<br/>Exemplo:<br/></i></p>
	<?php
	$text = "AUHAHUAUHA TUDO CERTO!";
	echo "Sem strtolower: " . "$text <br/>";
	echo "Com strtolower: ". strtolower($text);
	?>
	
	<p><i>e - Strtoupper(): Converte toda a string em letra maiúscula.<br/>Exemplo:</br></i></p>
	<?php
	$text2 = "e lah vamos nos hehe";
	echo "Sem strtoupper: "."$text2 <br/>";
	echo "Com strtoupper: ". strtoupper($text2); 
	?>
	
	<p><i>f - Ucfirst(): Converte para maiúscula o primeiro caractere de uma string.<br/>Exemplo:<br/></i></p>
	<?php
	$text3 = "within Temptation - Sinead (Benno De Goeij Remix) (BacauHouseMafia.Ro)";
	echo "Sem ucfirst: "."$text3 <br/>";
	echo "Com ucfirst: ". ucfirst($text3); 
	?>
	
	<p><i>g - Ucwords(): Converte para maiúsculas o primeiro caractere de cada palavra.<br/>Exemplo:<br/></i></p>
	<?php
	$text4 = "show de bola";
	echo "Sem ucwords: "."$text4 <br/>";
	echo "Com ucwords: ". ucwords($text4); 
	?>
	
	<p><i>h - Explode(): Divide uma string em string, retornando uma matriz de string, cada uma como substring
		de string formada pela divisão dela a partir do delimiter.<br/>Exemplo:<br/></i></p>
	<?php
	$text5 = "show de bola e mais um teste hehe";
	$opa = explode(" ", $text5);
	echo $opa[0];
	echo $opa[1];
	echo $opa[2];
	echo $opa[3];
	echo $opa[4];
	echo $opa[5];
	echo $opa[6];
	echo $opa[7];
	?>
	
	<p><i>i - Var_dump(): Representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.<br/>Exemplo:<br/></i></p>
	<?php
	$number = 10.3;
	var_dump($number);
	?>
	<!-- FIM DO EXERCICIO 7 -->
	
	<!-- INICIO DO EXERCICIO 8 -->
	<h3>Exercício 8:</h3>
	<p><i>Conversão de string para integer:</i></p>
	<?php
	$string = '19';
	$int = (int)$string;
	echo $int;
	?>
	
	<p><i>Conversão de integer para string:</i></p>
	<?php
	$number2 = 19;
	$string = (string)$number2;
	echo $string;
	?>
	<!-- FIM DO EXERCICIO 8 -->
</body>
</html>

