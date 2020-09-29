<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays em PHP</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h1>Arrays em PHP</h1>
				<h2>Miscelânea de exemplos básicos de uso</h2>
			</div>
		</div>
		<br>
		<div class="row" id="fundo">
			
			<div class="col-md-12 text-center">
				<br>

				<?php
					
					$frutas = array(
						"banana", 
						"limão", 
						"uva", 
						"abacaxi", 
						"morango", 
						"bergamota",
						"pitanga",
						"caqui",
						"manga",
						"morango",
						"caju",
						"cereja"
					);
					
					//1a forma de add: posição
					$frutas[10] = "butiá";
					//2a forma de add: sem posição (cria no final do array)
					$frutas[] = "guabiroba";
					//3a forma de add: utilizando método push (cria no final do array)
					array_push($frutas, "ariticum");

					echo "<h3>Listando as frutas do Array (com FOR)</h3>";
					$tamanho = count($frutas);
					for($i=0; $i<$tamanho; $i++){
						echo "$frutas[$i]<br>";
					}

					echo "<br><h3>Listando as frutas do Array (com FOREACH)</h3>";
					foreach($frutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Listando as frutas do Array em ordem crescente</h3>";
					asort($frutas);
					foreach($frutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Listando as frutas do Array em ordem decrescente</h3>";
					arsort($frutas);
					foreach($frutas as $fruta){
						echo "$fruta<br>";
					}
					
					echo "<br><h3>Pesquisando uma fruta dentro do Array (butiá)</h3>";
					if(in_array("butiá", $frutas)){
						$posicao = array_search("butiá", $frutas);
						echo "<br>Existe butiá dentro da lista de frutas na posição $posicao";
					} else {
						echo "<br>Não existe butiá dentro da lista de frutas";
					}
					
					echo "<br><br><h3>Fundindo arrays</h3>";
					$frutas2 = array(
						"manga",
						"goiaba",
						"morango",
						"framboesa",
						"bergamota",
						"morango",
						"bergamota",
						"laranja",
						"maçã"
					);
					$todasfrutas = array_merge($frutas, $frutas2);
					foreach($todasfrutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo uma fruta da lista (somente primeira ocorrência)</h3>";
					$posicao = array_search("morango", $todasfrutas);
					if($posicao!=null){
						unset($todasfrutas[$posicao]);
					}
					foreach($todasfrutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo uma fruta da lista (TODAS as ocorrências)</h3>";
					while(in_array("morango", $todasfrutas)){
						$posicao = array_search("morango", $todasfrutas);
						unset($todasfrutas[$posicao]);
					}
					foreach($todasfrutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo as frutas duplicadas</h3>";
					$todasfrutassemduplicacao = array_unique($todasfrutas);
					foreach($todasfrutassemduplicacao as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo um array de dentro de outro array</h3>";
					$frutasexcluir = array("banana", "laranja", "maçã");
					$frutasfinal = array_diff($todasfrutassemduplicacao, $frutasexcluir);
					foreach($frutasfinal as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Inserindo uma fruta no início do Array</h3>";
					array_unshift($frutasfinal, "tamarindo");
					foreach($frutasfinal as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Escrevendo a lista toda em maiúsculas</h3>";
					//strtoupper --> todas maiúsculas
					//strtolower --> todas minúsculas
					//ucfirst --> somente a primeira maiúscula
					foreach($frutasfinal as $fruta){
						echo strtoupper($fruta) . "<br>";
					}

					echo "<br><h3>Inspecionando o interior do nosso Array</h3>";
					var_dump($frutasfinal);

				?>
			
			</div>
		</div>
	</div>
</body>

</html>