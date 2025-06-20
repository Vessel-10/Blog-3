<?php
    $page = $_GET['page'] ?? 'home';
    $allowedPages = ['home', 'post', 'category', 'comment', 'profile'];
    if (in_array($page, $allowedPages)) {
        include "../pages/$page.php"; 
    } else {
        echo "<p>Page not found.</p>";
    }
?>