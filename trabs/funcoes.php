<?php

function excluir_usuario($id){
	include("conexao_banco.php");

	$sql = "DELETE FROM cadastro_usuario WHERE id_usuario ='$id'";
	$query = mysqli_query($conexao, $sql);

	if (!$query) {
  		echo "<script> alert('Falha ao deletar usuário!'); window.location='painel_admin.php';</script>";
	}else {
 		echo "<script> alert('Deletado com sucesso!'); window.location='painel_admin.php';</script>";
	}

}

if(isset($_GET['id'])){
	$id = (int)$_GET['id'];
 	excluir_usuario($id);
}
// window.location='painel_admin.php';
?>
