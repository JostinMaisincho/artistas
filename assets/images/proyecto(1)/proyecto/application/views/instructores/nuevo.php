<From CLASS="" action="ojo" method="post">

	<!-- Crear un contenedor para la página -->
	<div class="container">

		<!-- Crear una fila para el encabezado de la página -->
		<div class="row mt-3">
			<div class="col-md-12">
				<hr class="my-4">
				<h1 class="text-center">DATOS DEL INSTRUCTOR NUEVO</h1>
				<hr class="my-4">
			</div>
		</div>

		<!-- Crear una fila para la lista de cenas -->
		<div class="row mt-3">
			<div class="col-md-4">
				<div class="card">
          <div class="card-body">

            <label for="">Cedula</label>
            <br>
            <input type="number"placeholder="Ingrese la Cedula" class="from-control" name="ceduala_ins" value="">
            </div>
					</div>
				</div>

			<div class="col-md-4">
				<div class="card">
          <div class="card-body">

            <label for="">Primer apellido</label>
            <br>
            <input type="number"placeholder="Ingrese el Primer Apellido" class="from-control" name="primer_apellido_ins" value="">

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
          <div class="card-body">

            <label for="">Segundo Apellido</label>
            <br>
            <input type="number"placeholder="Ingrese el Segundo Apellido" class="from-control" name="segundo_apellido_ins" value="">

					</div>
				</div>
			</div>
		</div>

	</div>
  <!-- Crear un contenedor para la página -->
	<div class="container">

		<!-- Crear una fila para el encabezado de la página -->
		<div class="row mt-3">
			<div class="col-md-12">
				<h1 class="text-center"></h1>
			</div>
		</div>

		<!-- Crear una fila para la lista de cenas -->
		<div class="row mt-3">
			<div class="col-md-4">
				<div class="card">
          <div class="card-body">

            <label for="">Nombres</label>
            <br>
            <input type="number"placeholder="Ingrese los Nombres" class="from-control" name="nombres_apellido_ins" value="">

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
          <div class="card-body">

            <label for="">Titulo</label>
            <br>
            <input type="number"placeholder="Ingrese el Titulo" class="from-control" name="titulo_ins" value="">

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">

					<div class="card-body">

            <label for="">Telefono</label>
            <br>
            <input type="number"placeholder="Ingrese el Telefono " class="from-control" name="telefono_ins" value="">

					</div>
				</div>
			</div>
		</div>
  </div>
<br>
  <div class="flex-nowrap">

      <div class="card-body  text-center ">
        <label for="">Dirección</label>
        <br>
        <input type="number" placeholder="Ingrese la Dirección" class="form-control" name="direccion_ins" value="">
      </div>

  </div>

</form>

<br>

<div class="col-md-12 text-center">
<button type="submit" name="button" class="btn btn-primary">
Guardar
</button>
&nbsp;
<a href="<?php  echo site_url(); ?>/instructores/index" class="btn btn-danger">
Cancelar
</a>
<div>
