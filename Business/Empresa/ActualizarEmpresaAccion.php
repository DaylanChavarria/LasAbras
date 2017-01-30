<?php

	include './EmpresaBusiness.php';

	$Id = $_POST['id'];
	$historia = $_POST['historia'];
	$quienesSomos = $_POST['quinesSomos'];	
	$descripcionGaleria = $_POST['descripcionGaleria'];
	$elaboracion = $_POST['elaboracion'];
	$descripcionProductA = $_POST['descripcionProductoA'];
	$elaboracionproductB = $_POST['elaboracionProductoB'];
	$denominacion = $_POST['denominacion'];
	$descripcionContactos = $_POST['descripcionContactos'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$telefonoA = $_POST['telefonoA'];
	$telefonoB = $_POST['telefonoB'];
	$encargadoA = $_POST['encargadoA'];
	$encargadoB = $_POST['encargadoB'];
	$mision = $_POST['mision'];
	$vision = $_POST['vision'];
	$idioma = $_POST['idioma'];

	$empresa = new Empresa($Id, $historia, $quienesSomos, $descripcionGaleria, $elaboracion, $descripcionProductA,
        $elaboracionproductB, $denominacion, $descripcionContactos, $direccion, $correo, $telefonoA, $telefonoB, 
        $encargadoA, $encargadoB, $mision, $vision, $idioma);

	$instBusiness = new EmpresaBusiness();
	$result = $instBusiness->actualizaEmpresaEsBusiness($empresa);
	header("location: ../../Presentation/Admin/CRUD_Empresa.php");
?>