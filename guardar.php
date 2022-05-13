<?php
	incluir  'conexión.php' ;
	$ nombre = strip_tags ( $ _POST [ 'nombre' ]);
	$ apaterno = strip_tags ( $ _POST [ ' apaterno ' ]);
	$ amaterno = strip_tags ( $ _POST [ 'amaterno' ]);
	$ ciudad = strip_tags ( $ _POST [ 'ciudad' ]);

	if ( preg_match ( '/[A-Za-z áéíóúñ]{2,50}/i' , $ nombre )){
		if ( preg_match ( '/[A-Za-z áéíóúñ]{2,50}/i' , $ apaterno )){
	        	if ( preg_match ( '/[A-Za-z áéíóúñ]{2,50}/i' , $ amaterno )){
                        	if ( preg_match ( '/[A-Za-z áéíóúñ]{2,50}/i' , $ ciudad )){
                        		$ inserción = "insert into usuario(nombre,apaterno,amaterno,ciudad) valores('$nombre','$apaterno','$amaterno','$ciudad')" ;
        				$ consulta = pg_consulta ( $ con , $ insercion );
        				si ( $ consulta ){
                				echo  "Se guarda en la base de datos" ;
                				echo  "Un gusto" . $ nombre . " " . $ aterno . " " . $ amaterno . " de " . $ ciudad ;
        				} más {
                				echo  "Hubo un error" ;
        				}

        				pg_close ( $ con );
	
                		}
	                }
        	}

	}
	más {
		echo  "Los datos no cumplen las condiciones" ;

	}	


?>
