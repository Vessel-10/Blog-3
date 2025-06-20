
    <div class="content">
        <?php
            // Default page
            $page = $_GET['page'] ?? 'home';

            // Security: allow only safe pages
            $allowedPages = ['home', 'post', 'category', 'comment', 'profile'];

            if (in_array($page, $allowedPages)) {
                include "../pages/$page.php";  // Example: sections/pages/posts.php
            } else {
                echo "<p>Page not found.</p>";
            }
        ?>
    </div>