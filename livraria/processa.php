<?php

$doc = filter_input(INPUT_POST, 'doc', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

echo "Documento: $doc <br>";
echo "Email: $email <br>";