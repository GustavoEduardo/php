<form method="POST"  enctype="multipart/form-data">

	<input type="file" name="userfile">

	<button type="submit">Send</button>


</form>

<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$file = $_FILES["userfile"];

	if ($file["error"]) {

		throw new Exception("Error: ".$file["error"]);
		
	}

	$dirUploads ="uploads";

	if (!is_dir($dirUploads)) {

		mkdir($dirUploads);
	}

	if(move_uploaded_file($file["tmp_name"],$dirUploads.DIRECTORY_SEPARATOR.$file["name"] )){//move da pasta temporaria para a apsta que eu criei

		echo "Upload realizado com secesso";//aqui posso salvar no banco.

	}else{
		throw new Exception("Não foi possivel realizar o upload! ");
		
	}


}

?>