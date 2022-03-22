<?php
    include "encabezado.php";
?>

<section class="container p-4 mt-5 mb-5">
<table class="table">
<thead>
    <tr>
      <th scope="col">Posicion</th>
      <th scope="col">Escudo</th>
      <th scope="col">Nombre del Equipo</th>
      <th scope="col">Director tecnico</th>
      <th scope="col">PG</th>
      <th scope="col">PE</th>
      <th scope="col">PP</th>
      <th scope="col">PT</th>
      
    </tr>
  </thead>
    <?php
        $cone='SELECT * FROM equipos';
        $conex=$conn->query($cone);
       while ($fila=$conex->fetch_array()) {
           # code...
            echo '
            <tr>
            <th scope="row">'.$fila["IdEquipo"].'</th>
            <td><img style="width:2.5rem;heigth:2.5rem;" src="'.$fila["LogoE"].'" alt="" srcset=""></td>
            <td>'.$fila["NombreE"].'</td>
            <td>'.$fila["DirectorTec"].'</td>
            <td>'.$fila["pg"].'</td>
            <td>'.$fila["pe"].'</td>
            <td>'.$fila["pp"].'</td>
            <td>11</td>
            </tr>
            ';
       }
    ?>
  
  <tbody>
    
  </tbody>
</table>
</section>

