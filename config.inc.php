<?php

	define( "DIR_RAIZ", $_SERVER['DOCUMENT_ROOT'] );
	define( "DIR_INC", DIR_RAIZ . "/includes/" );
	
	define( "HOST", "http://" . $_SERVER['HTTP_HOST'] );
	define( "DIR_IMG", HOST . "/images/" );

	define( "MYSQL_HOST", "localhost" );
	define( "MYSQL_USER", "ejemplo" );
	define( "MYSQL_PASSWD", "ejemplo" );
	define( "MYSQL_DBNAME", "sensores" );
	
/*	echo $_SERVER['DOCUMENT_ROOT']."<br>";
	echo DIR_RAIZ."<br>";
	echo HOST."<br>";
	echo DIR_INC."<br>";
	echo DIR_IMG."<br>";
	echo MYSQL_HOST;*/

?>
