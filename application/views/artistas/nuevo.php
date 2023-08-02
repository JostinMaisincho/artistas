<h1>NUEVO CLIENTE</h1>
<form class="" action="<?php echo site_url(); ?>/artistas/guardar" method="post">
    <div class="row">
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
          <label for="">Nombre:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el Nombre"
          class="form-control"
          name="nombre_2023_MJ" value="" id="nombre_2023_MJ">
      </div>
      <div class="col-md-4">
        <label for="">Apellidos:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el Apellidos"
        class="form-control"
        name="apellido_2023_MJ" value="" id="apellido_2023_MJ">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Apodo:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el Apodo"
          class="form-control"
          name="apodo_2023_MJ" value="" id="apodo_2023_MJ">
      </div>
      <div class="col-md-4">
        <label for="">Costo:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su Costo"
        class="form-control"
        name="costo_2023_MJ" value="" id="costo_2023_MJ">
      </div>
      <div class="col-md-4">
        <label for="">Fecha:</label>
        <br>
        <input type="text"
        placeholder="Ingrese la Fecha"
        class="form-control"
        name="fecha_2023_MJ" value="" id="fecha_2023_MJ">
      </div>
     
      <div class="col-md-4">
        <label for="">LATITUD:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su latitud"
        class="form-control"
        name="latitud_2023_MJ" value="" id="latitud_2023_MJ">
      </div>
          
      <div class="col-md-4">
        <label for="">LONGITUD:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su longitud"
        class="form-control"
        name="longitud_2023_MJ" value="" id="longitud_2023_MJ">
      </div>
    </div>
    <br>
    <div class="row">
      <br>  
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/artistas/index" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</form>
