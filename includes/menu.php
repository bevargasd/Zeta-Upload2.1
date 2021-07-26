<div class="menu animate">
	<?php
		$menu = $config['menu'];
		if($menu['enabled']){
			foreach($menu['items'] as $key => $item){
				echo '
					<a href="'.$item['url'].'">
						<i class="'.$item['icon'].'"></i>
						<p>'.$key.'</p>
					</a>
				';
			}
		}
	?>
</div>