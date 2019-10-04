<?php include_once("includes/conexao.php");

	$cod_cidades = $_REQUEST['cod_cidades'];
	
	$result_sub_cat = "SELECT cod_cidades, nome
	FROM cidades
	WHERE estados_cod_estados=$cod_estados
	ORDER BY nome";
	$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'cod_cidades'	=> $row['cod_cidades'],
			'nome'			=> $row['nome'],
		);
	}
	
	echo(json_encode($sub_categorias_post));