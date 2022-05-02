<?php
require_once "Conversor.php";
$conversor =  new Conversor();

$espostback = isset($_POST['procesar'])?true:false;

if ($espostback){
    $monto = isset($_POST['monto']) ? $_POST['monto'] : 0;
    $origen = isset($_POST['origen']) ? $_POST['origen'] : 'PEN';
    $destino = isset($_POST['destino']) ? $_POST['destino'] : 'PEN';
    
    $resultado =  $conversor->convertir($monto,$origen,$destino);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Tipo de cambio</h1>
        <ul>
            <?php
            foreach ($conversor->listaMonedas() as $moneda) {
                $valor = round($conversor->convertir(1, $moneda->getCodigo()), 2);
                echo "<li>" .
                       $moneda->getDatos() . " S/." . number_format($valor, 2) .
                    "</li>";
            }
            ?>
        </ul>
    </div>

    <datalist id="lista-monedas">
            <?php
            foreach ($conversor->listaMonedas() as $moneda) {
                echo "<option value ='{$moneda->getCodigo()}'> 
                {$moneda->getDatos()} </option>";
            }
            ?>
    </datalist>

    <form action="" method="POST">
        <label for="monto">Monto: </label>
        <input type="number" name="monto" id="monto" placeholder="0.00" 
        value="<?php echo $espostback?$monto:'0.00'?>" step="0.0001">

        <label for="origen">Origen: </label>
        <input type="text" list="lista-monedas" 
        name="origen" id="origen" value="PEN" autocomplete="off">

        <label for="destino">Destino: </label>
        <input type="text" list="lista-monedas" 
        name="destino" id="destino" value="PEN" autocomplete="off">
        
        <input type="submit" value="Procesar" name="procesar">
    </form>
    <div>
        <h1>Resultados</h1>
        <h2>
            <?php
                if($espostback){
                    echo number_format($resultado, 2);
                }
            ?>
        </h2>
    </div>

</body>

</html>