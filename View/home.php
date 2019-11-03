<<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog Moha</title>
    </head>
    <body>
        <?php include("Layout/header.php"); ?>
        <div id="content" class="container">
            <div class="row">
                <?= $content ?>
            </div>
        </div>
        <?php include("Layout/footer.php"); ?>
    </body>
</html>