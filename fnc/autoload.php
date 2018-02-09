<?php
include "config.php";

    if ($__os == "Windows"){


        if ($usingTest == true) {
            spl_autoload_register(function () {
                include 'test/fnc_mainFunc.php';
            });
        }

        if ($usingSystem == true){
            spl_autoload_register(function(){
               include 'system/fnc_mainFunc.php';
               //  include 'system/fnc_clientInfo.php';
            });
            $system = new fnc_system();

        }
    }
 ?>
