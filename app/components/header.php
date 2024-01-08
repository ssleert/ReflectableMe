<?php
    require_once __DIR__ . '/../lib/lib.php';

    $currentPage = substr($_SERVER['REQUEST_URI'], 7, -4);
?>

<header>
    <div align="center">
        <nav>
            <?php foreach (Lib::ListDir(__DIR__ . '/../pages') as $file): ?>
                <a href="<?= '/../pages/' . $file ?>">
                    <?php if ($currentPage == substr($file, 0, -4)): ?>
                        <b>
                            <?= ucfirst(substr($file, 0, -4)) ?>
                        </b>
                    <?php else: ?>
                        <?= ucfirst(substr($file, 0, -4)) ?>
                    <?php endif; ?>
                </a>
                &nbsp;&nbsp;
            <?php endforeach; ?>
            <hr>
        </nav>
    </div>
</header>