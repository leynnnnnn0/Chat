<?php

// Pages router
$router->get('/chat/index.php/signup', 'controllers/signup_cntrl.php');
$router->get('/chat/index.php/signin', 'controllers/signin_cntrl.php');
$router->get('/chat/index.php/chats', 'controllers/chat_cntrl.php');

// Access routers
$router->post('/chat/index.php/signup', "controllers/access/Signup.php");
$router->post('/chat/index.php/signin', "controllers/access/Signin.php");

