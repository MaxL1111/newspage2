<!DOCTYPE html>
<html>
<head>
    <META name="Content-Type" content="text/html; charset=utf-8">
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="App/templates/style.css">
    <title>Добавление статьи</title>
</head>
<body>

<div id="header">
    <h2 align="center">PAGEnews.by</h2>
</div>

<script type="text/javascript" src="App/templates/xhr.js"></script>

<div id="content">
    <a href="index.php">НА ГЛАВНУЮ</a><br>
    <p>Здесь Вы можете добавить свою новость!</p>

    <a name="use"></a>

    <table class="tab2">
        <tr>
            <td>Заголовок новости</td>
            <td><input id="title" type="text" name="title" maxlength="255" value="Заголовок статьи"></td>
        </tr>
        <tr>
            <td>Дата публикации (дд.мм.гггг)</td>
            <td><input id="date" type="date" name="date"></td>
        </tr>
        <tr>
            <td>Текст новости</td>
            <td><textarea id="text" name="text" cols="30" rows="4">Типовой договор.Отдаю свою душу, а взамен получаю здоровье и бессмертие.</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Опубликовать" onclick="exampleInsert()"></td>
        </tr>
    </table>

</div>
</body>
</html>