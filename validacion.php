<?php 
echo "Hola";
$error = "";
$enviar = "";
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Enviar = $_POST['Enviar'];

Validar($Nombre);
Validar($Apellido);
Validar($Correo);
Validar($Telefono);


if(empty($error)){
	$enviar = true;
	header('Location: Respuesta.php');
}
function Validar($valor){
	if(empty($valor)){
		$error = "Error papa";
header('Location:Formulario.php');
	} else {
		$error = "";
	}
} 

/*
function validaTexto($valor){
	if (!empty($valor) && ctype_alpha($valor)) {
		$valor = $valor;
	} elseif (empty($valor)) {
		$error = "mALO";
		header("Location:Formulario.php");
	}

}

function validaCell($valor){
 	if (!empty($valor) && is_numeric($valor)) {
 	 	$valor = $valor;
 	 } elseif (empty($valor)) {
 	 	$error = "mALO";
 	 	header("Location:Formulario.php");
 	 	
 	 }
 }*/
 ?>
