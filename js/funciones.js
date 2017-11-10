 $( document ).ready(function() {

 

                        $("#​razon").click(function() {
                           
       document.getElementById("​razon").href="cobertura.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
 	 $("#Liqui").click(function() {
       document.getElementById("Liqui").href="liquidez.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
     
         $("#endeudamiento").click(function() {
       document.getElementById("endeudamiento").href="endudamiento.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
             $("#rentabilidad").click(function() {
       document.getElementById("rentabilidad").href="rentabilidad.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
  
 });
  function handler(){
       $("#​razon").click(function() {
                           
       document.getElementById("​razon").href="razon.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
     $("#Liqui").click(function() {
       document.getElementById("Liqui").href="liquidez.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
     
         $("#endeudamiento").click(function() {
       document.getElementById("endeudamiento").href="endudamiento.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
             $("#rentabilidad").click(function() {
       document.getElementById("rentabilidad").href="rentabilidad.php"+"?primerPeriodoI="+
       document.getElementById('primerPeriodoI').value+"&primerPeriodoF="+ 
       document.getElementById('primerPeriodoF').value+"&segundoPeriodoI="+ 
       document.getElementById('segundoPeriodoI').value+"&segundoPeriodoF="+ 
       document.getElementById('segundoPeriodoF').value
       ; 
    });
    }
 function cargarPeriodos()
 {
 	    $.ajax({
                data:  {'primerPeriodoI': $('#primerPeriodoI').val(), 'primerPeriodoF': $('#primerPeriodoF').val(), 'segundoPeriodoI': $('#segundoPeriodoI').val(), 'segundoPeriodoF': $('#segundoPeriodoF').val()},
                url:   'ajax.php',
                type:  'POST',
        })
        .done(function(resultado){
        })
        .fail(function(){
          alert("Peticion fallida!");
        });
 }

