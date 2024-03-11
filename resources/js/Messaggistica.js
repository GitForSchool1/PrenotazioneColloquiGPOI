document.getElementById('message-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var recipient = document.getElementById('recipient').value;
    var message = document.getElementById('message').value;
    
    // Simulazione dell'invio del messaggio
    var messageList = document.getElementById('message-list');
    var newMessage = document.createElement('div');
    newMessage.textContent = 'A ' + recipient + ': ' + message;
    messageList.appendChild(newMessage);
    document.getElementById('message').value = '';
});

document.getElementById('alert-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var alertMessage = document.getElementById('alert').value;
    
    // Simulazione dell'invio dell'avviso
    var alertList = document.getElementById('alert-list');
    var newAlert = document.createElement('div');
    newAlert.textContent = alertMessage;
    alertList.appendChild(newAlert);
    document.getElementById('alert').value = '';
});
