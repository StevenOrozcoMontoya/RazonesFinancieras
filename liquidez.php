<?php
             
            require_once("ez_sql_core.php");     
      require_once("ez_sql_mysql.php"); $conexion = new ezSQL_mysql();

      $publicacion = $conexion->get_results("SELECT * FROM periodos");

      if (isset($publicacion)) {
          foreach ($publicacion as $value) {
                $primerPeriodoI = $value->primerPeriodoI;
                $primerPeriodoF = $value->primerPeriodoF;
                $segundoPeriodoI = $value->segundoPeriodoI;
                $segundoPeriodoF = $value->segundoPeriodoF;
          }
      }

      $articulos = $conexion->get_results("SELECT SUM(cantidad*venta) as cantidad FROM articulo");

        foreach ($articulos as $value) {
                $articulosmoney = $value->cantidad;

          }

          $cxc = $conexion->get_results("SELECT SUM(pago) as sumapago FROM cxc where cancelada != 1 AND (fecha BETWEEN '".$primerPeriodoI."' AND '".$segundoPeriodoF."')");

        foreach ($cxc as $value) {
                $cxcmoney = $value->sumapago;
          }
           $cxp = $conexion->get_results("SELECT SUM(pago) as sumapago FROM cxp where (fecha BETWEEN '".$primerPeriodoI."' AND '".$segundoPeriodoF."')");

        foreach ($cxp as $value) {
                $cxpmoney = $value->sumapago;

        }
        $activo_corrientePP = $articulosmoney+$cxcmoney+50000000;   
        $pasivo_corrientePP = $cxpmoney;
        echo $pasivo_corrientePP;   
                
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
                        <li ><a href="index.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Periodos</span></a></li>
                        <li class="active"><a href="liquidez.php"><i class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​liquidez</span></a></li>
                        <li><a href="#"><i class="fa fa-balance-scale" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. endeudamiento</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. ​rentabilidad</span></a></li>
                        <li><a href="#"><i class="fa fa-bank" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​cobertura
</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">

                <div class="user-dashboard">
                    <h1>Razones de liquidez</h1>
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
                        <td>Del <?php if (isset($publicacion)) {echo date("d/m/Y",strtotime($primerPeriodoI));}?> al <?php if (isset($publicacion)) {echo date("d/m/Y",strtotime($primerPeriodoF));}?></td>
                        <td>Del <?php if (isset($publicacion)) {echo date("d/m/Y",strtotime($segundoPeriodoI));}?> al <?php if (isset($publicacion)) {echo date("d/m/Y",strtotime($segundoPeriodoF));}?></td>
                    </tr>
                    <tr>
                        <td>Capital neto de trabajo</td>
                        <td>2000</td>
                        <td>1800</td>
                    </tr>
                    <tr>
                        <td>Índice de solvencia</td>
                        <td>1.8</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td>Prueba ácida</td>
                        <td>1.4</td>
                        <td>1269</td>
                    </tr>
                    <tr>
                        <td>Rotación de inventarios</td>
                        <td>512</td>
                        <td>1024</td>
                    </tr>
                    <tr>
                        <td>Rotación de cartera</td>
                        <td>200</td>
                        <td>400</td>
                    </tr>
                    <tr>
                        <td>Rotación de cuentas por pagar</td>
                        <td>1.4</td>
                        <td>1269</td>
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