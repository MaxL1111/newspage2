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
<script type="text/javascript" src="App/templates/xhr.js"></script>
<div id="content">
    <a href="index.php?ctrl=Admin&act=Index">ВЕРНУТЬСЯ</a><br>
    <p>Здесь вы можете внести изменения в новость!</p>

    <a name="use"></a>

    <table class="tab2">
        <input type="hidden" id="id" name="id" value="<?php echo $news->id ?>">
        <tr>
            <td>Заголовок новости</td>
            <td><input id="title" type="text" name="title" maxlength="255" value="<?php echo $news->title; ?>"></td>
        </tr>
        <tr>
            <td>Дата публикации (дд.мм.гггг)</td>
            <td><input id="date" type="date" name="date" value="<?php echo $news->date; ?>"></td>
        </tr>
        <tr>
            <td>Текст новости</td>
            <td><textarea id="text" name="text" cols="30" rows="4"><?php echo $news->text; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Внести изменения" onclick="exampleUpdate()"></td>
        </tr>
    </table>


</div>
</body>
</html>