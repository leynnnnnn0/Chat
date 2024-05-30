<?php

$router->get('/chat/index.php/signup', 'controllers/signup_cntrl.php');
$router->get('/chat/index.php/signin', 'controllers/signin_cntrl.php');
$router->get('/chat/index.php/chat', 'controllers/chat');
$router->post('/chat/index.php/signup', "controllers/access/Signup.php");