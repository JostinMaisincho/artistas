<main>
	<h1 class="text-center">REPORTE GENERAL</h1>
	<div class="row">
		<div class="col-md-2">
			<br><br><br><br><br><br><br>
			<table class="table table-striped table-hover table-responsive" >
					<tr>
							<th class="text-center"><img src="https://res.cloudinary.com/black-royal/image/upload/v1690948761/markAzull1_hfxtxi.png"></th>
							<td class="text-center">ROCK</td>
					</tr>
					<tr>
							<th class="text-center"><img src="https://res.cloudinary.com/black-royal/image/upload/v1690948761/marknegro_ladxmg.png"></th>
							<td class="text-center">POP</td>
					</tr>
					<tr>
							<th class="text-center"><img src="https://res.cloudinary.com/black-royal/image/upload/v1690948761/markRojoo2_qw84ox.png"></th>
							<td class="text-center">REGGAETON</td>
					</tr>
					<tr>
							<th class="text-center"><img src="https://res.cloudinary.com/black-royal/image/upload/v1690948761/markVerde3_n23bzc.png"></th>
							<td class="text-center"> BALADAS</td>
					</tr>
					
			</table>
		</div>
		<div class="col-md-10">
			<div id="mapaLugares" style="height:600px; width:100%; border:2px solid black;"></div>
		</div>
	</div>

<script type="text/javascript">

function initMap()
{
	var centro= new google.maps.LatLng(-1.448928511784908, -78.5226672915723);
	//Permite construir el mapa
	var mapaLugarescantantes= new google.maps.Map(
		document.getElementById('mapaLugares'), //Primer parametro que se captura con su ID
		{
			//Configuracion JSON JavaScript Object
			center:centro,
			zoom:6.8,
			mapTypeId:google.maps.MapTypeId.HYBRID
		}
	);
	//Validacion Pre
	<?php if($lugares): ?>
		<?php foreach ($lugares as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_2023_MJ;?>,<?php echo $lugarTemporal->longitud_2023_MJ;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->musica_2023_MJ;?>",
			icon:"<?php if ($lugarTemporal->musica_2023_MJ=='Rock'):
			echo base_url('/assets/images/mark/markAzull1.png');
			elseif ($lugarTemporal->musica_2023_MJ=='Pop'):
				echo base_url('/assets/images/mark/marknegro.png');
			elseif ($lugarTemporal->musica_2023_MJ=='Reggaeton'):
				echo base_url('/assets/images/mark/markRojoo2.png');
            elseif ($lugarTemporal->musica_2023_MJ=='Baladas'):
                echo base_url('/assets/images/mark/markVerde3.png');
			endif;
			?>",
			map:mapaLugarescantantes
		});
		
		marcador.setMap(mapaLugares)
		<?php endforeach; ?>
	<?php endif; ?>
	}//Cierre de la funcion initMap
</script>
</main>
