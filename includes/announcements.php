<?php
    $announce = $config['announcements'];
    if($announce['enabled']){
        echo '<div id="announcements"><div id="rotate">';
            foreach($announce['messages'] as $key => $item){
                 echo '<p>'.$announce['icon'].' '.$item.'</p>';
            }
        echo '</div> </div>';
    };
?>