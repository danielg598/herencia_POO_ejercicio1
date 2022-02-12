<?php 

include_once('class-figuras.php');

class Rectangulo extends Figuras{

    public function _construct($ladox,$ladoy)
    {
        parent::__construct($ladox,$ladoy);
        $this->ladox = $ladox;
        $this->ladoy = $ladoy;
    }
    public function calcularPerimetro()
    {
        $base=$this->ladox;
        $altura=$this->ladoy;

        $perimetro=2*($base+$altura);

        echo "EL PERIMETRO DEL RECTANGULO ES: " . $perimetro;
    }

    public function calcularArea()
    {
        $base=$this->ladox;
        $altura=$this->ladoy;

        $area=($base*$altura);

        echo "EL AREA DEL RECTANGULO ES: " . $area;
    }

}





?>