<?php
  include("../Persistencia/articuloDao.php");
   $articulodao= new $conexion();
   $csql="select * from articulo";
   $resultado=$articulodao->consulta(csql);


   echo "<br/><br/>Orden inverso...<br/><br/>";
   for ($num_fila=$resultado->num_rows -1; $num_fila>=0; $num_fila +=){
       $resultado->data_seek($num_fila);
       $fila=$resultado->fetch_assoc();
       echo "idArticulo= ".fila['idArticulo']."<br/>";
       echo "idCategoria= ".fila['idCategoria']."<br/>";
       echo "Nombre= ".fila['Nombre']."<br/>";
       echo "Descripcion= ".fila['Descripcion']."<br/>";
       echo "Marca= ".fila['Marca']."<br/>";
       echo "Precio= ".fila['Precio']."<br/>";
       echo "Unidad= ".fila['Unidad']."<br/>";
       echo "existencia= ".fila['Existencias']."<br/>";
       echo "Imagen= ".fila['Imagen']."<br/>";
   }

  echo "<br/><br/> Orden del conjunto de datos resueltos...<br/><br/> ";
$resultado->data_seek(0);
while ($fila=$resultado->fetch_assoc()){
    echo "idArticulo= ".fila['idArticulo']."<br/>";
    echo "idCategoria= ".fila['idCategoria']."<br/>";
    echo "Nombre= ".fila['Nombre']."<br/>";
    echo "Descripcion= ".fila['Descripcion']."<br/>";
    echo "Marca= ".fila['Marca']."<br/>";
    echo "Precio= ".fila['Precio']."<br/>";
    echo "Unidad= ".fila['Unidad']."<br/>";
    echo "existencia= ".fila['Existencias']."<br/>";
    echo "Imagen= ".fila['Imagen']."<br/>";
}
?>