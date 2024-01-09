$(document).ready(function () {
    $('#submit-button').click(function (e) {
        console.log("submit geklickt");
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $(this).parent().serializeArray(),
            success: function (response) {
                console.log("email gesendet");
                $('#response-message').html(response);
            },
            error: function (error) {
                console.log(error);
                $('#response-message').html("Die Nachricht konnte nicht gesendet werden. <br>Bitte wende dich mit der Fehlermeldung direkt an mich: <br><a href=\"mailto:kontakt@aglaia.tattoo\">kontakt@aglaia.tattoo. </a><br>Fehler: 503-003");
            }
        });
        return false;
    });
});