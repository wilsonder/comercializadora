<?php 
require_once 'conexion.php';
require_once 'dao.php';
class CRUD{
	
	function __construct(){} 
	
	public function login($doc,$pass){
		$db=con::conexion();

		$sql=$db->prepare("SELECT * FROM tb_usuario WHERE usu_docu=:doc AND usu_contra=:pass");
		$sql->bindValue('doc',$doc);
		$sql->bindValue('pass',$pass);
		$sql->execute(); 

		$datos=new dao();
		$sol=$sql->fetch();

			$datos->setUsu_contra($sol['usu_contra']);
			$datos->setUsu_docu($sol['usu_docu']);
			$datos->setUsu_area($sol['usu_area_id']);

		return $datos;
	}

	public function datos($doc){ 
		$db=con::conexion();

		$sql=$db->prepare("SELECT * FROM tb_usuario t inner JOIN tb_area a ON (t.usu_area_id=a.area_id) WHERE t.usu_docu=:doc");
		$sql->bindValue('doc',$doc);
		$sql->execute();

		$datos=new dao();
		$sol=$sql->fetch();

			$datos->setUsu_docu($sol['usu_docu']);
			$datos->setUsu_nombre($sol['usu_nombre']);
			$datos->setUsu_foto($sol['usu_foto']);
			$datos->setUsu_area($sol['usu_area_id']);
			$datos->setArea($sol['area_nombre']);

		return $datos;
	}

	public function areas(){ 
		$db=con::conexion();

		$sql=$db->prepare("SELECT * FROM tb_area");
		$sql->execute();

		$sol=$sql->fetchAll();

		return $sol;
	}

	public function contra($Gs){
		$db=con::conexion();

		try {
			$sql=$db->prepare("UPDATE `tb_usuario` SET `usu_contra` = :contra WHERE `usu_docu` = :id");

			$sql->bindValue("id",$Gs->getUsu_docu());
			$sql->bindValue("contra",$Gs->getUsu_contra());
			
			$sql->execute();
		} catch (Exception $e) {
			echo $e;
		}

	}

	public function foto($Gs){
		$db=con::conexion();

		try {
			$sql=$db->prepare("UPDATE `tb_usuario` SET `usu_foto` = :foto WHERE `usu_docu` = :id");

			$sql->bindValue("id",$Gs->getUsu_docu());
			$sql->bindValue("foto",$Gs->getUsu_foto());
			
			$sql->execute();
		} catch (Exception $e) {
			echo $e;
		}

	}
}
 ?>
	