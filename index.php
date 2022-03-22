<?php
    include "encabezado.php";
    
?>

<div class="w3-container slider">
    <ul>
        <li><img src="recursos/slider1.jpg" alt=""></li>
        <li><img src="recursos/slider2.jpg" alt=""></li>
        <li><img src="recursos/slider3.jpg" alt=""></li>
        <li><img src="recursos/slider4.jpg" alt=""></li>
    </ul>
</div>
<section class="p-4">
    <h1 style="color:green;">Equipos</h1>
    <div class="row">
        
<?php
    $equipos='SELECT * FROM equipos';
    $conequi=$conn->query($equipos);
     while($filaeq=$conequi->fetch_array()){
        echo '
        <div class="col centered ">     
        <div class="card p-4 m-2" style="width: 18rem;">
        <img class"logoe" style="height:250px;" src="'.$filaeq["LogoE"].'" class="card-img-top" alt="...">
        <div class="card-body>
          <h5 class="card-title" style="color:green;">'.$filaeq["NombreE"].'</h5>
          <p class="card-text" style="color:black;">Posicion: '.$filaeq["Posicion"].'</p>
          <p class="card-text" style="min-height: 5rem;color:black;">Director Tecnico: '.$filaeq["DirectorTec"].'</p>
          
          <a href="equipos.php?equi='.$filaeq["IdEquipo"].'" class="btn btn-success">Mas de '.$filaeq["NombreE"].'</a>
        </div>
      </div>
      </div>
        '; 
     }
?>
</div>

</section>


<!--
    <div class="card" style="width: 18rem;">
  <img src="recursos/slider1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$filaeq["NombreE"].'</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Mas informacion</a>
  </div>
</div>
-->