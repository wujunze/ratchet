<?php

use Ratchet\Server\IoServer;
use Panda\Chat;

require dirname(__DIR__).'/vendor/autoload.php';

$server = IoServer::factory(
    new Chat(),
    8099
);

$server->run();