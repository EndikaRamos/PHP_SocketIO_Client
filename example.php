<?php

	//include the class
	include_once ('socket.io.php');

	//Create a socket.io connection and send a simple message
	$socketio = new SocketIO();
	//In this example your http server listen on port 3000.
	if ($socketio->send('localhost', 3000, 'Hello world!')){
	    echo 'we sent the message and disconnected';
	} else {
	    echo 'Sorry, we have a mistake :\'(';
	}

?>