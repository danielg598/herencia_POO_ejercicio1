<?php 

include_once('class-figuras.php');
class Triangulo extends Figuras{

    public function _construct($ladox,$ladoy)
    {
        parent::__construct($ladox,$ladoy);
        $this->ladox = $ladox;
        $this->ladoy = $ladoy;
    }
    public function calcularPerimetro()
    {
        $ladox=$this->ladox;
        $ladoy=$this->ladoy;

        $perimetro=(2*$ladox)+$ladoy;

        echo "EL PERIMETRO DEL TRIANGULO ES: " . $perimetro;
    }

    public function calcularArea()
    {
        $base=$this->ladox;
        $altura=$this->ladoy;

        $area=($base*$altura)/2;

        echo "EL AREA DEL TRIANGULO ES: " . $area;
    }

}


?>