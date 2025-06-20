<?php include '../logic/breadcrumb.php' ?>

<div class="content">
    <div class="top-menu">
        <nav class="breadcrumb">
            <a href="dashboard.php">Dashboard</a>
            <?php if ($page != 'dashboard'): ?>
                <span> / </span>
                <span><?= $currentPageName ?></span>
            <?php endif; ?>
        </nav>
    </div>
    <div class="context">
        <?php  include '../logic/page-switch.php' ?>
    </div>
</div>