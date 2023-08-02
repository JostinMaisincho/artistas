<div class="row">
    <div class="col-md-8">
    <h1>LISTADO DE CANTANTES</h1>
    </div>
    <div class="col-md-4">
        <a href="<?php echo site_url('/artistas/nuevo/');?>" class="btn btn-primary">
            <i class="glyphicon glyphicon-plus"></i>
        agregar CANTANTES
        </a>
        

    </div>

</div>
<br>
<?php if ($artistas):?>
    <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>APODO</th>
                <th>COSTO</th>
                <th>MUSICA</th>
                <th>FECHA</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($artistas as $filaTemporal):?>
                <tr>
                    <td>
                    <?php echo $filaTemporal->idCantante_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->nombre_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->apellido_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->apodo_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->costo_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->musica_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->fecha_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->latitud_2023_MJ; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->longitud_2023_MJ; ?>
                    </td>
                    <td class="text-center">
                    <a href="<?php echo site_url();?>/artistas/editar/<?php echo $filaTemporal->idCantante_2023_MJ;?>" title="Editar artista" style="color:green;">
                      <i class="mdi mdi-pencil"></i>
                      Editar
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <a href="<?php echo site_url();?>/artistas/eliminar/<?php echo $filaTemporal->idCantante_2023_MJ; ?>"title="Eliminar artista" onclick="return confirm('deseas eliminar');" style="color:red;">
                      <i class="mdi mdi-close"></i>
                      eliminar
                    </a>
                  </td>
                      

                    

                </tr>
            <?php endforeach;?>

        </tbody>
s
    </table>

<?php else: ?>
    <h1>no hay cantantes</h1>
<?php endif;?>
<br>
<br>
<br>
