<main>
	<h1 class="text-center">REPORTE DE REGGAETON</h1>
	<div class="row">
		<div class="col-md-12">
			<div id="mapaLugares" style="height:600px; width:100%; border:2px solid black;"></div>
		</div>
	</div>

<script type="text/javascript">

function initMap()
{
	var centro= new google.maps.LatLng(-1.448928511784908, -78.5226672915723);
	//Permite construir el mapa
	var mapaLugaresReggaeton= new google.maps.Map(
		document.getElementById('mapaLugares'), //Primer parametro que se captura con su ID
		{
			//Configuracion JSON JavaScript Object
			center:centro,
			zoom:6.8,
			mapTypeId:google.maps.MapTypeId.HYBRID
		}
	);
	
	//Validacion
	<?php if($lugaresReggaeton): ?>
		<?php foreach ($lugaresReggaeton as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_2023_MJ;?>,<?php echo $lugarTemporal->longitud_2023_MJ;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombre_2023_MJ;?>",
			icon:"<?php echo base_url();?>/assets/images/mark/markRojoo2.png",
			map:mapaLugaresReggaeton
		});
		marcador.setMap(mapaLugaresReggaeton)
		<?php endforeach; ?>
	<?php endif; ?>
	}//Cierre de la funcion initMap
</script>
</main>
