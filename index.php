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
					</span>Players Online</h2>
					<p>what are you waiting for?</p>
				</div>
				<div>
					<h2><i class="far fa-question-circle"></i> Server Information</h2>
					<p id="content-1">
						Status: <span>
							<?php
								if ($ping) echo 'Online';
                            	else echo 'Offline';
							?>
						</span>
					</p>
					<p id="content-2">
						Version: <span>
							<?php
								echo $ping['version']['name'];
							?>		
						</span>
					</p>
				</div>
				<div>
					<button id="copy" data-hover="Click to Copy IP" data-active="active" data-clipboard-text="<?php echo $config['server']['ip']?>" type="button">
					<span><?php echo $config['server']['ip']?></span></button>
				</div>
			</div>
			<?php include'includes/menu.php'?>
			<?php include'includes/footer.php'?>
		</div>
		<script type="text/javascript" src="javascript/functions.js"></script>
	</body>
</html>