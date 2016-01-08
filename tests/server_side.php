<?php
$firstname = ($_POST['firstname']);
$lastname = ($_POST['lastname']);
$lastname2 = ($_POST['vehicle']);
$key = ($_POST['g-recaptcha-response']);

die($firstname." ".$key);

?>