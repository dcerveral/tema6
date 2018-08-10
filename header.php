<!DOCTYPE HTML>
 
<html  lang="es-ES">
	<head>
		<title><? echo $campo['title']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<? echo $campo['description']; ?>" />
		 
    <meta name="robots" content="<? echo $conf['robots']; ?>" />
 
		<link rel="stylesheet" href="/cms/<? echo $conf['tema']; ?>/css/main.css" />
    <link rel="canonical" href="<? echo $conf['url']; ?>/<? echo $campo['slug']; ?>" />
    	<link rel="icon" href="/img/32_<? echo $conf['fabicon']; ?>" sizes="32x32" />
	<link rel="icon" href="/img/192_<? echo $conf['fabicon']; ?>" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="/img/32_<? echo $conf['fabicon']; ?>" sizes="32x32" />
	<meta name="msapplication-TileImage" content="/img/64_<? echo $conf['fabicon']; ?>"  />
	 <?  echo $conf['header']; ?>
	<style>
	<? include('css.php'); ?>
	
	</style>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="/"><? echo $conf['nombre_pagina']; ?></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<? $sql = "SELECT id, titulo, foto, superior, activo, url,array2,  array AS ARR, (SELECT slug FROM contenido WHERE id=ARR) AS slug FROM contenido WHERE activo='1' AND tipo='menu-principal'   ORDER BY superior, orden, titulo";
 			$result = mysqli_query($conex, $sql) or die("database error:". mysqli_error($conex));		
			while ($item = mysqli_fetch_assoc($result)) {
        
        if ($item['array2']>99)
				{$icono=dechex ($item['array2']);}
				else
				{$icono="0".$item['array2'];}
					echo "<li><a href='/".$item['slug']."'><i class='fa'>&#xf". $icono ."</i> ".$item['titulo']. " </a></li>";
				
			}
			?>
				</ul>
			</nav>


		
								
								
           
	 
	