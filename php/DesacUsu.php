<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "UPDATE sv07tpgfo  SET sv07estd='2' WHERE sv07cdtp=".$_GET["sv07cdtp"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Desactivo exitosamente.\");window.location='../vert.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo Desactivar.\");window.location='../vert.php';</script>";

			}
}else{
	if (isset($_POST['sv07cdtp'])) {
			
			include "conexion.php";
			$id='$_POST["sv07cdtp"]';
			$sql = "UPDATE sv07tpgfo  SET sv07estd='2' WHERE sv07cdtp='$id'";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Activado exitosamente.\");window.location='../UsuariosMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo Activado.\");window.location='../UsuarioMostrar.php';</script>";

	}
}
}

?>