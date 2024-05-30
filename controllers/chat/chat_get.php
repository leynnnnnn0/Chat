<?php

require_once 'model/chat/Chat.php';
require_once 'database/dbhelper.php';

var_dump(Chat::getAllUsers($pdo));

