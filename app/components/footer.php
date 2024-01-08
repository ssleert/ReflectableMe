<?php
    require_once __DIR__ . '/../lib/lib.php';
?>

<footer>
    <div align="center">
        <hr>

        <p>Written in <a href="https://www.php.net/">php</a> with love :heart:</p>
        <p>you can ping me at the sources below if youd like. >_<</p>

        <?php foreach (Lib::$MySocialNetWorks as $key => $value): ?>
            <?php if (Lib::IsUrl($value)): ?>
                <a href="<?= $value ?>">
                    <?= $key ?>
                </a>
            <?php else: ?>
                <?= $key ?><br>
            <?php endif; ?>

        &nbsp;
        <?php endforeach; ?>
    </div>
</footer>