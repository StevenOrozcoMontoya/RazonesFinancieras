<?php
require_once "config.php";
    class Conexion 
    {
       
        private $conexion;
        
        function __construct()
        {
          
            $this->conectar_base_datos();    
        }
        
        public function conectar_base_datos()
        {
            $this->conexion = mysqli_connect(HOST, USER, PASS);
            mysqli_select_db($this->conexion, DBNAME) or die (mysqli_error($this->conection));
            mysqli_query($this->conexion, "SET NAMES 'utf8'" );
            
            return $this->conexion;
        }
        
        public function consulta($consulta){
            $this->resultado = mysqli_query($this->conexion, $consulta);
            if(!$this->resultado){ 
        echo    mysqli_error($this->conexion);
      
    }
    return $this->resultado;
        }


           public function desconectar()
    {
        
            mysql_close($this->$conexion);
        

    }
        
        public function extraer_registro(){
            if($fila = mysqli_fetch_row($this->resultado)){
                return $fila;
            }else{
                return false;
            }
            
        }
        public function mutiquery($query){

            if (mysqli_multi_query($this->conexion, $query)) {
    do {
        /* almacenar primer juego de resultados */
        if ($result = mysqli_store_result($this->conexion)) {
            $row = mysqli_fetch_row($result); 
               return $row[0];
            
            mysqli_free_result($result);
        }
        /* mostrar divisor */
        if (mysqli_more_results($this->conexion)) {
          
        }
    } while (mysqli_next_result($this->conexion));

}
        }

   
    }

?>