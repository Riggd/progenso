{% extends "base.php" %}
{% block content %}
    <h1>Hello, {{user.nickname}}!</h1>
    {% for post in posts %}
    <div>
        <p>{{post.author.nickname}} says: <b>{{post.body}}</b></p>
    </div>
    {% endfor %}
{% endblock %}