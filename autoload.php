<?php
    spl_autoload_register(function ($class) {
        $file = BASEDIR . '/' . $class . '.php';

        if(file_exists($file))
            include $file;
        else
            exit("Arquivo não encontrado. Arquivo:" . $arq . "<br />");
        //(file_exists($file)) ? include $file : exit("Arquivo não encontrado. Arquivo:" . $arq . "<br />");
    });