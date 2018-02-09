<?php

class fnc_system{

    public static function serverMac(){

         echo exec('ipconfig /all');

    }
}

?>

