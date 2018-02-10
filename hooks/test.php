<?php
	/* Assuming this custom file is placed inside 'hooks' */
	define('PREPEND_PATH', '../');
	$hooks_dir = dirname(__FILE__);
	include("{$hooks_dir}/../defaultLang.php");
	include("{$hooks_dir}/../language.php");
	include("{$hooks_dir}/../lib.php");
	
	include_once("{$hooks_dir}/../header.php");
	
	$nasty = "calls MySQL's library function mysql_real_escape_string, which prepends backslashes to the following characters: \x00, \n, \r, \, ', \" and \x1a.";
	$nasty = "koko'wawa\r\nlala\\'";
	$safe = makeSafe($nasty);
	$too_safe = makeSafe($safe);
	for($i = 0; $i < 20; $i++) $too_safe = makeSafe($too_safe);
	var_dump($nasty);
	var_dump($safe);
	var_dump($too_safe);
?>


	
<?php include_once("{$hooks_dir}/../footer.php"); ?>