<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Padaria</title>
	</head>

	<body>
		<?php
			$s = $_POST["vlCompra"];
			$d = 0.00;
			echo "<table border=1px><tbody>";
			echo "<tr><td>Valor comprado: </td><td>$s</td></tr>";
			if ($s > 50){
				$d = 2.5;
				if ($s > 100){
					$d = 10;
					}}
			echo "<tr><td>Desconto: </td><td>$d%</td></tr>";
			$s = $s*((100-$d)/100);
			echo "<tr><td>Valor total: </td><td>$s</td></tr>";
			echo "</tbody></table>";
		?>
    </body>

</html>
