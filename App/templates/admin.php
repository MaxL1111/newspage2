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

    {% for item in news %}
    <table class="comments">
        <tr>
            <th align="left" colspan="4">{{ item.title }}</th>
        </tr>

        <tr>
            <td width="90px"><p>{{ item.date }} </p></td>
            <td>{{ item.text }}</td>
            <td width="90px"><a href="index.php?ctrl=Admin&act=Delete&id={{ item.id }}">Удалить</a></td>
            <td width="90px"><a href="index.php?ctrl=Admin&act=Edit&id={{ item.id }}">Редак-ть</a></td>
        </tr>
        {% endfor %}
    </table>

    {% if page - 4 <= count_post %} {% set page4left = page - 4 %} {% endif %}
    {% if page - 3 <= count_post %} {% set page3left = page - 3 %} {% endif %}
    {% if page - 2 <= count_post %} {% set page2left = page - 2 %} {% endif %}
    {% if page - 1 <= count_post %} {% set page1left = page - 1 %} {% endif %}

    {% if page + 4 <= count_post %} {% set page4right = page + 4 %} {% endif %}
    {% if page + 3 <= count_post %} {% set page3right = page + 3 %} {% endif %}
    {% if page + 2 <= count_post %} {% set page2right = page + 2 %} {% endif %}
    {% if page + 1 <= count_post %} {% set page1right = page + 1 %} {% endif %}

    {% if page4left > 0 %}<a href="admin.php?ctrl=Admin&act=Index&page= {{ page4left }} "> {{ page4left }} </a>{% endif %}
    {% if page3left > 0 %}<a href="admin.php?ctrl=Admin&act=Index&page= {{ page3left }} "> {{ page3left }} </a>{% endif %}
    {% if page2left > 0 %}<a href="admin.php?ctrl=Admin&act=Index&page= {{ page2left }} "> {{ page2left }} </a>{% endif %}
    {% if page1left > 0 %}<a href="admin.php?ctrl=Admin&act=Index&page= {{ page1left }} "> {{ page1left }} </a>{% endif %}
    <b>[ {{ page }} ]</b>
    <a href="admin.php?ctrl=Admin&act=Index&page= {{ page1right }} "> {{ page1right }} </a>
    <a href="admin.php?ctrl=Admin&act=Index&page= {{ page2right }} "> {{ page2right }} </a>
    <a href="admin.php?ctrl=Admin&act=Index&page= {{ page3right }} "> {{ page3right }} </a>
    <a href="admin.php?ctrl=Admin&act=Index&page= {{ page4right }} "> {{ page4right }} </a>

    <hr>
    <a href="index.php?ctrl=Admin&act=Insert">Добавить новость</a>
    <hr>
</div>


</body>
</html>