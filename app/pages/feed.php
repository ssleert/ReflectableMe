<?php 
    require_once __DIR__ . '/../lib/lib.php'
?>

<!DOCTYPE html>
<html lang="en">
    <?php require __DIR__ . '/../components/head.php' ?>
<body>
    <?php require __DIR__ . '/../components/header.php' ?>
    <main>
        <ul>
            <?php foreach (Lib::ListDir(__DIR__ . '/../posts') as $file): ?>
                <?php $metaInfo = Lib::GetMetaInfoFromPostFile(__DIR__ . '/../posts/' . $file) ?>
                <li>
                    <time datetime="<?= $metaInfo['date'] ?>" pubtime>
                        <?= $metaInfo['date'] ?>
                    </time>
                    - 
                    <i>
                        <b>
                            <a href="<?= '/post.php?post=' . substr($file, 0, -3) ?>">
                                <?= $metaInfo['title'] ?>
                            </a>
                        </b>
                    </i>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <?php require __DIR__ . '/../components/footer.php' ?>
</body>
</html>