PHP_SocketIO_Client
===================

EN: PHP client for socket.io (websocket client)

How to use:
```
//In this example your http server listen on port 3000.

$socketio = new SocketIO();
if ($socketio->send('localhost', 3000, 'message', 'Hello world!')){
    echo 'we sent the message and disconnected';
} else {
    echo 'Sorry, we have a mistake :\'(';
}
```
