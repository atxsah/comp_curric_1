<?php
    mysql_connect("localhost", "root", "") or die(mysql_error());
	
	mysql_select_db("testePHP") or die(mysql_error());
	
	$sql = "INSERT INTO Contact (nome, email, message, created) VALUE('saah', 'sarovani@hotmail.com', 'testando o teste do teste', NOW())";
	
	mysql_query($sql) or die(mysql_error());
	
	echo "funcionou?";
	
	mysql_close();
?>