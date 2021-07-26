<html>
    
    <head>
        
          <link rel="stylesheet" href="css/style.css">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
          
          <?php require "config.php";?>
          

        <title><?php echo $servername?> - Official Website</title>
        
        <meta name="deseription" content="<?php echo $serverdescription?>">
        
        <meta property="og:title" content="<?php echo $servername?> - Official Website Portal">
        
        <meta property="og:site_nane" content="<?php echo $servername?>">
        
        <meta property="og:description" content="<?php echo $serverdescription?>">
        
        <meta charset="utf-8">

        <link rel="icon" type="image/png" href="<?php echo $serverlogo?>">
        
    </head>
    
    
    

    <body>
	<header>
            <div id="particles-js"></div>
		<video playsinline autoplay muted loop id="bgvid">
 			 <source src="images/bg.mp4" type="video/webm">
		</video>
        </header>

    
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

			<a href="sexo.com" class="item store">
			<div>
				<img src="images/store.png" alt="Icono de tienda Minecraft" class="img">
				<p class="subtitle">Compra rango y beneficios en la</p>
				<p class="title">Tienda</p>
			</div>
			</a>

			<a href="youtube.com" class="item forums">
			<div>
				<img src="images/forums.png" alt="Minecraft store icon" class="img">
				<p class="subtitle">Averigua todas las</p>
				<p class="title">Sanciones</p>
			</div>
			</a>


			<a href="voto.com" class="item vote">
			<div>
				<img src="images/vote.png" alt="Minecraft voting icon" class="img">
				<p class="subtitle">Ayudanos yendo a</p>
				<p class="title">Votar</p>
			</div>
			</a>


		</div>
    
    
    <div class="playercount">
        
			<p>&nbsp;Tenemos <span class="sip" data-ip="<?php echo $serverip;?>" data-port="25565">
			</span> otros jugadores en <span class="ip"><?php echo $serverip?></span>&nbsp;
			<br>
		    </div>
	
        
        
        
        
    </body>
    
    <script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
    
    <style>
    

 	*{
	   margin: 0;
	   paddding: 0;
	   box-sizing: border-box;	
	}

	header{
	   width: 100%;
	   height: auto;

	
	}

        video {
  	position: absolute;

	 left: 0;
	 top: 0;
	 width: auto;
	 height: 150vh;
 	 z-index: -10;
	 visibility: visible;
	 opacity: 0.3;
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