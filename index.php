<?php
class Auto{
//variables-atributos
public $marca;
public $modelo;
public $color;
public $tipo;
public $cilindraje;
public $kilometraje;
public $encendido;
public $acelerar;


public function _construct($marca,$modelo,$color,$tipo,$cilindraje,$kilometraje,$encendido,$acelerar)
{
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->color=$color;
    $this->tipo=$tipo;
    $this->cilindraje=$cilindraje;
    $this->kilometraje=$kilometraje;
    $this->encendido=$encendido;
    $this->acelerar=$acelerar;

}

public function encender(){
$this->encendido=true;
return"auto_encendido";
}

public function arrancar(){
$this->acelerar=true;
return "auto_acelerando";

}
}

$auto1 = new auto("ferrari","portofino","rojo","deportivo","3855cc",0,false,false);
$auto2 = new auto("ferrari","f24","rojo","deportivo","3855cc",0,false,false);

echo $auto1->encender();
echo "<br>";
echo $auto2->arrancar();

?>
