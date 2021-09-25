<html>

<head>
  <title>descuento clientes</title>
  <link rel="stylesheet" href="estilos.css">
</head>

<body style="background-color:#00fff2;">
</body>
  <?php
    echo "<b>El nit ingresado es </b>:" . $_REQUEST['cui'];
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

    echo "<b>La tienda es: </b>" . $_REQUEST['select'];
    echo "<br>";

    
    
    
 
  ?>
</body>

</html>
