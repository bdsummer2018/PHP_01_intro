<?php	
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);

	$page = @$_GET['page'];
	if($page === NULL) $page = "main";

	if($page === "main") {
		$pagefile = DOCROOT."/pages/main.php";
		$title = "Mainpage";
	}
	elseif ($page === "contacts") {
		$pagefile = DOCROOT."/pages/contacts.php";
		$title = "Contacts";
		$phone = "38099 999 88 77";
		$mail = "vasia@ex.ua";
	}
	else {
		$title = ":(";
		$pagefile = DOCROOT."/pages/404.php";
	}

	$headerfile = DOCROOT."/templates/header.php";
	include DOCROOT."/templates/default.php";

