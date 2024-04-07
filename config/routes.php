<?php

return [
    '' => [
        'controller' => 'post',
        'method' => 'index',
    ],
    'posts' => [
        'controller' => 'post',
        'method' => 'allPosts',
    ],
    'add-post' => [
        'controller' => 'post',
        'method' => 'addPost',
    ],
    'login' => [
        'controller' => 'auth',
        'method' => 'login',
    ],
    'logout' => [
        'controller' => 'auth',
        'method' => 'logout',
    ]
];
