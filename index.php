<?php
	$query = $_SERVER['QUERY_STRING'];
	$head = fopen("head.html","r");
	$headdata = "";
	$bodydata = "";
	$taildata = "";
	
	switch($query) {
		case 1:
			$body = fopen("main.html", "r");
			for ($i = 0; $i < 31; $i++) {
				$headdata .= fgets($head);
			}
			$headdata .= '<li class=active><a href="index.php?1" name="home">Home</a></li>';
			$a = fgets($head);
			while (!feof($head)) {
				$headdata .= fgets($head);
			}
			break;
		case 2:
			$body = fopen("events.html", "r");
			for ($i = 0; $i < 32; $i++) {
				$headdata .= fgets($head);
			}
			$headdata .= '<li class=active><a href="index.php?2" name="events">Events</a></li>';
			$a = fgets($head);
			while (!feof($head)) {
				$headdata .= fgets($head);
			}
			break;
		case 3:
			$body = fopen("media.html", "r");
			for ($i = 0; $i < 33; $i++) {
				$headdata .= fgets($head);
			}
			$headdata .= '<li class=active><a href="index.php?3" name="media">Media</a></li>';
			$a = fgets($head);
			while (!feof($head)) {
				$headdata .= fgets($head);
			}
			break;
		case 4:
			$body = fopen("sponsors.html", "r");
			for ($i = 0; $i < 34; $i++) {
				$headdata .= fgets($head);
			}
			$headdata .= '<li class=active><a href="index.php?4" name="sponsor">Sponsorship</a></li>';
			$a = fgets($head);
			while (!feof($head)) {
				$headdata .= fgets($head);
			}
			break;
		case 5:
			$body = fopen("about.html", "r");
			for ($i = 0; $i < 35; $i++) {
				$headdata .= fgets($head);
			}
			$headdata .= '<li class=active><a href="index.php?5" name="about">About</a></li>';
			$a = fgets($head);
			while (!feof($head)) {
				$headdata .= fgets($head);
			}
			break;
		case 6:
			$body = fopen("contact.html", "r");
			for ($i = 0; $i < 36; $i++) {
				$headdata .= fgets($head);
			}
			$headdata .= '<li class=active><a href="index.php?6" name="contact">Contact</a></li>';
			$a = fgets($head);
			while (!feof($head)) {
				$headdata .= fgets($head);
			}
			break;
		default:
			$body = fopen("main.html", "r");
			for ($i = 0; $i < 31; $i++) {
				$headdata .= fgets($head);
			}
			$headdata .= '<li class=active><a href="index.php?1" name="home">Home</a></li>';
			$a = fgets($head);
			while (!feof($head)) {
				$headdata .= fgets($head);
			}
			break;
	}
		
	$tail = fopen("tail.html","r");
	
	/*while (!feof($head)) {
		$headdata .= fgets($head);
	}*/
	while (!feof($body)) {
		$bodydata .= fgets($body);
	}
	while (!feof($tail)) {
		$taildata .= fgets($tail);
	}
	
	fclose($head);
	fclose($body);
	fclose($tail);
	echo $headdata . $bodydata . $taildata;
?>
