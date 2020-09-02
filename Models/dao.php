<?php 
/**
 * 
 */
class dao
{

	private $usu_docu;
	private $usu_area;
	private $usu_nombre;
	private $usu_apellido;
	private $usu_correo;
	private $usu_telefono;
	private $usu_rol	;
	private $usu_foto;
	private $usu_estado;
	private $usu_contra;	
	private $area;	


	public function getUsu_docu(){
		return $this->usu_docu;
	}

	public function setUsu_docu($usu_docu){
		$this->usu_docu = $usu_docu;
	}

	public function getUsu_area(){
		return $this->usu_area;
	}

	public function setUsu_area($usu_area){
		$this->usu_area = $usu_area;
	}

	public function getUsu_nombre(){
		return $this->usu_nombre;
	}

	public function setUsu_nombre($usu_nombre){
		$this->usu_nombre = $usu_nombre;
	}

	public function getUsu_apellido(){
		return $this->usu_apellido;
	}

	public function setUsu_apellido($usu_apellido){
		$this->usu_apellido = $usu_apellido;
	}

	public function getUsu_correo(){
		return $this->usu_correo;
	}

	public function setUsu_correo($usu_correo){
		$this->usu_correo = $usu_correo;
	}

	public function getUsu_telefono(){
		return $this->usu_telefono;
	}

	public function setUsu_telefono($usu_telefono){
		$this->usu_telefono = $usu_telefono;
	}

	public function getUsu_rol(){
		return $this->usu_rol;
	}

	public function setUsu_rol($usu_rol){
		$this->usu_rol = $usu_rol;
	}

	public function getUsu_foto(){
		return $this->usu_foto;
	}

	public function setUsu_foto($usu_foto){
		$this->usu_foto = $usu_foto;
	}

	public function getUsu_estado(){
		return $this->usu_estado;
	}

	public function setUsu_estado($usu_estado){
		$this->usu_estado = $usu_estado;
	}

	public function getUsu_contra(){
		return $this->usu_contra;
	}

	public function setUsu_contra($usu_contra){
		$this->usu_contra = $usu_contra;
	}

	public function getArea(){
		return $this->area;
	}

	public function setArea($area){
		$this->area = $area;
	}
}

 ?>