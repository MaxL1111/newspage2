<!DOCTYPE html>
<html>
<head>
    <META name="Content-Type" content="text/html; charset=utf-8">
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="App/templates/style.css">
    <title>Новости</title>
</head>
<body>

<div id="header">
    <h2 align="center">PAGEnews.by</h2>
</div>
<script type="text/javascript" src="views/xhr.js"></script>

<div id="content">
    <a href="index.php">НА ГЛАВНУЮ</a><br>
    <h2 align="center">Панель администратора</h2>
    <?php foreach ($news as $item): ?>
    <table class="comments">
        <tr>
            <th align="left" colspan="4"><?php echo $item->title; ?></th>
        </tr>

        <tr>
            <td width="90px"><p><?php echo $item->date; ?> </p></td>
            <td><?php echo $item->text; ?> </td>
            <td width="90px"><a href="index.php?ctrl=Admin&act=Delete&id=<?php echo $item->id; ?>">Удалить</a></td>
            <td width="90px"><a href="index.php?ctrl=Admin&act=Edit&id=<?php echo $item->id; ?>">Редак-ть</a></td>
        </tr>
        <?php endforeach; ?>
    </table>


    <?php

    if ($page - 4 > 0) $page4left = ' <a href=admin.php?ctrl=Admin&act=Index&page=' . ($page - 4) . '>' . ($page - 4) . '</a>  ';
    if ($page - 3 > 0) $page3left = ' <a href=admin.php?ctrl=Admin&act=Index&page=' . ($page - 3) . '>' . ($page - 3) . '</a>  ';
    if ($page - 2 > 0) $page2left = ' <a href=admin.php?ctrl=Admin&act=Index&page=' . ($page - 2) . '>' . ($page - 2) . '</a>  ';
    if ($page - 1 > 0) $page1left = '<a href=admin.php?ctrl=Admin&act=Index&page=' . ($page - 1) . '>' . ($page - 1) . '</a>  ';
    if ($page + 4 <= $count_post) $page4right = '  <a href=admin.php?ctrl=Admin&act=Index&page=' . ($page + 4) . '>' . ($page + 4) . '</a>';
    if ($page + 3 <= $count_post) $page3right = '  <a href=admin.php?ctrl=Admin&act=Index&page=' . ($page + 3) . '>' . ($page + 3) . '</a>';
    if ($page + 2 <= $count_post) $page2right = '  <a href=admin.php?ctrl=Admin&act=Index&page=' . ($page + 2) . '>' . ($page + 2) . '</a>';
    if ($page + 1 <= $count_post) $page1right = '  <a href=admin.php?ctrl=Admin&act=Index&page=' . ($page + 1) . '>' . ($page + 1) . '</a>';

    echo $page4left . $page3left . $page2left . $page1left . '<b>[ ' . $page . ' ]</b>' . $page1right . $page2right . $page3right . $page4right;

    ?>

    <hr>
    <a href="index.php?ctrl=Admin&act=Insert">Добавить новость</a>
    <hr>
</div>


</body>
</html>