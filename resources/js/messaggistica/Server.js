const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Configura la connessione al database
const db = mysql.createConnection({
  host     : 'localhost',
  user     : 'username',
  password : 'password',
  database : 'Archivio.db'
});

// Connetti al database
db.connect((err) => {
  if (err) throw err;
  console.log('Connesso al database MariaDB');
});

// Middleware per il parsing del corpo della richiesta
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// API per inviare un messaggio al database
app.post('/api/sendMessage', (req, res) => {
  const { recipient, message } = req.body;
  const sql = 'INSERT INTO messages (recipient, message) VALUES (?, ?)';
  db.query(sql, [recipient, message], (err, result) => {
    if (err) {
      console.error('Errore nell\'inserimento del messaggio:', err);
      res.status(500).send('Errore nell\'invio del messaggio');
    } else {
      console.log('Messaggio inviato con successo');
      res.status(200).send('Messaggio inviato con successo');
    }
  });
});

// Avvia il server
app.listen(port, () => {
  console.log(`Server in ascolto sulla porta ${port}`);
});
