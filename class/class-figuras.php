<?php

class Figuras{
    protected $ladox;
    protected $ladoy;

    public function __construct($ladox,$ladoy)
    {
        $this->ladox = $ladox;
        $this->ladoy = $ladoy;
    }

	/**
	 * 
	 * @return mixed
	 */
	function getLadox() {
		return $this->ladox;
	}
	
	/**
	 * 
	 * @param mixed $ladox 
	 * @return Figuras
	 */
	function setLadox($ladox): self {
		$this->ladox = $ladox;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getLadoy() {
		return $this->ladoy;
	}
	
	/**
	 * 
	 * @param mixed $ladoy 
	 * @return Figuras
	 */
	function setLadoy($ladoy): self {
		$this->ladoy = $ladoy;
		return $this;
	}

    public function calcularPerimetro(){}
    public function calcularArea(){}
}

?>