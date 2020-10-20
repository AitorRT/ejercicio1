<!-- DETALLES DE PELÍCULAS  -->
<?php 
$peliculas=[
    ["titulo" => Ironman, "actor"=>Ironmansin, "año"=>2015],
    ["titulo" => Spiderman, "actor"=>"Tom Holland", "año"=>2002],
    ["titulo" => "Toy Story", "actor"=>"Woody", "año"=>1995]
];
$titulo = $_GET['titulo'];
$encontrado = false;
$num = 0;
foreach ($peliculas as $pelicula){
    foreach($pelicula as $key => $value){
        if($key == "titulo"){
            if($value == $_GET['titulo']){
            $encontrado = $num;
            }
        }
    }
    $num ++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>

    <?php 

    if ($encontrado === false){
        echo "<p>Seleccione una pelicula válida de la sección.</p>";
    }else {
        echo "<h1>Informació sobre la película " . $peliculas[$encontrado][titulo] ."</h1>
    <p>Basat en la teva entrada, aquí tens la informació:</p>
    <p>" . $peliculas[$encontrado][actor] . " protagoniza la pel·lícula " . $peliculas[$encontrado][titulo] . "que es va produir el " . $peliculas[$encontrado][año] . ".</p>";
    }
    ?>
        <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="get">
        <label for="titulo">Titulo pelicula:</label><br>
        <input type="text" id="titulo" name="titulo" value=""><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
