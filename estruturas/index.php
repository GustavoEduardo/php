<select>
	<option>Escolha a Marca</option>

	<?php
	$marcas = ["Fiat","Renaut","Chevrolet","Renaut","Volks"];

	foreach ($marcas as $marca) {
		echo "<option value=$marca>$marca</option>";
	}

	?>
</select>