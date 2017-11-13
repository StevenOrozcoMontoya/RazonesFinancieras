<?php 
 require_once("conexion.php"); $conexion = new Conexion();
   session_start();
  if (isset($_GET['primerPeriodoI']) and  isset($_GET['primerPeriodoF'])) {
           $_SESSION['primerPeriodoI']=$_GET['primerPeriodoI'];
  $_SESSION['primerPeriodoF']=$_GET['primerPeriodoF'];    
     $_SESSION['segundoPeriodoI']=$_GET['segundoPeriodoI'];
   $_SESSION['segundoPeriodoF']=$_GET['segundoPeriodoF'];    
  } 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  
   <script src="js/jquery-2.0.3.js"></script>
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/funciones.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/stylemenu.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

</head>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="index.html">
                    <h3>Razones Financieras</h3>
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class=""><a href="index.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Periodos</span></a></li>
                        <li class="" style="cursor: pointer;"> <a href="liquidez.php" id="Liqui"  ><i class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​liquidez</span></a></li>
                         <li class="" style="cursor: pointer;"><a href="endudamiento.php" id="endeudamiento"><i class="fa fa-balance-scale" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. endeudamiento</span></a></li>
                        <li class="" style="cursor: pointer;"><a href="rentabilidad.php" id="rentabilidad"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. ​rentabilidad</span></a></li>
                        <li style="cursor: pointer;"><a href="cobertura.php" id="​razon"><i class="fa fa-bank" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​cobertura </span></a></li>
                        <li class="active" style="cursor: pointer;"><a href="acercade.php" id="acercade"><i class="fa fa-question" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Acerca de</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 col-sm-11 display-table-cell v-align">

                <div class="user-dashboard">
                    <h1>Acerca de</h1>
                    <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 sales">
                         <div class="span12">
           Este es proyecto del curso Fundamentos Web desarrollado por los siguientes estudiantes de la Universidad Nacional de Costa Rica:<br><br>
           <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Yoel Cerdas Villalobos</th>
                        <th>Steven Orozco Montoya</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                		<td><li style="list-style-type: circle;">Programacion de consultas en la base de datos (Procedimientos almacenados)</li></td>
                		<td><li style="list-style-type: circle;">Diseño y desarrollo de la estructura del proyecto</li></td>
                	</tr>
                	<tr>
                		<td><li style="list-style-type: circle;">Análisis de la lógica de las fórmulas para las razones financieras</li></td>
                		<td><li style="list-style-type: circle;">Diseño y desarrollo de la interfaz del proyecto</li></td>
                	</tr>
                	<tr>
                		<td><li style="list-style-type: circle;">Llamado de procedimientos</li></td>
                		<td><li style="list-style-type: circle;">Desarrollo de logística para la implementación de los períodos</li></td>
                	</tr>
                </tbody></table>
                <br><br>
                IMPORTANTE: Para el correcto funcionamiento de este proyecto se debe actualizar la base de datos con dichos procedimientos almacenados, adjuntada en el siguiente enlace: <a style="color: blue" href="gamabasis_demo.sql">gamabasis_demo.sql</a>
        </div></div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
