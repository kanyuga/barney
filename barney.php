<?php
$isSad = true;

class SadBarney {
    public function stop() {
        echo "I stop being sad,\n";
    }
}

function sad() {
    global $isSad;
    if ($isSad) {
        $isSad = false;
        echo "When I get sad\n";
        return true;
    } 
    else return new SadBarney();
}

function beAwesome() {
    echo "and be awesome instead\n";
}

//life moto
if (sad() === true) {
    sad()->stop();
    beAwesome();
}
