<!DOCTYPE html>
	<html lang='en'>
		<head>

		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <meta name="description" content="">
		    <meta name="author" content="">

		    <title>Tilbud</title>

		    <!-- Bootstrap core CSS -->
		    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		    <!-- Custom styles for this template -->
		    <link href="css/modern-business.css" rel="stylesheet">
		    <link href="css/my-style.css" rel="stylesheet">


	  	</head>
	<body>
<?php
	$city = filter_input(INPUT_POST, 'by') or die('by mangler');
	$addresse = filter_input(INPUT_POST, 'adresse') or die('adresse mangler');
	$dato = filter_input(INPUT_POST, 'dato') or die(' dato mangler');
	$antal = filter_input(INPUT_POST, 'antal') or die(' antal gæster mangler');
	$navn = filter_input(INPUT_POST, 'navn') or die(' navn mangler');
	$telefonnummer = filter_input(INPUT_POST, 'telefonnummer') or die(' antal gæster mangler');
	$email = filter_input(INPUT_POST, 'email') or die(' email mangler');
	$kommentar = filter_input(INPUT_POST, 'kommentar');
	
	$tid = filter_input(INPUT_POST, 'tid') or die('tid mangler');
	$dato_formatted = str_replace('-', '/', $dato);

	$temp_kommentar = filter_input(INPUT_POST, 'kommentar');
	$temp_speakers = filter_input(INPUT_POST, 'speakers');
	$temp_sspeakers = filter_input(INPUT_POST, 'sspeakers');
	$temp_soundboks = filter_input(INPUT_POST, 'soundboks');
	$temp_anleg = filter_input(INPUT_POST, 'anleg');
	$temp_dj = filter_input(INPUT_POST, 'dj');
	$temp_beerpong = filter_input(INPUT_POST, 'beerpong');
	$temp_stodband = filter_input(INPUT_POST, 'stodband');
	$temp_lys = filter_input(INPUT_POST, 'lys');
	$temp_betingelser = filter_input(INPUT_POST, 'betingelser');

	if ($temp_lys != 'true') {
		$lys = 'Nej';
	} else {
		$lys = 'Ja';
	}

	if ($temp_betingelser != 'true') {
		$betingelser = 'false';
	} else {
		$betingelser = filter_input(INPUT_POST, 'betingelser');
	}

	if ($temp_speakers != 'true') {
		$speakers = 'false';
	} else {
		$speakers = filter_input(INPUT_POST, 'speakers');
	}

	if ($temp_sspeakers != 'true') {
		$sspeakers = 'false';
	} else {
		$sspeakers = filter_input(INPUT_POST, 'sspeakers');
	}

	if ($temp_soundboks != 'true') {
		$soundboks = 'false';
	} else {
		$soundboks = filter_input(INPUT_POST, 'soundboks');
	}

	if ($temp_anleg != 'true') {
		$anleg = 'false';
	} else {
		$anleg = filter_input(INPUT_POST, 'anleg');
	}

	if ($temp_dj != 'true') {
		$dj = 'false';
	} else {
		$dj = filter_input(INPUT_POST, 'dj');
	}

	if ($temp_beerpong != 'true') {
		$beerpong = 'false';
	} else {
		$beerpong = filter_input(INPUT_POST, 'beerpong');
	}

	if ($temp_stodband != 'true') {
		$stodband = 'false';
	} else {
		$stodband = filter_input(INPUT_POST, 'stodband');
	}


	require_once('dbcon.php');

	$sql = 'INSERT INTO Orders (city, addresse, dato, antal, navn, telefornummer, email, kommentar, dj, lys, beerpong, stodband, betingelser, anleg, speakers, sspeakers, soundboks, tid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param(
		'sssisissssssssssss',
		$city,
		$addresse,
		$dato_formatted,
		$antal,
		$navn,
		$telefonnummer,
		$email,
		$kommentar,
		 $dj,
		 $lys,
		 $beerpong,
		 $stodband,
		 $betingelser,
		 $anleg,
		 $speakers,
		 $sspeakers,
	 	$soundboks,
			$tid
	);
	$stmt->execute();


?>

	<nav class=" navbar navbar-expand-lg navbar-light">

	      <div class="container-fluid">
	        <img src="img/logo_2.png">
		  	
		  </nav>
		  
				<p>Tak for din bestilling vi, vender tilbage med et tilbud til dig hurtigst muligt <?=$navn?> <br>
					<hr>
					E-mail-demo <br>

					<p>Tak for din bestilling vi, vender tilbage med et tilbud til dig hurtigst muligt <?=$navn?> <br><br>
					Du har bestilt følgende: <br><br>
					&nbsp Lys: <?=$lys?> <br>
					&nbsp DJ: <?=$dj?> <br>
					&nbsp Beerpong: <?=$beerpong?> <br>
					&nbsp Stødbånd: <?=$stodband?> <br>
					&nbsp Anlæg: <?=$anleg?> <br>
			s		&nbsp Højtaler 1: <?=$speakers?> <br>
					&nbsp Højtaler 2: <?=$sspeakers?> <br>
					&nbsp Soundboks: <?=$soundboks?> <br>
					&nbsp Kommentar: <?=$kommentar?> <br>
					Følgende vil blive leveret til <br>
					&nbsp <?=$navn?>, <?=$addresse?>, <?=$city?> <br>
					på datoen <?=$dato?>. <br>

					Vi ser frem til at spille for dem. <br>

				Med venlig hilsen Eventlageret.
				</p>
			</div>
  		</body>
  	</html>


