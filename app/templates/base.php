<!DOCTYPE html>
<html>
    <head>
        {% if title %}
        <title>{{title}} - Test site</title>
        {% else %}
        <title>Welcome to Test site</title>
        {% endif %}
    </head>
    <body>
        <div>
            <a href="{{ url_for('index') }}">Home</a>
            {% if g.user.is_authenticated() %}
            | <a href="{{ url_for('user', nickname = g.user.nickname) }}">Your Profile</a>
            | <a href="{{ url_for('logout') }}">Logout</a>
            {% endif %}
        </div>
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