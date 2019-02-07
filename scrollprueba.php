<HTML>
<HEAD>
<TITLE>Actualizar1.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Actualizar un registro</h1>
<br>
<?php
include("conexion.php");

echo '<form method="POST" ACTION="actualizar2.php">Origen<br>';

//Creamos la sentencia SQL y la ejecutamos
$selectorigen = "SELECT DISTINCT origen FROM viajes ORDER BY origen";
//echo $selectorigen;

$result=mysql_query($selectorigen);

echo '<select name="origen">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["origen"];}
?>
</select>
<br>
Teléfono<br>
<INPUT TYPE="TEXT" NAME="telefono"><br>
<INPUT TYPE="SUBMIT" value="Actualizar">
</form>
</div>

</BODY>
</HTML>