<?php

$file = "/var/www/messages.txt";
$addr = "null@null.io";

?>

<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<center>
</br></br></br></br></br></br></br>
<div name="message" id="message">

<?php

if(!isset($_POST["submit"])) {
	redirect_home(0);
} else {
		echo "Messageing has not yet been impelemented.</br></br>redirecting home...";
		redirect_home(3);
	}
}

function redirect_home($delay) {

	echo "<meta http-equiv=\"refresh\" content=\"" . $delay . "; URL=/index.html\">";

}

function validate_email($email) {

	if(strlen($email) > 100) {
		return false;
	}

	if(!preg_match("/[a-zA-Z0-9\-\_\.]+\@[a-zA-Z0-9\-\_\.]+/", $email)) {
		return false;
	}

	return true;

}

function validate_name($name) {

	if(strlen($name) > 100) {
		return false;
	}

	return true;

}

function validate_message($message) {

	if(strlen($message > 5000)) {
		return false;
	}

	return true;

}

?>

</div>
</center>
</html>
