<?php 
class inventario{
	private $id;
	private $id_area;
	private $descripcion;
	private $cantidad;
	private $costo;
	private $precio;
	private $img;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getId_area(){
		return $this->id_area;
	}

	public function setId_area($id_area){
		$this->id_area = $id_area;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getCantidad(){
		return $this->cantidad;
	}

	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}

	public function getCosto(){
		return $this->costo;
	}

	public function setCosto($costo){
		$this->costo = $costo;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public function getImg(){
		return $this->Img;
	}

	public function setImg($Img){
		$this->Img = $Img;
	}
}
?>