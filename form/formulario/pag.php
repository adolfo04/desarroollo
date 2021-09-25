<html>

<head>
  <title>Calcular El Descuento</title>
  <link rel="stylesheet" href="estilos.css">
</head>

<body style="background-color:#00fff2;">
</body>
  <?php
    echo "<b>El CUI ingresado es </b>:" . $_REQUEST['cui'];
    echo "<br>";

    echo "<b>Primer Nombre: </b>" . $_REQUEST['primernombre'];
    echo "<br>";

    echo "<b>Segundo Nombre: </b>" . $_REQUEST['segundonombre'];
    echo "<br>";

    echo "<b>Primer Apellido: </b>" . $_REQUEST['primerapellido'];
    echo "<br>";

    echo "<b>Segundo Apellido: </b>" . $_REQUEST['segundoapellido'];
    echo "<br>";

    echo "<b>La edad del estudiante: </b>" . $_REQUEST['edad'];
    echo "<br>";

    echo "<b>El email es: </b>" . $_REQUEST['email'];
    echo "<br>";

    echo "<b>El telefono es: </b>" . $_REQUEST['telefono'];
    echo "<br>";

    echo "<b>La universidad es: </b>" . $_REQUEST['select'];
    echo "<br>";

    echo "<b>Tu Promedio: </b>" . $_REQUEST['promedio'];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    $precio = 900;
    $promedio = $_REQUEST['promedio'];
    
    if ($promedio > 89)
    {
      echo "<b>Por tener el promedio Mayor a 89 tienes un descuento del 70% y pagas Q.</b>" . ($precio*0.7);
    }
    elseif ($promedio >=80 && $promedio <=89){
      echo "<b>Por tener el promedio entre 80 y 89 tienes un descuento del 40% y pagas Q.</b>" . ($precio*0.4);
    }
    elseif ($promedio < 80){
      echo "<b>Por tener el Promedio menor a 80 no tienes ningun descuento y pagas Q.</b>" . ($precio);
    }
    
 
  ?>
</body>

</html>