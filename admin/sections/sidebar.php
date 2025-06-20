<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<div class="side-bar">
    <ul class="nav-list">
    <li class="link-item">
        <a href="dashboard.php" class="<?= $currentPage == 'dashboard.php' ? 'active' : '' ?>">dashboard</a>
    </li>
    <li class="link-item">
        <a href="post/post.php" class="<?= $currentPage == 'post/post.php' ? 'active' : '' ?>">posts</a>
    </li>
    <li class="link-item">
        <a href="category/category.php" class="<?= $currentPage == 'category/category.php' ? 'active' : '' ?>">category</a>
    </li>
    <li class="link-item">
        <a href="comment.php" class="<?= $currentPage == 'comment.php' ? 'active' : '' ?>">comments</a>
    </li>
    <li class="link-item">
        <a href="account/profile.php" class="<?= $currentPage == 'account/profile.php' ? 'active' : '' ?>">profile</a>
    </li>
</ul>
</div>

