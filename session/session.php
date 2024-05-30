<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params(
    [
        "lifetime" => 3600,
        "path"=> "/",
        "domain" => "localhost",
        "secure" => true,
        "httpOnly" => true
    ]
);

session_start();

if(!isset($_SESSION['last_regeneration'])) {
    generate_session_id();
}else {
    $interval = 60 * 30;
    if(time() - $_SESSION['last_regeneration'] >= $interval) {
        generate_session_id();
    }
}

function generate_session_id()
{
    $_SESSION['last_regeneration'] = time();
    session_regenerate_id();
}