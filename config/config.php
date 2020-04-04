<?php
    $PastaInterna='MVC/';
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
    if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
    }else{
        define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
    }
    define('DIRIMG', DIRPAGE."public/img/");
    define('DIRDESIGN', DIRPAGE."public/design/");
    define('DIRJS', DIRPAGE."public/js/");
    define('DIRFONTS', DIRPAGE."public/fonts/");
    define('DIRCSS', DIRPAGE."public/css/");
    define('DIRVIDEO', DIRPAGE."public/video/");
    define('DIRAUDIO', DIRPAGE."public/audio/");

    define('HOST', "localhost");
    define('DB', "sistema");
    define('USER', "root");
    define('PASS', "");
?>

