isSad = true;

function sad() {
    if(isSad) {
        isSad = false;
        console.log("When I get sad,");
        return true;
    } else {
        return {
            "stop" : function () {
                console.log("I stop being sad");
            }
        }
    }
}

function beAwesome() {
    console.log("and be awesome instead");   
}


//life motto
if (sad() === true) {
    sad().stop();
    beAwesome();
}
