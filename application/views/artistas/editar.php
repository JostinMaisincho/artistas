<h1  class="text-center">EDITAR CLIENTE</h1>
<br><br>
<form class="" id="frm_editar_artista" action="<?php echo site_url("artistas/procesarActualizacion")?>" method="post">
<div class="row">
    <div class="col-md-2"></div>

      <div class="col-md-4">
          <input type="text" name="idCantante_2023_MJ" id="idCantante_2023_MJ" value="<?php echo $artistaEditar->idCantante_2023_MJ;?>">

          <label for="">Nombre:<span class="obligatorio">(obligatorio)</span></label>
          <br>
          <input type="text"  class="form-control" required  name="nombre_2023_MJ" value="<?php echo $artistaEditar->nombre_2023_MJ;?>" id="nombre_2023_MJ" placeholder="Ingrese su nombre">

        </div>

        <div class="col-md-4">
            <label for="">Apellido:<span class="obligatorio">(obligatorio)</span></label>
            <br>
            <input type="text"  class="form-control" required  name="apellido_2023_MJ" value="<?php echo $artistaEditar->apellido_2023_MJ;?>" id="apellido_2023_MJ" placeholder="Ingrese su segundo apellido">

          </div>

        <div class="col-md-2"></div>

    </div>

    <br><br>


<div class="row">
    <div class="col-md-2"></div>

        <div class="col-md-4">
            <label for="">Apodo:<span class="obligatorio">(obligatorio)</span></label>
            <br>
            <input type="text"  class="form-control" required  name="apodo_2023_MJ" value="<?php echo $artistaEditar->apodo_2023_MJ;?>" id="apodo_2023_MJ" placeholder="Ingrese su apodo">

        </div>

      <div class="col-md-4">
          <label for="">Costo:<span class="obligatorio">(obligatorio)</span></label>
          <br>
          <input type="text"  class="form-control" required  name="costo_2023_MJ" value="<?php echo $artistaEditar->costo_2023_MJ;?>" id="costo_2023_MJ" placeholder="Ingrese costo">

      </div>

      <div class="col-md-2"></div>

</div>

<br><br>

<div class="row">
    <div class="col-md-2"></div>

    <div class="form-group col-md-4">
      <label for="inputState">Genero Musical</label>
      <select id="musica_2023_MJ" class="form-control" name="musica_2023_MJ">
        <option selected>Rock</option>
        <option>Pop</option>
        <option>Reggaeton</option>
        <option>Baladas</option>
      </select>
    </div>

        <div class="col-md-4">
            <label for="">Fecha:<span class="obligatorio">(obligatorio)</span></label>
            <br>
            <input type="text"  class="form-control" required  name="fecha_2023_MJ" value="<?php echo $artistaEditar->fecha_2023_MJ;?>" id="fecha_2023_MJ" placeholder="Ingrese su fecha de nacimiento">

        </div>

      <div class="col-md-2"></div>

</div>

<br><br>

<div class="row">
    <div class="col-md-2"></div>

            <div class="col-md-4">
                <label for="">latitud:<span class="obligatorio">(obligatorio)</span></label>
                <br>
                <input type="text"  class="form-control" required  name="latitud_2023_MJ" value="<?php echo $artistaEditar->latitud_2023_MJ;?>" id="latitud_2023_MJ" placeholder="Ingrese su latitud">

            </div>

            <div class="col-md-4">
                <label for="">longitud:<span class="obligatorio">(obligatorio)</span></label>
                <br>
                <input type="text"  class="form-control" required  name="longitud_2023_MJ" value="<?php echo $artistaEditar->longitud_2023_MJ;?>" id="longitud_2023_MJ" placeholder="Ingrese su email">

            </div>

<div class="col-md-2"></div>

</div>

<!-- validar -->



<!-- validar -->

<br>

<div class="row">
    <div class="col-md-12 text-center">

      <button type="submit" name="button" class="btn btn-primary">Guardar</button>&nbsp;
      <a href="<?php echo site_url(); ?>/artistas/index" class="btn btn-danger">Cancelar </a>
    </div>

  </div>
</form>
