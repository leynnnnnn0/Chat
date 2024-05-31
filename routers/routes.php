<?php

// Pages router
$router->get('/chat/index.php/signup', 'controllers/signup_cntrl.php');
$router->get('/chat/index.php/signin', 'controllers/signin_cntrl.php');
$router->get('/chat/index.php/chats', 'controllers/chat_cntrl.php');

// Access routers
$router->post('/chat/index.php/signup', "controllers/access/Signup.php");
$router->post('/chat/index.php/signin', "controllers/access/Signin.php");

// Chat routers
$router->post('/chat/index.php/chat/logout', 'controllers/access/logout.php');
$router->get('/chat/index.php/chats/users', 'controllers/chat/users_get.php');
$router->post('/chat/index.php/chats/send', 'controllers/chat/send_message.php');


