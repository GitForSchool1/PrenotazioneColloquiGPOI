//$re è una variabile che contiene una stringa rappresentante una espressione regolare (regex). L'espressione regolare è utilizzata per convalidare un indirizzo email 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Funzione per validare l'indirizzo email
    function isValidEmail($email) {
        $re = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        return preg_match($re, $email);
    }

    // Funzione per validare i dati del modulo
    function validateForm($toValue, $subjectValue, $bodyValue) {
        if (empty($toValue) || !isValidEmail($toValue)) {
            echo '<script>alert("Please enter a valid email address for the recipient.");</script>';
            return false;
        }

        if (empty($subjectValue)) {
            echo '<script>alert("Please enter a subject for the email.");</script>';
            return false;
        }

        if (empty($bodyValue)) {
            echo '<script>alert("Please enter a message for the email.");</script>';
            return false;
        }

        return true;
    }

    // Gestione dell'invio del modulo
    if (isset($_POST['submit'])) {
        $toValue = $_POST['to'];
        $subjectValue = $_POST['subject'];
        $bodyValue = $_POST['body'];

        if (validateForm($toValue, $subjectValue, $bodyValue)) {
            // Invia email utilizzando il server di posta
            // Inserisci qui la logica per inviare l'email

            echo '<script>alert("Email sent successfully!");</script>';
        } else {
            echo '<script>alert("Error sending email. Please try again later.");</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="to">To:</label><br>
        <input type="text" id="to" name="to"><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br>

        <label for="body">Body:</label><br>
        <textarea id="body" name="body"></textarea><br>

        <button type="submit" name="submit">Send Email</button>
    </form>
</body>
</html>
