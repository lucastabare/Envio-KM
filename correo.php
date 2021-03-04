<?php
   	
 $destino = "teleworldcordoba@gmail.com";
    $patente = $_POST["patente"];
    $kilometraje = $_POST["kilometraje"];
    $usuariowfx = $_POST["usuariowfx"];
    $contenido = "Patente: " . $patente . "\nKilometraje: " . $kilometraje . "\nUsuario WFX: " . $usuariowfx;
    @mail($destino, $patente, $contenido);
   	if (@mail) {
   		echo "<h1>KILOMETRAJE ENVIADO EXITOSAMENTE</h1>";
   	}
 ?>
