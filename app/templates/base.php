<!DOCTYPE html>
<html>
    <head>
        {% if title %}
        <title>{{title}} - ProgensoAG</title>
        {% else %}
        <title>Welcome to ProgensoAG</title>
        {% endif %}
    </head>
    <body>
        <div>ProgensoAG: <a href="/index">Home</a></div>
        <hr>
        {% block content %}{% endblock %}
    </body>
</html>