<?php
		
	// opzoeken van het huidige bestandsnaam voor wergave van menu en taalblok.
	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/', $currentFile);
	$currentFile = $parts[count($parts) - 1];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../style/common.css" rel="stylesheet" type="text/css" />
<link href="style/common.css" rel="stylesheet" type="text/css" />
<link href="../style/menu.css" rel="stylesheet" type="text/css" />
<link href="../style/contact.css" rel="stylesheet" type="text/css" />

<title>Marschwood miniatures</title>

</head>

<body>

<div class="container">