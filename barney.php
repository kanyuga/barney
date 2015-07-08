<?php
$isSad = true;

function stop() {
    echo "I stop being sad,\n";
    return "";
}

function sad() {
    global $isSad;
    if ($isSad) {
        $isSad = false;
        echo "When I get sad\n";
        return true;
    } 
    else return "";
}

function beAwesome() {
    echo "and be awesome instead\n";
}

//life motto
if (sad() === true) {
    sad().stop();
    beAwesome();
}
