<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'core/shrinkWrap.php';
require 'core/Torrent.php';
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);
$app->shrinkWrap = new shrinkWrap('localhost', '', '', 'strike_search'); 
include  'app/routes/count.php';
$app->run();