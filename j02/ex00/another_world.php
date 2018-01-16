#!/usr/bin/php
<?php
if ($argc > 1)
{
	$new = preg_replace('/[ \t]+/', ' ', $argv[1]);
	$new = trim($new);
	echo "$new\n";
}
?>
