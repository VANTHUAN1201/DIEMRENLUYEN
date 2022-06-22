<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chấm điểm rèn luyện</title>
    <link rel="stylesheet" href="Public/css/main.css">
    <link rel="stylesheet" href="Public/css/cover.css">
    <link rel="stylesheet" href="Public/css/menu.css">
    <link rel="stylesheet" href="Public/css/cover.css">
    <link rel="stylesheet" href="Public/css/cover.css">
    <link rel="stylesheet" href="Public/css/cover.css">
    <link rel="stylesheet" href="Public/css/cover.css">
    <link rel="stylesheet" href="Public/css/cover.css">
</head>

<body>
    <header>
        <?php 
            if(isset($_REQUEST['option']))
                loadModule('header');
        ?>
    </header>

    <main>
        <?php
        if (isset($_REQUEST['find']))
            loadModule('result_find');
        else
            loadComponent(); ?>
    </main>

    <footer>
        <?php 
        if(isset($_REQUEST['option']))
            loadModule('footer'); ?>
    </footer>
    
</body>

</html>