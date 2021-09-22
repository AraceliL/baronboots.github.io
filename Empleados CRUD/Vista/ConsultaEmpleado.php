<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personas</title>

</head>
<body>
   <?php
   $reultado->data_seek(0); 
   while ($fila=$resultado->fetch_assoc()){
    echo "id"=.$fila['id']."<br/>";
    echo "nombre"=.$fila['nombre']."<br/>";
    echo "apellidos"=.$fila['apellidos']."<br/>";
    echo "sueldo"=.$fila['sueldo']."<br/>";

   }
   ?>
</body>
</html>