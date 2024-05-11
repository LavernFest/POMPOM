<?php
require('../private/init.php');
$id = $_GET['ID'];
$cancion = mysqli_fetch_assoc(canciones_por_id($id));
$artistas = todo_de_tabla('artistas');
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Editar Cancion</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="ID" value="<?= $cancion['ID'] ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Titulo *</label>
                    <input type="text" name="titulo" class="form-control" value="<?= $cancion['titulo'] ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Artista al que corresponde*</label>
                    <select name="ArtistaID">
                        <?php 
                        while ($row = $artistas -> fetch_assoc()){
                            echo '<option value="'.$row['ID'].'">'.$row['Nombre'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="text-end">
                    <input type="submit" value="Editar Cancion" class="btn btn-warning">
                </div>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="../formulario.php" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
</div>
<?php
include(SHARED_PATH . 'footer.php');