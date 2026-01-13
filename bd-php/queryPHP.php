<?php

include 'connectionDB.php'; 

$dotaherosID = $_POST['dotaheros']; 

$sql = "SELECT hero, URL FROM heroesimg WHERE id = $dotaherosID"; 

$response = mysqli_query($conexion, $sql);


if($fila = mysqli_fetch_assoc($response)){
    echo "<h2> Heroe Seleccionado:  " . $fila['hero'] . "</h2>"; 
    echo "<img src='" . $fila['URL'] . "' alt='Dota Hero Image'>";  
    echo "<a href='../html/index.html'>← Volver</a>";
} else {
    echo "❌ Héroe no encontrado";
}

mysqli_close($conexion);

?>