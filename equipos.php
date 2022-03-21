<?php
    include "encabezado.php";
    $idenqui='SELECT * FROM equipos WHERE IdEquipo='.$_GET["equi"];
    $conequi=$conn->query($idenqui);
    ?>
    <section class="cover w3-padding mt-5 p-4">
    <?php
    $fila=$conequi->fetch_array();
    $idesta='SELECT * FROM estadios WHERE IdEstadio='.$fila["IdEstadio"];
    $conesta=$conn->query($idesta);
    $filaes=$conesta->fetch_array();
    echo '
    
        <div class="row">
            <div class="col w3-center p-4 m-4">
                <img src="'.$fila["LogoE"].'" alt="" srcset="">
            </div>
            <div class="col p-5 m-5">
                <b><h1 class="mb-5" style="color:white;">'.$fila["NombreE"].'</h1></b> 
                <h4 style="color:white;">Del estado de '.$fila["EstadoOrigen"].'</h4> 
                <h4 style="color:white;">Director tecnico: '.$fila["DirectorTec"].'</h4>
                <h4 style="color:white;">Su estadio el estadio '.$filaes["NEstadio"].' se ubica en '.$filaes["Ubicacion"].' y tiene una capacidad de '.$filaes["Capacidad"].' personas.</h4>
            </div>
        </div>
        ';
    ?>
    </section>

    <!--Seccion para mostrar los porteros-->
    <section class="cporteros">
    <div class="row p-4 w3-center" align="center">
            <h1 style="color:white;" class="mt-5 mb-5">PORTEROS</h1>
            
    <?php
        $idjugadores='SELECT * FROM jugadores WHERE IdEquipo='.$fila["IdEquipo"].' AND Posicion="portero"';
        $conjug=$conn->query($idjugadores);
            while ($filajg=$conjug->fetch_array()) {
                # code...
            echo '
            <div class="col" align="center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="min-height:2.5rem;">'.$filajg["Njugador"].'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">'.$filajg["Posicion"].'</h6>
                    <p class="card-text" style="min-height:9rem;">Nacionalidad: '.$filajg["Nacionalidad"].'<br/>Edad: '.$filajg["Edad"].'<br/>Tarjetas Amarillas: '.$filajg["Amonestaciones"].' Expulsiones: '.$filajg["Expulsiones"].'</p>
                </div>
            </div>
            </div>
        ';
            }
    ?>
    </div>
    </section>

    <!--Seccion para los defensas-->
    <section class="cdefensas">
    <div class="row p-4 w3-center" align="center">
            <h1 style="color:white;" class="mt-5 mb-5">DEFENSAS</h1>
            
    <?php
        $idjugadores2='SELECT * FROM jugadores WHERE IdEquipo='.$fila["IdEquipo"].' AND Posicion="Defensa"';
        $conjug2=$conn->query($idjugadores2);
            while ($filajg2=$conjug2->fetch_array()) {
                # code...
            echo '
            <div class="col p-4 m-4" align="center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="min-height:2.5rem;">'.$filajg2["Njugador"].'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">'.$filajg2["Posicion"].'</h6>
                    <p class="card-text" style="min-height:9rem;">Nacionalidad: '.$filajg2["Nacionalidad"].'<br/>Edad: '.$filajg2["Edad"].'<br/>Tarjetas Amarillas: '.$filajg2["Amonestaciones"].' Expulsiones: '.$filajg2["Expulsiones"].'</p>
                </div>
            </div>
            </div>
        ';
            }
    ?>
    </div>
    </section>

    <!--Seccion para los medios-->

    <section class="cmedios">
    <div class="row p-4 w3-center" align="center">
            <h1 style="color:white;" class="mt-5 mb-5">MEDIOS</h1>
            
    <?php
        $idjugadores3='SELECT * FROM jugadores WHERE IdEquipo='.$fila["IdEquipo"].' AND Posicion="Defensa"';
        $conjug3=$conn->query($idjugadores3);
            while ($filajg3=$conjug3->fetch_array()) {
                # code...
            echo '
            <div class="col p-4 m-4" align="center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="min-height:2.5rem;">'.$filajg3["Njugador"].'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">'.$filajg3["Posicion"].'</h6>
                    <p class="card-text" style="min-height:9rem;">Nacionalidad: '.$filajg3["Nacionalidad"].'<br/>Edad: '.$filajg3["Edad"].'<br/>Tarjetas Amarillas: '.$filajg3["Amonestaciones"].' Expulsiones: '.$filajg3["Expulsiones"].'</p>
                </div>
            </div>
            </div>
        ';
            }
    ?>
    </div>
    </section>

    <style>
        :root{
    --color-dark: #1b1b1b;
    --color-light: #ffffffff;
    --color-gold: #c7b8a5;
}
        body{
            background-color: var(--color-dark);
        }
    </style>