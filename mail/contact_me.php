<?php
if (empty($_POST['name']) ||
        empty($_POST['email']) ||
        empty($_POST['message']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No hi ha arguments presentats!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'tdalmau18@gmail.com';
$email_subject = "Lloc web Formulari de contacte:  $name";
$email_body = "Ha rebut un nou missatge del seu formulari de contacte web.\n\nAquí hi ha els detalls:\n"
        . "\nNom: $name\n"
        . "\nCorreu electrònic: $email_address\n"
        . "\nMissatge:\n$message";
$headers = "de: www.aegturodeldrac.hol.es\n";
$headers .= "Respondre a: $email_address";
mail($to, $email_subject, $email_body, $headers);
return true;
?>
