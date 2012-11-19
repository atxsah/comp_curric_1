<?php
//$_POST = variavel global;
//var_dump($_POST);

//SE for enviado um post e a variavel não é vazia então mostrar os dados
if (isset($_POST["pagina"]) && $_POST["pagina"] == "contato") {
	echo $_POST["nome"] . "<br/>";
	echo $_POST["email"] . "<br/>";
	echo $_POST["mensagem"];
} else {
	//SENÃO redirecionar para a página de contato
	header("Location: contact.php");
}
?>