<?php
    abstract class Controller {

        protected static function render($view, $model = null) {
            $file = "./View/modules/$view.php";

            if(file_exists($file)) {
                $model;
                include $file;
            } else {
                echo "Arquivo não localizado. Caminho: $file";
            }
        }
    }