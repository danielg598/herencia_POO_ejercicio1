<?php 

include_once('class-figuras.php');
class Circulo extends Figuras{


    public function _construct($ladox,$ladoy)
    {
        parent::__construct($ladox,$ladoy);
        $this->ladox = $ladox;
        $this->ladoy = $ladoy;
    }
    public function calcularPerimetro()
    {
        $ladox = 3.1416;
        $ladoy = $this->ladoy;
        $perimetro=2*($ladox*$ladoy);

        echo "EL PERIMETRO DEL CIRCULO ES: " . $perimetro;
    }

    public function calcularArea()
    {
        $ladox = 3.1416;
        $ladoy = $this->ladoy;
        $area=$ladox*pow($ladoy,2);

        echo "EL AREA DEL CIRCULO ES: " . $area;
    }
}


?>