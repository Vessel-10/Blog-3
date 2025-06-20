<?php
    $page = $_GET['page'] ?? 'dashboard';

    $pageNames = [
        'home' => 'Home',
        'post' => 'Posts',
        'category' => 'Category',
        'comment' => 'Comment',
        'profile' => 'Profile'
    ];

    $currentPageName = $pageNames[$page] ?? 'Page';
?>