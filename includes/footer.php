<?php
		$footer = $config['footer'];
		if($footer['enabled']){
			echo '<div class="footer animate"> <nav>';
		}
		foreach($footer['items'] as $key => $item){
			echo'
				<a target="_blank" href="'.$item['url'].'">
				'.$item['icon'].'
				';
	   	}
		echo'</nav> </div>';
?>