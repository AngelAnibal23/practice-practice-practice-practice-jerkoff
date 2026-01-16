    <?php

    include 'connectionDB.php'; 

    $dotaherosID = mysqli_real_escape_string($conexion, $_POST['dotaheros']);
    $matches = mysqli_real_escape_string($conexion, $_POST['matches']); 
    $winrate = mysqli_real_escape_string($conexion, $_POST['winrate']);
    $kda = mysqli_real_escape_string($conexion, $_POST['kda']);
    $role = mysqli_real_escape_string($conexion, $_POST['role']);
    $lane = mysqli_real_escape_string($conexion, $_POST['lane']);

    $sql = "UPDATE heroesimg 
            SET matches = '$matches', 
                winrate = '$winrate', 
                KDA = '$kda', 
                rol = '$role', 
                lane = '$lane' 
            WHERE id = '$dotaherosID'";
    $response = mysqli_query($conexion, $sql); 

    if ($response){
        echo "Succes"; 
        echo "<a href='../html/index.html'>← Volver</a>";
    }
    else{
        echo "Wrong"; 
    }

    mysqli_close($conexion);

    ?>