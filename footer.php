<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						 
						<section class="">
              
              <?	//Buscamos los widget de la pie tres
					$consulta_left="Select * FROM contenido WHERE tipo='footer-uno' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 <? if ($widget ['titulo']){ ?>
					  <h4><? echo $widget ['titulo']; ?></h4>
			 
						<?  
					} ?>
				
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
 
						<? } ?>
							 
						</section>
            <section class="col-lg-4">
              
              <?	//Buscamos los widget de la pie dos
					$consulta_left="Select * FROM contenido WHERE tipo='footer-dos' AND activo='1'  ORDER BY orden ASC";
					$sql_left=mysqli_query($conex,$consulta_left);
					while ($widget=mysqli_fetch_array($sql_left)){
						?>
			 <? if ($widget ['titulo']){ ?>
					  <h4><? echo $widget ['titulo']; ?></h4>
				<br>
						<? echo $widget ['subtitulo'];
					} ?>
				
						<? include ('widgets/'.$widget ['subtipo'].'.php'); ?>
 
						<? } ?>
							 
						</section>
						<section>
							<h4>Contacto</h4>
							<ul class="plain">
                <? if ($conf['phone']) { ?>
								<li><a href="tel:<? echo $conf['phone']; ?>"><i class="icon fa-phone">&nbsp;</i><? echo $conf['phone']; ?></a></li>
                <? } ?>
                <? if ($conf['mobile']) { ?>
								<li><a href="<? echo $conf['mobile']; ?>"><i class="icon fa-mobile">&nbsp;</i><? echo $conf['mobile']; ?></a></li>
                <? } ?>
                
                <? if ($conf['twitter']) { ?>
								<li><a href="<? echo $conf['twitter']; ?>"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                <? } ?>
								<? if ($conf['facebook']) { ?>
								<li><a href="<? echo $conf['facebook']; ?>"><i class="icon fa-twitter">&nbsp;</i>Facebook</a></li>
                <? } ?>
                <? if ($conf['instagram']) { ?>
								<li><a href="<? echo $conf['instagram']; ?>"><i class="icon fa-twitter">&nbsp;</i>Instagram</a></li>
                <? } ?>
                
               
								
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy;  <a href="https://esepress.com"><? echo date('Y'); ?> esepress.com</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="/cms/<? echo $conf['tema']; ?>/js/jquery.min.js"></script>
			<script src="/cms/<? echo $conf['tema']; ?>/js/browser.min.js"></script>
			<script src="/cms/<? echo $conf['tema']; ?>/js/breakpoints.min.js"></script>
			<script src="/cms/<? echo $conf['tema']; ?>/js/util.js"></script>
			<script src="/cms/<? echo $conf['tema']; ?>/js/main.js"></script>

	</body>
</html>


