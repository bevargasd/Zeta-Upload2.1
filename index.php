<?php include('includes/header.php'); ?>
	<body>
		<video playsinline autoplay muted loop id="bgvid">
 			 <source src="images/background.mp4" type="video/webm">
		</video>
		<?php include('includes/announcements.php'); ?>
		<div id="wrap">
			<div class="header">
				<div class="title">
					<img src="<?php echo $config['theme']['logo'] ?>"></img>
				</div>
			</div>
			<div class="info">
				<div>
					<h2><i class="fas fa-users"></i>
					<span><?php
                            	echo $ping['players']['online'];
                            ?>
					</span>Jugadores conectados</h2>
					<p>Te esperamos adentro!</p>
				</div>
				<div>
					<h2><i class="far fa-question-circle"></i> Informacion del servidor</h2>
					<p id="content-1">
						Estado: <span>
							<?php
								if ($ping) echo 'En linea';
                            	else echo 'Apagado';
							?>
						</span>
					</p>
					<p id="content-2">
						Version: <span>
							<?php
								echo '1.8.X - 1.17.X';
							?>		
						</span>
					</p>
				</div>
				<div>
					<button id="copy" data-hover="CLIC PARA COPIAR LA IP" data-active="active" data-clipboard-text="play.oryonmc.com" type="button">
					<span>PLAY.ORYONMC.COM</span></button>
				</div>			</div>
			<?php include'includes/menu.php'?>
			<?php include'includes/footer.php'?>
		</div>
		<script type="text/javascript" src="javascript/functions.js"></script>
	</body>
</html>