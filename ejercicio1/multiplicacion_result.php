<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<html>

<head>
    <title>Resultado Tabla de Multiplicar</title>
</head>

<body>
    <div align="center">
        <h3>Número ingresado: <?php
                                $valor = $_POST['valor'];
                                echo $valor;
                                ?></h3>
        <h3>TABLA DE MULTIPLICAR DEL NÚMERO: <?php
                                                $valor = $_POST['valor'];
                                                echo $valor;
                                                ?> </h3>
        <?php
        $valorInicial = 1;
        $valorFinal = 20;
        echo "<div>";
        echo "<table class='table-bordered table-hover text-center' style='width:300px'>";
        echo "<tr>";

        for ($i = $valorInicial; $i <= $valorFinal; $i++) {
            echo "<td>" . $valor . "</td>";
            echo "<td>" . "x" . "</td>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . "=" . "</td>";
            echo "<td>" . $valor * $i . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
        ?>
        <br>
    </div>
    <div align="center">
        <button class="enlace text-center" role="link" onclick="window.location='../index.html'">Volver Al Menú Principal</button>
    </div>

</body>

</html>