 $( document ).ready(function() {
  
 });

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

