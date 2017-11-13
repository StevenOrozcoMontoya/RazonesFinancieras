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
                          <li class="active"><a href="index.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Periodos</span></a></li>
                        <li> <a href="liquidez.php" ><i class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​liquidez</span></a></li>
                        <li><a href="endudamiento.php"><i class="fa fa-balance-scale" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. endeudamiento</span></a></li>
                        <li><a href ="rentabilidad.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. ​rentabilidad</span></a></li>
                        <li><a id="​cobertura"><i class="fa fa-bank" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​cobertura
</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 col-sm-11 display-table-cell v-align">

                <div class="user-dashboard">
                    <h1>Razones​​ de​​ cobertura</h1>
                    <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 sales">
                         <div class="span12">
            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th> </th>
                        <th>Primer Periodo</th>
                        <th>Segundo Periodo</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td>Periodo</td>
                        <td>Del <?php if (isset($_SESSION['primerPeriodoI']) and  isset($_SESSION['primerPeriodoF'])) {echo $_SESSION['primerPeriodoI'] ;
                        echo" Hasta "; echo $_SESSION['primerPeriodoF'] ;}?>  </td>
                        <td>Del <?php if (isset($_SESSION['segundoPeriodoI']) and  isset($_SESSION['segundoPeriodoF'])) {echo $_SESSION['segundoPeriodoI'] ;
                        echo" Hasta "; echo $_SESSION['segundoPeriodoF'] ;}?> </td>
                    </tr>
                    <tr>
                        <td>Cobertura​​ total​​ del​​ pasivo</td>

                        <td><?php  
$query  = "call Cobertura_total_del_pasivo('".$_SESSION['primerPeriodoI']."', '".$_SESSION['primerPeriodoF']."',@valor);";
$query .= "SELECT @valor;";
 
 echo  $conexion->mutiquery($query);

                 ?></td>
                        <td><?php 
                        $query  = "call Cobertura_total_del_pasivo('". $_SESSION['segundoPeriodoI'] ."', '". $_SESSION['segundoPeriodoF'] ."',@valor);";
$query .= "SELECT @valor;";
 echo  $conexion->mutiquery($query);
                         ?></td>
                    </tr>
                    <tr>
                        <td>Razón​​ de​​ cobertura​​ total</td>
                        <td><?php 
                        $query  = "call Razon_de_cobertura_total('". $_SESSION['primerPeriodoI'] ."', '". $_SESSION['primerPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?></td>
                        <td><?php 
                        $query  = "call Razon_de_cobertura_total('". $_SESSION['segundoPeriodoI'] ."', '". $_SESSION['segundoPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?></td>
                    </tr>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
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