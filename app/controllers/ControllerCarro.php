<?php
namespace App\Controllers;

class ControllerCarro{
    public function valorCarro($tipo, $motor){
        if($tipo == "veiculos" && $motor  == '1'){
            $valor = "1000,00";
        }else if($tipo == "veiculos" && $motor  == '2'){
            $valor = "2000,00";
        }else if($tipo =="caminhao" && $motor == '1'){
            $valor = "5000,00";
        }else if($tipo =="caminhao" && $motor == '2'){
            $valor = "10000,00";
        }
        echo "O seu tipo é {$tipo} com motor {$motor} e melhor caro amigo, custa {$valor} reais";
    }
}
?>