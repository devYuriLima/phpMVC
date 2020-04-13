<?php 
namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes{
    private $Method;
    private $Param = [];
    private $Obj;

    public function __construct(){
        self::addController();
    }
    public function addController(){
        $RotaController = $this->getRota();
        $NameS = "App\\Controllers\\{$RotaController}";
        $this->Obj = new $NameS;
    }
    public function addMethod(){
        
    }
    public function addParam(){
        
    }
}
?>