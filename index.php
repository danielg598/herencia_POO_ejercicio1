<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
   
    <script> 
        function mostrarCirculo(){
            document.getElementById('datosCirculo').style.display= 'block';
            document.getElementById('datosTriangulo').style.display= 'none';
            document.getElementById('datosRectangulo').style.display= 'none';
        }
        
    </script>
    <script> 
        function mostrarTriangulo(){
            document.getElementById('datosTriangulo').style.display= 'block';
            document.getElementById('datosCirculo').style.display= 'none';
            document.getElementById('datosRectangulo').style.display= 'none';
        }
        
    </script>
    <script> 
        function mostrarRectangulo(){
            document.getElementById('datosRectangulo').style.display= 'block';
            document.getElementById('datosTriangulo').style.display= 'none';
            document.getElementById('datosCirculo').style.display= 'none';
        }
        
    </script>
    <div class="botones">
        <button class="btn btn-primary" id="circulo" onclick="mostrarCirculo()">Circulo</button>
        <button class="btn btn-danger" id="triangulo" onclick="mostrarTriangulo()">Triangulo</button>
        <button class="btn btn-warning" id="rectangulo" onclick="mostrarRectangulo()">Rectangulo</button>
    </div>
    

    <?php 

    include_once('class/class-figuras.php');
    include_once('class/class-circulo.php');
    include_once('class/class-triangulo.php');
    include_once('class/class-rectangulo.php');


    echo "<br>";
    $circulo = new Circulo(100,5);
    $entradaCirculo="el radio del circulo es: " . $circulo->getLadoy();
   

    $triangulo=new Triangulo(25,15);
    $ladosigualesTriangulo= "Los dos lados iguales miden: " .$triangulo->getLadox();
    $otroladoTriangulo= "El otro lado del triangulo mide: " .$triangulo->getLadoy();
   
    
    

    $rectangulo=new Rectangulo(2,3);
    $baseRectangulo= "La base del rectangulo mide: " .$rectangulo->getLadox();
    $alturaRectangulo= "La altura del rectangulo mide: " .$rectangulo->getLadoy();

    
    ?>


    <div class="container">
        <div class="card" id="datosCirculo" style="display:none;">
            <img src="https://i.pinimg.com/originals/dc/7f/df/dc7fdfa868c61152ca9b926244516e02.gif"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Datos Circulo</h5>
                <p class="card-text">
                    <hr />
                    <?= $entradaCirculo ?>
                    <br />
                    <?= $circulo->calcularPerimetro(); ?>
                    <br />
                    <?= $circulo->calcularArea(); ?>
                </p>
            </div>
        </div>
        <div class="card" id="datosTriangulo" style="display:none;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Pir%C3%A1mides_de_Joel.gif"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Datos Triangulo</h5>
                <p class="card-text">
                    <hr />
                    <?= $ladosigualesTriangulo ?>
                    <br />
                    <?= $otroladoTriangulo ?>
                    <br />
                    <?= $triangulo->calcularArea(); ?>
                    <br />
                    <?= $triangulo->calcularPerimetro(); ?>
                </p>
            </div>
        </div>
        <div class="card" id="datosRectangulo" style="display:none;">
            <img src="https://i.stack.imgur.com/hZvaO.gif"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Datos Rectangulo</h5>
                <p class="card-text">
                    <hr />
                    <?= $baseRectangulo ?>
                    <br />
                    <?= $alturaRectangulo ?>
                    <br />
                    <?= $rectangulo->calcularArea(); ?>
                    <br />
                    <?= $rectangulo->calcularPerimetro(); ?>
                </p>
            </div>
    </div>
    </div>

    
    <!-- <div id="datosCirculo" style="display:none;">
        
    </div> -->

</body>
</html>

