<?php

// debug function
function dd()
{
    $arguments = func_get_args();

    foreach ($arguments as $argument) {
        echo "<pre>";
        print_r($argument);
        echo "</pre><br/>";
    }
    exit;
}
