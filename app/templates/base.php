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
        {% with messages = get_flashed_messages() %}
        {% if messages %}
        <ul>
            {% for message in messages %}
            <li>{{message}}</li>
            {% endfor %}
        </ul>
        {% endif %}
        {% endwith %}
        {% block content %}{% endblock %}
    </body>
</html>