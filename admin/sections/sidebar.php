<?php $active = $_GET['page'] ?? 'dashboard'; ?>
<div class="side-bar">
    <ul class="nav-list">
        <li class="link-item">
            <a href="dashboard.php?page=home" class="<?= $active == 'home' ? 'active' : '' ?>">Dashboard</a>
        </li>
        <li class="link-item">
            <a href="dashboard.php?page=post" class="<?= $active == 'post' ? 'active' : '' ?>">Posts</a>
        </li>
        <li class="link-item">
            <a href="dashboard.php?page=category" class="<?= $active == 'category' ? 'active' : '' ?>">Category</a>
        </li>
        <li class="link-item">
            <a href="dashboard.php?page=comment" class="<?= $active == 'comment' ? 'active' : '' ?>">Comments</a>
        </li>
        <li class="link-item">
            <a href="dashboard.php?page=profile" class="<?= $active == 'profile' ? 'active' : '' ?>">Profile</a>
        </li>
    </ul>
</div>
