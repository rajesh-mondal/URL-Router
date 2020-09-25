<?php
require "Router.php";
use OurApplication\Routing\Router;

Router::get( '/', function () {
    echo "Welcome Home";
} );

Router::get( '/hello/world', function () {
    echo "Hello World";
} );

Router::cleanup();