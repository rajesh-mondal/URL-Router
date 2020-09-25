<?php
require "Router.php";
use OurApplication\Routing\Router;

Router::get( '/', function () {
    echo "Welcome Home";
} );

Router::get( '/hello/world', function () {
    echo "Hello World";
} );

Router::get( '/greet/(\w+)', function ( $name ) {
    echo "Hello {$name}";
} );

Router::get( '/greet/(\w+)/title/(\w+)', function ( $name, $title ) {
    echo "Hello {$title} {$name}";
} );

Router::cleanup();