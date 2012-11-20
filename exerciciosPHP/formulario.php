<?php
//$_POST = variavel global;
//var_dump($_POST);

//SE for enviado um post e a variavel não é vazia então mostrar os dados
if (isset($_POST["pagina"]) && $_POST["pagina"] == "contato") {
	echo "Nome: ". $_POST["nome"] . "<br/>";
	echo "Senha: ". $_POST["senha"] . "<br/>";
	echo "Mensagem: ". $_POST["mensagem"];
	
} else {
	//SENÃO redirecionar para a página de contato
	header("Location: exerc_1.php");
}

 if(isset($_POST["checkbox"])) {
             for($i = 0; $i < count($_POST["checkbox"]); $i++) {
                 echo "A opção ".$_POST["checkbox"][$i]. " foi selecionada!<br />";
             }
         } else {
             echo "Nenhuma opção selecionada!";
		 }
?>