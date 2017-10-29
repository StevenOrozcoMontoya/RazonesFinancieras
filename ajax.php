<?php 

      require_once("ez_sql_core.php");     
      require_once("ez_sql_mysql.php"); $conexion = new ezSQL_mysql();


      if (isset($_POST['primerPeriodoI'])) {
      	$p = $conexion->get_var("SELECT id_periodos FROM periodos where id_periodos = 1");
      	if ($p == "") {
      		$conexion->query("INSERT INTO periodos (primerPeriodoI, primerPeriodoF, segundoPeriodoI, segundoPeriodoF) VALUES('".$_POST['primerPeriodoI']."','".$_POST['primerPeriodoF']."','".$_POST['segundoPeriodoI']."','".$_POST['segundoPeriodoF']."')");
      	}
      	else
      	{
      		$conexion->query("UPDATE periodos set primerPeriodoI = '".$_POST['primerPeriodoI']."', primerPeriodoF = '".$_POST['primerPeriodoF']."', segundoPeriodoI = '".$_POST['segundoPeriodoI']."', segundoPeriodoF = '".$_POST['segundoPeriodoF']."'");
      	}

      }

?>