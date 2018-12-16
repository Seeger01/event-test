
<?php  

	$to = '$email';
	$email_subject = "Ordre bekræftigelse fra Eventlageret vedr. deres ordre.";
	$email_body = "
		Ordre bekræftigelse fra Eventlageret vedr. deres ordre. <br>
			Tak for deres ordre <?=$navn?> <br>
				Du har bestilt følgende: <br>
				&nbsp Lys: <?=$lys?> <br>
				&nbsp DJ: <?=$dj?> <br>
				&nbsp Beerpong: <?=$beerpong?> <br>
				&nbsp Stødbånd: <?=$stodband?> <br>
				&nbsp Anlæg: <?=$anleg?> <br>
				&nbsp Højtaler 1: <?=$speakers?> <br>
				&nbsp Højtaler 2: <?=$sspeakers?> <br>
				&nbsp Soundboks: <?=$soundboks?> <br>
				Følgende vil blive leveret til <br>
				&nbsp <?=$navn?>, <?=$addresse?>, <?=$city?> <br>
				på datoen <?=$dato?>. <br>

				Vi ser frem til at spille for dem. <br>

			Med venlig hilsen Eventlageret.
	";
	$headers = "From: seeger01@hotmail.com";
	$headers .= "Reply-To: seeger01@hotmail.com";
	mail($to, $email_subject, $email_body, $headers);
	return true;
?>