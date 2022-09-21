<?php
    /*
     * BASEDIR: retorna o caminho/path do diretório pai, ou seja ele retorna todo o caminho
     * de pastas desde o (C:). Irá pegar o diretório atual e subir levels acima a partir desde
     * diretório.
     */
    DEFINE('BASEDIR', dirname(__FILE__, 2));
    DEFINE('VIEWS', BASEDIR . "/View/modules/");

    /*
     * Variáveis de Ambiente: as variáveis de ambiente são superglobal, ou seja ela está
     * disponível em todo o escopo da aplicação.
     */ 
    $_ENV['db']['host'] = "localhost:3307";
    $_ENV['db']['user'] = "root";
    $_ENV['db']['pass'] = "etecjau";
    $_ENV['db']['dbname'] = "php_mvc";