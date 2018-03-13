<?php
	$name = $_GET['name'];
	$names = array("mary", "maria", "marcello",	"mark", "max", "mike", "john", "jake", "jack", "jessica", "julia");
	$name = strtolower($name);
	$response="";
	foreach($names as $n)
	{
		if(substr($n,0,strlen($name)) === $name)
		{
			$response .= "<li>".$n."</li>";
		}
	}
	echo $response;