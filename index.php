<?php
	$paginas = ['home'=>'Minha página home aqui!', 'sobre'=>'Estou no sobre', 'contato'=>'<form><input type="text" placeholder="Rayane" /></form>'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site Dinamico PHP</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: boder-box;
		}
		header{
			background-color: #069;
			padding:8px 10px;
			text-align: center;
		}
		a{
			display: inline-block;
			margin:0 10px;
			color: white;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<header>
		<?php
			foreach ($paginas as $key => $value) { 
				echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
			}
		?>
	</header>
	<section>
		<h2>
			<?php
				$pagina = (isset($_GET['page'])? $_GET['page'] : 'home');
				if(!array_key_exists($pagina, $paginas)){
					pagina = 'home';

				}

				echo ucfirst($pagina);
			?>
		</h2>
		<p><?php echo $paginas[$pagina]; ?></p>
	</section> 
</body>
</html>