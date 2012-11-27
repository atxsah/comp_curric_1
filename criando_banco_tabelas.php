<?php
	
	mysql_connect("localhost", "root", "") or die(mysql_error());

	mysql_select_db("mydbsite") or die(mysql_error());

	mysql_query("CREATE TABLE contatos (
	  id INT AUTO_INCREMENT NOT NULL,
	  name CHAR(45),
	  email CHAR(45),
	  mensagem TEXT, 
	  created DATE,
	  PRIMARY KEY(id)
	)") Or die(mysql_error());
	mysql_close ();

?>