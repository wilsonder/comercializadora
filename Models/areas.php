<?php 

 /* eslos son los getter y los setter de las areas */

class areas
{

	private $area_id;
	private $area_nombre;


	public function getAreaId(){
		return $this->area_id;
	}

	public function setAreaId($area_id){
		$this->area_id = $area_id;
	}

	public function getAreaNombre(){
		return $this->area_nombre;
	}

	public function setAreaNombre($area_nombre){
		$this->area_nombre = $area_nombre;
	}
}

 ?>