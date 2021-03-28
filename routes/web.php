<?php

$router = new AltoRouter();


// home page route
$router->map( 'GET', '/', function() {
    loadView("frontpage");
});


$match = $router->match();
if( $match && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] ); 
} else {
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
