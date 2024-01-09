<?php 
    require_once __DIR__ . '/../lib/lib.php'
?>

<!DOCTYPE html>
<html lang="en">
    <?php require __DIR__ . '/../components/head.php' ?>
<body>
    <?php require __DIR__ . '/../components/header.php' ?>
    <main>
        <?= Lib::MarkdownToHtml(file_get_contents(__DIR__ . '/../mds/uses.md')) ?>
    </main>
    <?php require __DIR__ . '/../components/footer.php' ?>
</body>
</html>