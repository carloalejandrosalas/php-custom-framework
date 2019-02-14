<?php


return [
    'database' => [
        'name' => 'mytodo',
        
        'username' => 'root',
        
        'password' => 'root',

        'connection' => 'mysql:host=db',
        
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];