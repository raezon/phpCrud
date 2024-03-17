<?php

use League\Plates\Engine;

// Function to get or create the singleton instance of Engine
function getPlatesInstance()
{
    static $platesInstance = null;

    if ($platesInstance === null) {
        $platesInstance = new Engine('views');
    }

    return $platesInstance;
}

// Function to render a template using the Plates instance
function renderTemplate($template, $data = [])
{
    $platesInstance = getPlatesInstance();
    echo $platesInstance->render($template, $data);
}
