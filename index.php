<?php
	if (!isset($_GET['alias']))
	{
		http_response_code(400);
		die("No URL requested!");
	}

	$alias = htmlspecialchars($_GET['alias']);
	
	if (!$urls = parse_ini_file("urls.ini"))
	{
		http_response_code(500);
		die("Couldn't parse urls.ini!");
	}

	if (!array_key_exists($alias, $urls))
	{
		http_response_code(404);
		die("/$alias not found!");
	}

	header("Location: " . $urls[$alias]);
?>
