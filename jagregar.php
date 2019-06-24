<?php
	mysql_connect("localhost","root") or die("Problemas con la conexion");
	mysql_select_db("jurydoc") or die("Problemas con la base de datos");
	$query = "select * from tderecho";
	$rene = mysql_query($query) or die("Problema en el selector");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Jurisprudencia del TSJ de Venezuela</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/juris.css">
		<script type="text/javascript" src="js/juris.js"></script>
	</head>
	<body>
		<script type="text/javascript">
			fjuris= new Date()
		</script>
		<div id="principal">
			<header>
				<img src="imagenes/system juris.jpg">
			</header>
			<nav>

			</nav>
			<section>
				<div id="formulario">
					<form method="post" action="agregar.php">
								<br>
								<label>Tipo de Derecho:</label>
									<select name="tpderecho" id="tpderecho">
										<option value="0">Selecciona una opción...</option>
										<?php
											while ($values = mysql_fetch_array($rene))
												{
													echo '"<option value="'.$values[tderecho].'">'.$values[tderecho].'</option>"';
												}

										?>
									</select>
								<br>
								<br>
								<label> Tema Jurispudencia:</label>
								<textarea name="tjuris" id="tjuris" rows=3 cols=105></textarea>
								<br>
								<br>
								<label>Nro. de Sentencia:</label>
								<input type="text" name="njuris" id="njuris" size=30>
								<br>
								<br>
								<label>Fecha:</label>
								<input type="text" title="AAAA-MM-DD" size=8 name="fjuris" id="fjuris"></td>
								<br>
								<br>
								<label>Contenido:</label>
								<textarea name="cjuris" id="cjuris" rows=25 cols=105></textarea>
								<br>
								<input class="boton" type="button" id="btn1" value="Agregar">
								<input class="boton" type="button" id="btn2" value="Cancelar">
						</form>
				</div>
				<div id="publicidad">

				</div>
			</section>
			<footer>
					René García Luces
					<br>
					Copyright ArrowSoft,C.A.
			</footer>
			<div>
			</div>
		</div>
	</body>
</html>
