<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Markdown Demo Page</title>

    </head>
    <body>
        
        <?php
            require_once 'Parsedown.php';
            echo (new Parsedown())->text(file_get_contents('markdown.md'));
        ?>
        
    </body>
</html>
