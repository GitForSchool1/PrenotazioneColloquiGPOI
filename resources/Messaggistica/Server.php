<?php
// Includi i moduli richiesti. il file autoload.php è all'interno di vendor che è
// tra le cartelle di artisan
require_once 'vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Crea un'applicazione Slim
$app = AppFactory::create();
$app->addBodyParsingMiddleware();

// Configura la connessione al database
$db = new mysqli('localhost', 'username', 'password', 'archivio');

// Verifica la connessione al database
if ($db->connect_error) {
    die("Errore di connessione al database: " . $db->connect_error);
}

// API per inviare un messaggio al database
$app->post('/api/sendMessage', function (Request $request, Response $response, $args) use ($db) {
    $data = $request->getParsedBody();
    $recipient = $data['recipient'];
    $message = $data['message'];

    $sql = 'INSERT INTO messages (recipient, message) VALUES (?, ?)';
    $statement = $db->prepare($sql);
    $statement->bind_param('ss', $recipient, $message);
    
    if ($statement->execute()) {
        $response->getBody()->write("Messaggio inviato con successo");
        return $response->withStatus(200);
    } else {
        $response->getBody()->write("Errore nell'invio del messaggio");
        return $response->withStatus(500);
    }
});

// Avvia l'applicazione Slim
$app->run();
