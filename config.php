<?php
/*
   ____             __ _         _____ _ _      
  / ___|___  _ __  / _(_) __ _  |  ___(_) | ___ 
 | |   / _ \| '_ \| |_| |/ _` | | |_  | | |/ _ \
 | |__| (_) | | | |  _| | (_| | |  _| | | |  __/
  \____\___/|_| |_|_| |_|\__, | |_|   |_|_|\___|
                         |___/                  
*/
return [
    'theme' => [
        'title' => 'Website - Portal', # Website title.
        'logo' => 'images/logo.png', # Path to your servers logo.
    ],
    'server' => [
        'ip' => 'play.lushsurvival.net', # Your Minecraft server ip. (Make sure your query port is open in server.properties)
        'port' => '25565', # Your Minecraft server port.
    ],
    'announcements' => [
        'enabled' => true, # Enable/disable announcements.
        'icon' => '<i class="fas fa-scroll"></i>', # Use (https://fontawesome.com/) to get icons.
            'messages' => [
                'message' => 'This is a test announcement', # create as many announcements as you'd like just give them a unique name.
                'message2' => 'change me or add more in ./config.php'
            ],
    ],
    'menu' => [
        'enabled' => true,
            'items' => [
                'forums' => [ # Create as many items as you'd like just give them a unique name.
                    'url' => '/forums.php',
                    'icon' => 'fas fa-book-open', # Use (https://fontawesome.com/) to get icons
                ],
                'store' => [
                    'url' => '/store.php',
                    'icon' => 'fas fa-shopping-cart',
                ],
                'vote' => [
                    'url' => '/vote.php',
                    'icon' => 'fas fa-poll',
                ],
                'vote' => [
                    'url' => '/vote.php',
                    'icon' => 'fas fa-poll',
                ],
                'bans' => [
                    'url' => '/bans.php',
                    'icon' => 'fas fa-gavel',
                ],
                'staff' => [
                    'url' => '/staff.php',
                    'icon' => 'fas fa-users-cog',
                ],
            ], // end of menu items.
    ],
    'footer' => [
        'enabled' => true, # Enable/disable footer.
            'items' => [
                'youtube' => [ # Create as many items as you'd like just give them a unique name.
                    'url' => 'https://youtube.com',
                    'icon' => '<i class="fab fa-youtube"></i>', # Use (https://fontawesome.com/) to get icons.
                ],
                'twitter' => [
                    'url' => 'https://twitter.com',
                    'icon' => '<i class="fab fa-twitter"></i>',
                ],
                'discord' => [
                    'url' => 'https://discord.gg',
                    'icon' => '<i class="fab fa-discord"></i>',
                ],
            ], // end of footer items.
    ]
];

?>