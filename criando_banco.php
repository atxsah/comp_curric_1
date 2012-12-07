<?php
	
	mysql_connect("localhost", "root", "") or die(mysql_error());

	mysql_query("CREATE DATABASE mydbsite") or die(mysql_error());

	mysql_close();

?>