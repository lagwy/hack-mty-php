<?php
require 'Model.php';
require 'Controller/Image.php';
require 'Controller/File.php';
require 'Controller/Reporte.php';
require 'Controller/User.php';
Class Controller
{
	private $model = null;
	function Login($User, $Pass)
	{
		$model = new Model();
		return ($model -> verify_User($User, $Pass));
	}
	function Logout()
	{
		$model = new Model();
		return ($model -> close_Session());
	}
	function updateImage($email, $file, $file_tmp, $folder, $event, $id, $tabla)
	{
		$Image = new Image();
		return $Image -> update_Image($email, $file, $file_tmp, $folder, $event, $id, $tabla);
	}
	function updateFile($file, $file_tmp, $folder, $event, $id, $tabla)
	{
		$file = new File();
		return $file -> update_File($file, $file_tmp, $folder, $event, $id, $tabla);
	}
	function crearAdministrador($username, $password, $rol)
	{
		$user = new User();
		return $user -> createUser($username, $password, $rol);
	}
	function actualizarAdministrador($id, $username, $password)
	{
		$user = new User();
		return $user -> updateUser($id, $username, $password);
	}
	function borrarAdministrador($id)
	{
		$user = new User();
		return $user -> deleteUser($id);
	}
	
	function getReporte($tipo)
	{
		$reporte = new Reporte();
		if($tipo == "alumnos")
			$reporte -> reporteAlumnos();
		else if($tipo == "profesores")
			$reporte -> reporteProfesores();
		else if($tipo == "escuelas")
			$reporte -> reporteEscuelas();
		else if($tipo == "general")
			$reporte -> reporteGeneral();
		else if($tipo == "porgrado")
			$reporte -> alumnosPorGrado();
		else if($tipo == "poredad")
			$reporte -> alumnosPorEdad();
	}
}
?>