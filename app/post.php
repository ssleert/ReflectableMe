<?php
    require_once __DIR__ . '/lib/lib.php'
?>

<!DOCTYPE html>
<html lang="en">
    <?php require __DIR__ . '/components/head.php' ?>
<body>
    <?php require __DIR__ . '/components/header.php' ?>
    <main>
        <?php 
            if (isset($_GET['post'])) {
                $postFileName = $_GET['post'];

                $post = file_get_contents(__DIR__ . '/posts/' . $postFileName . '.md');
                if ($post === false) {
                    echo 'Post is not here. Sorry but maybe u are an idiot :)';
                    exit;
                }

                echo Lib::MarkdownToHtml($post);
            } else {
                echo 'Define fuckng ?post=first url query. Sorry but maybe u are an idiot :)';
            }
        ?>
    </main>
    <?php require __DIR__ . '/components/footer.php' ?>
</body>
</html>