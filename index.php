<?php
session_start();
// Setting internal encoding for string functions
mb_internal_encoding("UTF-8");
// Callback for autoloading controllers and models
function autoloadFunction($class)
{
// Ends with the string "Controller" ?
if (preg_match('/Controller$/', $class))
require("Controllers/" . $class . ".php");
else
require("Models/" . $class . ".php");
}
// Registers the callback
spl_autoload_register("autoloadFunction");
// Creating the router and processing parameters from the user's URL
$router = new RouterController();
$router->process(array($_SERVER['REQUEST_URI']));
// Rendering the view
$router->renderView();

?>