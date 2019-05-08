<?php
session_start();


$SendCadPalestra = filter_input(INPUT_POST, 'SendCadPalestra', FILTER_SANITIZE_STRING);
if($SendCadPalestra){
	//recebe os dados do formulario
	$dia = filter_input(INPUT_POST, 'dia', FILTER_SANITIZE_STRING);
	$tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
	$palestrante = filter_input(INPUT_POST, 'palestrante', FILTER_SANITIZE_STRING);

	//inserir no BD
	$result_msg_cont = "INSERT INTO wp_palestras (dia, tema, palestrante) VALUES (:dia, :tema, :palestrante)";
	$insert_msg_cont = $conn->prepare($result_msg_cont);
	$insert_msg_cont->bindParam(':dia', $dia);
	$insert_msg_cont->bindParam(':tema', $tema);
	$insert_msg_cont->bindParam(':palestrante', $palestrante);

	if ($insert_msg_cont->execute()) {
		$_SESSION['msg'] = "<p style='color:green;font-weight:bold;'>Mensagem enviada</p>";
		header("Location: cadastro-palestras.php");
	}else{
		$_SESSION ['msg'] = "<p style='color:red;'>Mensagem nao enviada</p>";
	header("Location: cadastro-palestras.php");
	}

}else{
	$_SESSION ['msg'] = "<p style='color:red;'>Mensagem nao enviada</p>";
	header("Location: cadastro-palestras.php");
}
