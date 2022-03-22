<?php
    include "encabezado.php";
?>

<?php
    $cons1='SELECT * FROM partidos';
    $conex1=$conn -> query($cons1);
    while ($fila1=$conex1->fetch_array()) {
        # code...
        $cons2='SELECT * FROM equipos WHERE idEquipo='.$fila1["IdEquipos"];
        $conex2=$conn -> query($cons2);
        $fila2=$conex2->fetch_array();

        $cons3='SELECT * FROM equipos WHERE idEquipo='.$fila1["IdEquipos2"];
        $conex3=$conn -> query($cons3);
        $fila3=$conex3->fetch_array();

        echo '
        <section class="  container p-4 mt-5 mb-5" align="center">
        <a style="width:95%;" class="w3-round pl w3-button w3-hover-dark-grey" data-bs-toggle="collapse" href="#Collapse'.$fila1["Idpartido"].'" role="button" aria-expanded="false" aria-controls="Collapse">
            <div class=" container p-5" align="center">

                <div class="row">
                    <div class="col"><img src="'.$fila2["LogoE"].'" alt="" srcset=""><br/><h3>'.$fila2["NombreE"].'</h3></div>
                    <div class="col align-items-center"><h3>J-'.$fila1["Idpartido"].'</h3><br/><h1>'.$fila1["Resultado"].'</h1></div>
                    <div class="col"><img src="'.$fila3["LogoE"].'" alt="" srcset=""><br/><h3>'.$fila3["NombreE"].'</h3></div>
                </div>
            </div>
            <div class="collapse multi-collapse" id="Collapse'.$fila1["Idpartido"].'">
              <div class="card card-body">
                <p>Albitro: '.$fila1["NArbitro"].'<br/>
                Total de cambios en el partido: '.$fila1["cambios"].'<br/>
                Expulsiones totales: '.$fila1["expulsiones"].'<br/>
                Tarjetas Amarillas: '.$fila1["amonestaciones"].'<br>
                Penales cobrados: '.$fila1["penaltis"].'<br>
                </p>                
              </div>
        </a>
        
        </section>
        ';
    }

?>

<style>
    :root{
    --color-dark: #1b1b1b;
    --color-light: #ffffffff;
    --color-gold: #c7b8a5;
}
        body{
            background-color: var(--color-dark);
        }
.collapse .card{
    background-color: rgba(0, 0, 0, .5);
    background-blend-mode: darken;
    color: white;
}

    .pl{
        background-image: url(recursos/bannerpartido1.jpg);
        background-color: rgba(0, 0, 0, .3);
    background-blend-mode: darken;
    color: var(--color-light);
    
    }

    img{
        width: 15rem;
        height: 15rem;
    }
    
</style>


<?php
  include 'pie.php';
?>