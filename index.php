<?php
	if (!isset($_GET['alias']))
	{
		die("Welcome to the URL shortener!");
	}
	
	$alias = htmlspecialchars($_GET['alias']);
		
	if (!$urls = parse_ini_file("urls.ini"))
	{
		die("Couldn't read urls.ini!");
	}
	
	if (array_key_exists($alias, $urls))
	{
		header("Location: " . $urls[$alias]);
	}
	
	echo "URL /$alias not found!";
?>