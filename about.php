<?php
include('head.php');
include('arreglos.php')
?>
<div class="container">
    <div class="row">
        <div class="col-12">
                <?php 
                    for ($r=0; $r < count($Sobrenosotros); $r++) {
                        foreach ($Sobrenosotros[$r] as $llave => $columna) {
                            switch ($llave) {
                                case 'bienvenida':
                                    $bienvenidaV = $columna;
                                    break;
                                case 'mision':
                                    $misionV = $columna;
                                    break;
                                case 'vision':
                                    $visionV = $columna;
                                    break;
                                case 'nosotros':
                                    $nosotrosV = $columna;
                                    break;
                                default:
                                    echo '<p>Algo Salio mal</p>';
                                    break;
                            }
                        }

                        echo '<div class="text-center">';
                                echo '<h2>ABOUT US</h2>';
                                echo '<h3>'.$bienvenidaV.'</h3>';
                                echo '<p>'.$misionV.'</p>';
                                echo '<br><p>'.$visionV.'</p>';
                                echo '<br><p>'.$nosotrosV.'</p>';
                        echo '</div>';
                    }

                ?>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>