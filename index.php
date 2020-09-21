<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Semana 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-home"></i>
            INICIO
        </a>
    </nav>

<!-- Respuesta de la pregunta 1 -->

    <div class="container">

        <div class="card my-4">

            <div class="card-header">
                <p class="text-center font-weight-bold">1.- Muestre por pantalla los números del 30 hasta el 10 (de manera decreciente) utilizando ciclo FOR</p>
            </div>
            <div class="card-body text-center">
                <?php

                for ($i = 30; $i >= 10; $i--) {

                    echo $i . " - ";
                }

                ?>
            </div>
        </div>


<!-- Respuesta de la pregunta 2 -->


        <div class="card my-4">

            <div class="card-header">
                <p class="text-center font-weight-bold">2.- Utilizando el ciclo WHILE, declare una variable que tome los valores del 1 al 5 y muestre en pantalla el doble de su valor, es decir, en pantalla debe mostrar:</p>
            </div>
            <div class="card-body text-center">
                <?php

                $valores = [1, 2, 3, 4, 5];
                $i = 0;

                while ($i < count($valores)) {

                    $resultado = $valores[$i] * 2;

                    echo "$i multiplicado por 2 es: " . $resultado . "<br/>";

                    $i++;
                }

                ?>
            </div>
        </div>

<!-- Respuesta de la pregunta 3 -->

        <div class="card my-4">

            <div class="card-header">
                <p class="text-center font-weight-bold">3.- Diseñe un programa que reciba un valor entre 1 y 12 y muestre el mes del año al que equivale, tomando en cuenta que enero es el mes 1 y diciembre el mes 12. Declare la variable del dato de entrada y asigne un valor de referencia como prueba.</p>
            </div>

            <div class="card-body text-center">

                <div class="container w-50 p-3 d-inline-block">
                    <form action="index.php" method="POST">

                        <div class="form-group">
                            <label for="mes">Consulte mes</label>
                            <input type="number" class="form-control" name="mes" id="mes" placeholder="Por ejemplo 1 = Enero">
                        </div>

                        <button type="submit" class="btn btn-primary">Calcular</button>

                    </form>
                </div>

                <div class="container w-50 p-3 d-inline-block">
                    <?php 
                    
                    $mes =  ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

                    if(!isset($_POST['mes'])){

                        echo 
                        '<div class="alert alert-danger" role="alert">
                            <strong>Ingrese un mes válido</strong>
                        </div>';

                    }elseif($_POST['mes'] > 0 && $_POST['mes'] <= 12){

                        $indice = $_POST['mes'] - 1;

                        echo 
                        '<div class="alert alert-success" role="alert">
                            El mes ingresado es: <strong>'. $mes[$indice].'</strong>
                        </div>';

                    }elseif($_POST['mes'] >= 13){

                        echo 
                        '<div class="alert alert-danger" role="alert">
                            <strong>Ingrese un mes válido</strong>
                        </div>';

                    }
                    
                    ?>
                </div>

            </div>
        </div>

<!-- Respuesta de la pregunta 4 -->

        <div class="card my-4">
                        
            <div class="card-header">
                <p class="text-center font-weight-bold">4.- Calcule el sueldo que le corresponde al trabajador de una empresa que cobra $400.000 mensuales</p>
            </div>

            <div class="card-body text-center">
                <?php

                    $sueldofinal = 0;

                    function getAjuste($antiguedad){

                        switch($antiguedad){
                            case ($antiguedad >= 10):
                                $sueldofinal = 400000 * 1.1;
                                break;
                            case (5 <= $antiguedad && $antiguedad < 10):
                                $sueldofinal = 400000 * 1.07;
                                break;
                            case (3 <= $antiguedad && $antiguedad < 5):
                                $sueldofinal = 400000 * 1.05;
                                break;
                            case (3 > $antiguedad):
                                $sueldofinal = 400000 * 1.03;
                                break;
                        }

                        return $sueldofinal;

                    }

                ?>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sueldo base[$]</th>
                            <th>Antiguedad[A]</th>
                            <th>Aumento[%]</th>
                            <th>Sueldo final[$]</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <th>$400000</th>
                            <th>+ 10</th>
                            <th>10%</th>
                            <th> <?php echo getAjuste(11); ?> </th>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <th>$400000</th>
                            <th>5 < A < 10</th>
                            <th>7%</th>
                            <th><?php echo getAjuste(8); ?></th>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th>$400000</th>
                            <th>3 < A < 5</th>
                            <th>5%</th>
                            <th><?php echo getAjuste(4); ?></th>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <th>$400000</th>
                            <th>- 3</th>
                            <th>3%</th>
                            <th><?php echo getAjuste(2); ?></th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

<!-- Respuesta de la pregunta 5 -->

        <div class="card my-4">

            <div class="card-header">
                <p class="text-center font-weight-bold">5.- Dada la altura y la edad de N cantidad de personas, determine si es apto para jugar en un equipo de baloncesto. Debe considerar que la persona debe tener 18 años o más, y debe medir 1,70 m o más</p>
            </div>
            <div class="card-body">
                
                <div class="card-deck">
                    
                    <div class="card p-3">
                            <form id="selection">

                                <div class="form-group">
                                    <label for="altura">Ingrese la altura</label>
                                    <input type="text" class="form-control" name="altura" id="altura">
                                </div>

                                <div class="form-group">
                                    <label for="edad">Ingrese la edad</label>
                                    <input type="number" class="form-control" name="edad" id="edad">
                                </div>

                                <button type="submit" class="btn btn-primary">Verificar</button>

                            </form>
                    </div>

                    <div class="card p-3" data-spy="scroll">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Aceptados</th>
                                    <th>Rechazados</th>
                                    <th>Altura</th>
                                    <th>Edad</th>
                                    <th>Aprobado</th>
                                </tr>
                            </thead>
                            <tbody id="celda"></tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>

</div>


    <footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="app.js"></script>
    </footer>

</body>

</html>