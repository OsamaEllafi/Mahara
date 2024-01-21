<?php
spl_autoload_register(function ($class) {
    $arrClass = explode('\\', $class);
    $file = __DIR__ . '/' . $arrClass[1] . '/' . $arrClass[2] . '.php';
    if (file_exists($file)) {
        require $file;
    }
});