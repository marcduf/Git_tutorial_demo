<?php
// GitHub tutorial example
// Peter Bijker, Grafisch Lyceum Utrecht
// 27-11-2016

// Contactform and processing
?>
<!doctype html>
<html>
<head>
<title>Mediadeveloper contactformulier</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
// Formdata to variables
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

// Compose data for the email
	// Warning! \r\n is a CRLF: Carriage return + Line feed
	// The next line of this file will be on the next line in the source code
$to      = "mediadeveloper.glu@gmail.com";
$subject = "Bericht via het contactformulier";
$headers = "From: ".$name."<".$email.">"."\r\n".
             "Reply-To: mediadeveloper.glu@gmail.com"."\r\n".
             "X-Mailer: PHP/".phpversion();

$message = "Onderstaande gegevens komen binnen via het contactformulier:"."\r\n".
			 $name." heeft het contactformulier ingevuld."."\r\n".
			 $name." heeft het e-mailadres: ".$email."\r\n".
			 $name." heeft de volgende tekst gestuurd: ".$text."\r\n";

// Send the email
mail($to, $subject, $message, $headers);
// Confirmation the email is sent (probably)
?>
<div id="container">
	<img src="glulogo.png">
	<div id="head" style="">Uw contactverzoek is verstuurd.</div>
	<div id="text">Klik <a href="index.php">hier</a> om terug te gaan naar de contactpagina.</div>
</div>
</body>
</html>