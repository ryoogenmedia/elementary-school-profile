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
        'icon' => 'newspaper',
        'route-name' => 'news.index',
        'is-active' => 'news*',
    ],

    [
        'title' => 'Slider',
        'icon' => 'card-image',
        'route-name' => 'carousel.index',
        'is-active' => 'carousel*',
    ],

    [
        'title' => 'Extrakulikuler',
        'icon' => 'card-checklist',
        'route-name' => 'extrakulikuler.index',
        'is-active' => 'extrakulikuler*',
    ],

    [
        'title' => 'Kontak',
        'icon' => 'chat-right-text',
        'route-name' => 'contact.index',
        'is-active' => 'contact*',
    ],
];
