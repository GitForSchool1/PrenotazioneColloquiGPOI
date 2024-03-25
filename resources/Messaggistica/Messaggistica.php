<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['message-submit'])) {
        $recipient = $_POST['recipient'];
        $message = $_POST['message'];

        // Simulazione dell'invio del messaggio
        $messageList = file_get_contents('message-list.txt');
        $newMessage = 'A ' . $recipient . ': ' . $message . PHP_EOL;
        file_put_contents('message-list.txt', $messageList . $newMessage);
    }

    if (isset($_POST['alert-submit'])) {
        $alertMessage = $_POST['alert'];

        // Simulazione dell'invio dell'avviso
        $alertList = file_get_contents('alert-list.txt');
        $newAlert = $alertMessage . PHP_EOL;
        file_put_contents('alert-list.txt', $alertList . $newAlert);
    }
}
?>