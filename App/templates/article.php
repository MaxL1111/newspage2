<!DOCTYPE html>
<html>
<head>
    <META name="Content-Type" content="text/html; charset=utf-8">
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="App/templates/style.css">
    <title>Одна новость</title>
</head>
<body>

<div id="header">
    <h2 align="center">PAGEnews.by</h2>
</div>
<script type="text/javascript" src="App/templates/xhr.js"></script>

<div id="content">
    <a href="index.php">НА ГЛАВНУЮ</a><br>

    <table class="tab">
        <tr>
            <th><h3>{{ news.title }}</h3></th>
        </tr>
        <tr>
            <td><p>{{ news.text }}</p></td>
        </tr>
    </table>

    <hr>
    <h3 align="center">комментарии</h3>


    <div id="info"></div>

    {% for item in news.autorcom %}

    <table class="comments">
        <tr>
            <td width="90px"><p>{{ item.autor_com }}</p></td>
        </tr>
        <tr>
            <td>{{ item.text_com }}</td>
        </tr>
        {% endfor %}
    </table>

    <hr>

    <table class="tab3">
        <input type="hidden" id="page_id" name="page_id" value=" {{ news.id }}">
        <tr>
            <td>Мое имя (не менее двух символов)</td>
            <td><input id="autor_com" type="text" name="autor_com" maxlength="255"></td>
        </tr>
        <tr>
            <td>Текст комментария (не менее трех символов)</td>
            <td><textarea id="text_com" name="text_com" cols="30" rows="4"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Добавить комментарий" onclick="exampleInsertCom()"></td>
        </tr>
    </table>


</div>

</body>
</html>