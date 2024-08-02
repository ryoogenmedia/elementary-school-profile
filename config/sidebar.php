<?php

return [
    [
        'title' => 'Beranda',
        'icon' => 'grid',
        'route-name' => 'home.backend',
        'is-active' => 'home.backend',
    ],

    [
        'title' => 'Berita',
        'icon' => 'grid',
        'route-name' => 'news.index',
        'is-active' => 'news*',
    ],

    [
        'title' => 'Slider',
        'icon' => 'grid',
        'route-name' => 'carousel.index',
        'is-active' => 'carousel*',
    ],

    [
        'title' => 'Extrakulikuler',
        'icon' => 'grid',
        'route-name' => 'extrakulikuler.index',
        'is-active' => 'extrakulikuler*',
    ],
];
