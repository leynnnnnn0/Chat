<?php

require_once 'model/chat/Chat.php';
require_once 'database/dbhelper.php';

$message = $_POST['message'];
$sender_id = $_SESSION['user']['id'];
$receiver_id = 2;

Chat::sendMessage($pdo, $sender_id, $receiver_id, $message);


