<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = "Name: ".clean_input($_POST["name"]);
    $tattoowunsch = "Tattoowunsch: ".clean_input($_POST["tattoowunsch"]);
    $email = "Email: ".clean_input($_POST["email"]);
    $mailInhalt = $name."\n".$tattoowunsch."\n".$email;

    if (mail("fabian@riedel.wtf","Web Anfrage von ".$name,$mailInhalt, "From: backrack@obama.official")) {
        echo "Vielen Dank! Deine Anfrage wurde gesendet.";
    } else {
        echo "Die Nachricht konnte nicht gesendet werden. <br>Bitte wende dich mit der Fehlermeldung direkt an mich: <br><a href=\"mailto:kontakt@aglaia.tattoo\">kontakt@aglaia.tattoo. </a><br>Fehler: 205-211";
    }
}

function clean_input($input) {
    $input = strip_tags($input); // Entfernt HTML-Tags
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); // Kodiert Sonderzeichen in HTML-Entities
    $input = preg_replace('/[^A-Za-zÄÖÜäöüß\s\-\'.@]+/', '', $input);
    return $input;
}
?>