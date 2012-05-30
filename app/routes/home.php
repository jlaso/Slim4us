<?php

$app->get("/", "home")->name("home");
function home(){
    $app = Slim::getInstance();
    //$app->render("");
    print "Under construction!";
    return true;
}


?>
