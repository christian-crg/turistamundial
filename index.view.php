<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/CSS/index.css?v=1.1">
    <title>
        SET - <?php echo APPNAME; ?>
    </title>
</head>
<body>
    <h1>
        <?php echo APPNAME; ?>
    </h1>
<table border="1" height="100%">
	<caption>Tablero</caption>
	<tbody>
		<tr height="40px">
			<td rowspan=3 colspan=3 class="BanderaGroenlandia">
				Groenlandia
			</td>
			<td class="EtiquetasDePreciosSuperior">
				Japón
				<br/>
				$ 250
			</td>
			<td class="EtiquetasDePreciosSuperior">
				Aduana
				<br/>
				Pague $ 100
			</td>
			<td class="EtiquetasDePreciosSuperior">
				China
				<br/>
				$ 250
			</td>
			<td class="EtiquetasDePreciosSuperior">
				Turquía
				<br/>
				$ 220
			</td>
			<td class="EtiquetasDePreciosSuperior">
				Línea Aérea
				<br/>
				Asiática
				<br/>
				$ 200
			</td>
			<td class="EtiquetasDePreciosSuperior">
				Israel
				<br/>
				$ 250
			</td>
			<td class="EtiquetasDePreciosSuperior">
				E-mail
			</td>
			<td class="EtiquetasDePreciosSuperior">
				India
				<br/>
				$ 200
			</td>
			<td class="EtiquetasDePreciosSuperior">
				Rusia
				<br/>
				$ 270
			</td>
			<td rowspan=3 colspan=3 class="BanderaAustralia">
				Oceanía
			</td>
		</tr>
		<tr>
			<td class="CeldaDeBanderaSuperior">
				<span style="position:absolute;">
					<img
						alt="Bandera de Japón"
						src="resources/SVG/Flag_of_Japan.svg"
						class="BanderasSuperiores"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td rowspan=2 class="CeldaDeContenidoSuperior">
				<span style="position:absolute;">
					<img
						alt="Imagen Aduana"
						src="resources/SVG/customs-svgrepo-com.svg"
						class="ContenidoSuperior"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td class="CeldaDeBanderaSuperior">
				<span style="position:absolute;">
					<img
						alt="Bandera de China"
						src="/resources/SVG/Flag_of_the_People's_Republic_of_China.svg"
						class="BanderasSuperiores"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="CeldaDeBanderaSuperior">
				<span style="position:absolute;">
					<img
						alt="Bandera de Turquía"
						src="/resources/SVG/Flag_of_Turkey.svg"
						class="BanderasSuperiores"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td rowspan=2 class="MapaAsia">
				<span style="position:absolute;">
					<img
						alt="Imagen Línea Aérea Asiática"
						src="resources/SVG/arrival-flight-svgrepo-com.svg"
						class="ContenidoSuperior"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td class="CeldaDeBanderaSuperior">
				<span style="position:absolute;">
					<img
						alt="Bandera de Israel"
						src="/resources/SVG/Flag_of_Israel.svg"
						class="BanderasSuperiores"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td rowspan=2>
				<span style="position:absolute;">
					<img
						alt="Imagen E-mail"
						src="resources/SVG/email.svg"
						class="ContenidoSuperior"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td class="CeldaDeBanderaSuperior">
				<span style="position:absolute;">
					<img
						alt="Bandera de India"
						src="/resources/SVG/Flag_of_India.svg"
						class="BanderasSuperiores"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="CeldaDeBanderaSuperior">
				<span style="position:absolute;">
					<img
						alt="Bandera de Rusia"
						src="/resources/SVG/Flag_of_Russia.svg"
						class="BanderasSuperiores"
						width="140"
						height="100"
					/>
				</span>
			</td>
		</tr>
		<tr>
			<td height="20px" width="100px" class="SegmentoAsiáticoDos">
			</td>
			<td height="20px" width="100px" class="SegmentoAsiáticoDos">
			</td>
			<td height="20px" width="100px" class="SegmentoAsiáticoDos">
			</td>
			<td height="20px" width="100px" class="SegmentoAsiáticoUno">
			</td>
			<td height="20px" width="100px" class="SegmentoAsiáticoUno">
			</td>
			<td height="20px" width="100px" class="SegmentoAsiáticoUno">
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Noruega
				<br/>
				$250
			</td>
			<td width="140px" class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Noruega"
						src="/resources/SVG/Flag_of_Norway.svg"
						class="BanderasLateralesIzquierdas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td height="100px" width="20px" class="SegmentoEuropeoUno">
			</td>
			<td rowspan=9 colspan=9 class="MapaDelMundo">
				<canvas id="DicesCanvas" width="80" height="40" alt="Dices">
				</canvas>
				<script src="/SourceCode/main.js">
				</script>
			</td>
			<td class="SegmentoAfricanoDos">
			</td>
			<td width="140px" class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Liberia"
						src="/resources/SVG/Flag_of_Liberia.svg"
						class="BanderasLateralesDerechas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Liberia
				<br/>
				$ 220
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Consulado
			</td>
			<td colspan=2 class="CeldaDeContenidoIzquierdo">
				<span style="position:absolute;">
					<img
						alt="Imagen Consulado"
						src="/resources/SVG/embassy.svg"
						class="ContenidoIzquierdo"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td height="100px" width="20px" class="SegmentoAfricanoDos">
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Nigeria"
						src="/resources/SVG/Flag_of_Nigeria.svg"
						class="BanderasLateralesDerechas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Nigeria
				<br/>
				$ 200
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Alemania
				<br/>
				$ 270
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Alemania"
						src="/resources/SVG/Flag_of_Germany.svg"
						class="BanderasLateralesIzquierdas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td height="100px" width="20px" class="SegmentoEuropeoUno">
			</td>
			<td colspan=2 class="CeldaDeContenidoDerecho">
				<span style="position:absolute;">
					<img
						alt="Imagen Fax"
						src="/resources/SVG/fax-machine-svgrepo-com.svg"
						class="ContenidoDerecho"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Fax
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Polonia
				<br/>
				$ 300
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Polonia"
						src="/resources/SVG/Flag_of_Poland.svg"
						class="BanderasLateralesIzquierdas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td height="100px" width="20px" class="SegmentoEuropeoUno">
			</td>
			<td height="100px" width="20px" class="SegmentoAfricanoDos">
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Sudán"
						src="/resources/SVG/Flag_of_Sudan.svg"
						class="BanderasLateralesDerechas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Sudán
				<br/>
				$ 180
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Línea aérea
				<br/>
				Europea
				<br/>
				$ 200
			</td>
			<td colspan=2 class="MapaEuropa">
				<span style="position:absolute;">
					<img
						alt="Imagen Aerolínea Europea"
						src="/resources/SVG/arrival-flight-svgrepo-com.svg"
						class="ContenidoIzquierdo"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td colspan=2 class="MapaAfrica">
				<span style="position:absolute;">
					<img
						alt="Imagen Aerolínea Africana"
						src="/resources/SVG/arrival-flight-svgrepo-com.svg"
						class="ContenidoDerecho"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Línea aérea
				<br/>
				Africana
				<br/>
				$ 200
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				España
				<br/>
				$ 300
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de España"
						src="/resources/SVG/Flag_of_Spain.svg"
						class="BanderasLateralesIzquierdas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td height="100px" width="20px" class="SegmentoEuropeoDos">
			</td>
			<td height="100px" width="20px" class="SegmentoAfricanoUno">
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Etiopía"
						src="/resources/SVG/Flag_of_Ethiopia.svg"
						class="BanderasLateralesDerechas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Etiopía
				<br/>
				$ 200
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Fax
			</td>
			<td colspan=2 class="CeldaDeContenidoIzquierdo">
				<span style="position:absolute;">
					<img
						alt="Imagen Fax"
						src="/resources/SVG/fax-machine-svgrepo-com.svg"
						class="ContenidoIzquierdo"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td colspan=2 class="CeldaDeContenidoDerecho">
				<span style="position:absolute;">
					<img
						alt="Imagen Embajada"
						src="/resources/SVG/embassy-svgrepo-com.svg"
						class="ContenidoDerecho"
						width="160"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Embajada
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Francia
				<br/>
				$ 320
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Francia"
						src="/resources/SVG/Flag_of_France.svg"
						class="BanderasLateralesIzquierdas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td height="100px" width="20px" class="SegmentoEuropeoDos">
			</td>
			<td height="100px" width="20px" class="SegmentoAfricanoUno">
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Marruecos"
						src="/resources/SVG/Flag_of_Morocco.svg"
						class="BanderasLateralesDerechas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Marruecos
				<br/>
				$ 180
			</td>
		</tr>
		<tr>
			<td class="EtiquetasDePreciosIzquierdo">
				Inglaterra
				<br/>
				$ 350
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Inglaterra"
						src="/resources/SVG/Flag_of_the_United_Kingdom.svg"
						class="BanderasLateralesIzquierdas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td height="100px" width="20px" class="SegmentoEuropeoDos">
			</td>
			<td height="100px" width="20px" class="SegmentoAfricanoUno">
			</td>
			<td class="CeldaDeBanderaLateral">
				<span style="position:absolute;">
					<img
						alt="Bandera de Libia"
						src="/resources/SVG/Flag_of_Libya.svg"
						class="BanderasLateralesDerechas"
						width="140"
						height="100"
					/>
				</span>
			</td>
			<td class="EtiquetasDePreciosDerecho">
				Libia
				<br/>
				$ 150
			</td>
		</tr>
		<tr>
			<td rowspan=3 colspan=3 class="BanderaMéxico">
				Méxicow
			</td>
			<td height="20px" width="100px" class="SegmentoAmericanoUno">
			</td>
			<td height="20px" width="100px" class="SegmentoAmericanoUno">
			</td>
			<td rowspan=2 style="width:100px; height:160px;">
				<img
					alt="Imagen Visas"
					src="resources/SVG/documentation.svg"
					width="100"
					height="160"
  				/>
			</td>
			<td height="20px" width="100px" class="SegmentoAmericanoUno">
			</td>
			<td rowspan=2 class="MapaAmerica">
				<img
					alt="Imagen Línea Aérea Americana"
					src="resources/SVG/arrival-flight-svgrepo-com.svg"
					width="100"
					height="160"
  				/>
			</td>
			<td height="20px" width="100px" class="SegmentoAmericanoDos">
			</td>
			<td height="20px" width="100px" class="SegmentoAmericanoDos">
			</td>
			<td rowspan=2>
				<img
					alt="Imagen E-mail"
					src="resources/SVG/email.svg"
					width="100"
					height="160"
  				/>
			</td>
			<td height="20px" width="100px" class="SegmentoAmericanoDos">
			</td>
			<td rowspan=3 colspan=3 class="Deportado">
				Deportado
			</td>
		</tr>
		<tr>
			<td height="140px" style="max-width: 100px;">
				<img
					alt="Bandera de Estados Unidos"
					src="resources/SVG/Flag_of_the_United_States_(Web_Colors).svg"
					class="BanderasInferiores"
					width="140"
					height="140"
  				/>
			</td>
			<td height="140px" style="max-width: 100px;">
				<img
					alt="Bandera de El Salvador"
					src="resources/SVG/Flag_of_El_Salvador.svg"
					class="BanderasInferiores"
					width="140"
					height="100"
  				/>
			</td>
			<td height="140px" style="max-width: 100px;">
				<img
					alt="Bandera de Panamá"
					src="resources/SVG/Flag_of_Panama.svg"
					class="BanderasInferiores"
					width="140"
					height="100"
  				/>
			</td>
			<td height="140px" style="max-width: 100px;">
				<img
					alt="Bandera de Venezuela"
					src="resources/SVG/Flag_of_Venezuela.svg"
					class="BanderasInferiores"
					width="140"
					height="100"
  				/>
			</td>
			<td height="140px" style="max-width: 100px;">
				<img
					alt="Bandera de Brazil"
					src="resources/SVG/Flag_of_Brazil.svg"
					class="BanderasInferiores"
					width="140"
					height="100"
  				/>
			</td>
			<td height="140px" style="max-width: 100px;">
				<img
					alt="Bandera de Argentina"
					src="resources/SVG/Flag_of_Argentina.svg"
					class="BanderasInferiores"
					width="140"
					height="100"
  				/>
			</td>
		</tr>
		<tr height="40px">
			<td class="EtiquetasDePreciosInferior">
				Estados
				<br/>
				Unidos
				<br/>
				$ 50
			</td>
			<td class="EtiquetasDePreciosInferior">
				El Salvador
				<br/>
				$ 50
			</td>
			<td class="EtiquetasDePreciosInferior">
				Visas
				<br/>
				$ 100
			</td>
			<td class="EtiquetasDePreciosInferior">
				Panamá
				<br/>
				$ 80
			</td>
			<td class="EtiquetasDePreciosInferior">
				Línea Aérea
				<br/>
				Americana
				<br/>
				$ 200
			</td>
			<td class="EtiquetasDePreciosInferior">
				Venezuela
				<br/>
				$ 120
			</td>
			<td class="EtiquetasDePreciosInferior">
				Brazil
				<br/>
				$ 150
			</td>
			<td class="EtiquetasDePreciosInferior">
				E-mail
			</td>
			<td class="EtiquetasDePreciosInferior">
				Argentina
				<br/>
				$ 180
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>