<html>
    
    <head>
        
          <link rel="stylesheet" href="css/style.css">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
          
          <?php require "config.php";?>
          

        <title><?php echo $servername?> - Minecraft server</title>
        
        <meta name="deseription" content="<?php echo $serverdescription?>">
        
        <meta property="og:title" content="<?php echo $servername?> - Minecraft server">
        
        <meta property="og:site_nane" content="<?php echo $servername?>">
        
        <meta property="og:description" content="<?php echo $serverdescription?>">
        
        <meta charset="utf-8">

        <link rel="icon" type="image/png" href="<?php echo $serverlogo?>">
        
    </head>
    
    
    

    <body>
            <div id="particles-js"></div>

        

    
        <?php 
        
        if ($serverlogo != null) {
        
            ?>
        <img src="<?php echo $serverlogo?>" class="centered logo"><br><br>
        
        <?php 
    } else {
    ?>
    
        <h1 class="font" id="title"><?php echo $servernamedisplay?></h1>
        <h1 class="font subtext" id="title"><?php echo $servernamesubtext?></h1>
    
    <?php } ?>
    
    	<div class="items">

			<a href="<?php echo $forumurl?>" class="item store">
			<div>
				<img src="<?php echo $storeimageurl?>" alt="Minecraft forums icon" class="img">
				<p class="subtitle">Compra rango y beneficios en la</p>
				<p class="title">Tienda</p>
			</div>
			</a>

			<!-- Replace # with your store URL -->
			<a href="<?php echo $storeurl?>" class="item store">
			<div>
				<img src="<?php echo $forumimageurl?>" alt="Minecraft store icon" class="img">
				<p class="subtitle">Averigua todas las</p>
				<p class="title">Sanciones</p>
			</div>
			</a>

			<!-- Replace # with your vote URL -->
			<a href="<?php echo $voteurl?>" class="item vote">
			<div>
				<img src="<?php echo $voteimageurl?>" alt="Minecraft voting icon" class="img">
				<p class="subtitle">Ayudanos yendo a</p>
				<p class="title">Votar</p>
			</div>
			</a>


		</div>
    
    
    <div class="playercount">
        
			<p>&nbsp;Tenemos <span class="sip" data-ip="<?php echo $serverip;?>" data-port="25565">
			</span> jugadores jugando en <span class="ip"><?php echo $serverip?>
			</span>&nbsp;
			<br><brk></brk>
			
			<?php
			
			if ($show_play_button == true) {
			
			?>
			</p>        
        <?php } ?>
    </div>
        
        
        
        
    </body>
    
    <script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
    
    <style>
    body{
        background-image:url(<?php echo $bg?>);
    }
    
    @font-face {
        font-family: title;
        src: url(<?php echo $font?>);
    }
    .btn:hover {
        cursor:pointer;
    }
    </style>
    
    
    
</html>