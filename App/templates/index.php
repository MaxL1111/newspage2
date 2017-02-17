<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    {% block stylesheets %}
    <link rel="stylesheet" href="App/templates/style.css">
    {% endblock %}
    <title>{% block title %}Новости{% endblock %}</title>

</head>

<body>

<div id="header">
    <h2 align="center">PAGEnews.by</h2>
</div>

<script type="text/javascript" src="App/templates/xhr.js"></script>
<a name="use"></a>
<div id="content">
    

    {% for item in news %}
    <table class="tab">
        <tr>

            <th align="left" colspan="4">
                <a href="index.php?ctrl=News&act=One&id={{ item.id }} ">{{ item.title }}</a>
            </th>

        </tr>
        <tr>
            <td width="90px"><p>{{ item.date }}</p></td>
            <td>{{ item.text }}</td>
        </tr>
    </table>
    {% endfor %}


    {% if page - 4 <= count_post %} {% set page4left = page - 4 %} {% endif %}
    {% if page - 3 <= count_post %} {% set page3left = page - 3 %} {% endif %}
    {% if page - 2 <= count_post %} {% set page2left = page - 2 %} {% endif %}
    {% if page - 1 <= count_post %} {% set page1left = page - 1 %} {% endif %}

    {% if page + 4 <= count_post %} {% set page4right = page + 4 %} {% endif %}
    {% if page + 3 <= count_post %} {% set page3right = page + 3 %} {% endif %}
    {% if page + 2 <= count_post %} {% set page2right = page + 2 %} {% endif %}
    {% if page + 1 <= count_post %} {% set page1right = page + 1 %} {% endif %}

    {% if page4left > 0 %}<a href="index.php?page={{ page4left }} "> {{ page4left }} </a>{% endif %}
    {% if page3left > 0 %}<a href="index.php?page={{ page3left }} "> {{ page3left }} </a>{% endif %}
    {% if page2left > 0 %}<a href="index.php?page={{ page2left }} "> {{ page2left }} </a>{% endif %}
    {% if page1left > 0 %} <a href="index.php?page={{ page1left }} "> {{ page1left }} </a>{% endif %}
    <b>[ {{ page }} ]</b>
    <a href="index.php?page={{ page1right }} "> {{ page1right }} </a>
    <a href="index.php?page={{ page2right }} "> {{ page2right }} </a>
    <a href="index.php?page={{ page3right }} "> {{ page3right }} </a>
    <a href="index.php?page={{ page4right }} "> {{ page4right }} </a>

    <hr>
    <a href="index.php?ctrl=Admin&act=Index">Панель администратора</a>
    <hr>
</div>


</body>
</html>