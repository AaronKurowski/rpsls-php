<?php 

    global $player1;

    function debugToConsole($msg) {
        $msg = str_replace('"', "''", $msg);
        echo "<script>console.log( \"PHP LOG: $msg\" );</script>";
    }

    debugToConsole("this is a test, ehhh");



    function playerChooseHand() {

    }




?>
