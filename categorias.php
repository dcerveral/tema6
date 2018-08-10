<div id="heading" >
				<h1><? echo $campo['titulo']; ?></h1>
			</div> 	
<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><? echo $campo['subtitulo']; ?></h2>
						<p><? echo $campo['descripcion']; ?></p>
					</header>
         <div class="testimonials">
       
 
				<? 
$p=$_GET['p'];
if (!$p){$p=1;}
$items=20;
$limit=($p * $items) - $items;

if ($campo['id']){$SQLID="and superior='".$campo['id']."'";}
$SQLTIPO="(tipo='categoria' OR tipo='pagina' OR tipo='entrada' OR tipo='producto' ) ";				
if ($_GET['TIPO']){$SQLTIPO=" tipo='".$_GET['TIPO']."' ";}
				
$consultas="SELECT * FROM contenido WHERE $SQLTIPO AND activo='1' $SQLID  ORDER BY tipo, orden LIMIT $limit,$items; ";
				
	 
				
$sql=mysqli_query($conex,$consultas);
	$a=0;
	while ($contenido=mysqli_fetch_array($sql)){
		$a++;
		$b++;
 ?>
					<section>
							<div class="content">
                <a href="/<? echo $contenido['slug']; ?>" style="text-decoration: none;">
                <h4>
                  <? echo $contenido['titulo']; ?>
                </h4>
                <? if ($contenido['video']){ ?> 
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="https://img.youtube.com/vi/<? echo $contenido['video']; ?>/hqdefault.jpg" onerror="this.style.display='none'">
												
												<? }else{ ?>
												<img style="max-width:100%;text-align: center;" alt="<? echo $contenido['titulo']; ?>" src="/img/600_<? echo $contenido['foto']; ?>" onerror="this.style.display='none'">
											
											<? } ?>
								<div>
									<p><? echo truncate($contenido['descripcion'],50); ?></p>
								</div>
                </a>
												
								 
	 
              </div>
      </section>
																
					<?  
	}
				
				//if ($a==0){include ('buscar.php'); }
				
				?>				   </div>							
								
				
										 
	<div class="col-xs-6">
		<? if ($p>1) { $menos=$p-1; ?>
			<a href="/<? echo $campo['tipo']; ?><? if (!$campo['tipo']) { echo $_GET['TIPO'].'s';} ?>/<? echo $menos; ?>" class=" pull-left enigma_blog_read_btn animated bounceInUp" ><i class="fa fa-arrow-left"></i></i></a>
		<? } ?>
	</div>
	<div class="col-xs-6">
			<? if ($a==$items) {  $mas=$p+1; ?>
			<a href="/<? echo $campo['tipo']; ?><? if (!$campo['tipo']) { echo $_GET['TIPO'].'s';} ?>/<? echo $mas; ?>" class=" pull-right enigma_blog_read_btn animated bounceInUp" ><i class="fa fa-arrow-right"></i></a>
		<? } ?>
	</div>
	 
  
  	</div>
</section>

