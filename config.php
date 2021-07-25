<?php
return [
    'theme' => [
        'title' => 'OryonMC - Minecraft server', 
        'logo' => 'images/logo.png', 
    ],
    'server' => [
        'ip' => 'play.oryonmc.com',
        'port' => '25565',
    ],
    'announcements' => [
        'enabled' => true,
        'icon' => '<i class="fas fa-scroll"></i>',
            'messages' => [
                'message' => 'El servidor se encuentra en mantenimiento',
                'message2' => 'Nuestro servidor sera grandioso',
		'message3' => 'El servidor se abrira pronto' 
            ],
    ],
    'menu' => [
        'enabled' => true,
            'items' => [
                'tienda' => [
                    'url' => 'https://youtube.com',
                    'icon' => 'fas fa-shopping-cart',
                ],
                'vota' => [
                    'url' => '/2',
                    'icon' => 'fas fa-poll',
                ],
                'bans' => [
                    'url' => '/2',
                    'icon' => 'fas fa-gavel',
                ],
            ], // end of menu items.
    ],
    'footer' => [
        'enabled' => true,
            'items' => [
                'youtube' => [
                    'url' => 'https://youtube.com',
                    'icon' => '<i class="fab fa-youtube"></i>',
                ],
                'instagram' => [
                    'url' => 'https://twitter.com',
                    'icon' => '<i class="fab fa-instagram"></i>',
                ],
                'discord' => [
                    'url' => 'https://discord.gg',
                    'icon' => '<i class="fab fa-discord"></i>',
                ],
            ],
    ]
];

?>