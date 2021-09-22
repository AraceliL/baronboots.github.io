<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articulos</title>

</head>
<body>
   <?php
   $reultado->data_seek(0); 
   while ($fila=$resultado->fetch_assoc()){
 
    echo "idArticulo"= .$fila['idArticulo']."<br/>";
    echo "idCategoria"=.$fila['idCategoria']."<br/>";
    echo "Nombre"= .$fila['Nombre']."<br/>";
    echo "Descripcion"= .$fila['Descripcion']."<br/>";
    echo "Marca"= .$fila['Marca']."<br/>";
    echo "Precio"= .$fila['Precio']."<br/>";
    echo "Unidad"= .$fila['Unidad']."<br/>";
    echo "existencia"= .$fila['Existencias']."<br/>";
    echo "Imagen"= .$fila['Imagen']."<br/>";

   }
   ?>
</body>
</html>