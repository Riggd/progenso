{% extends "base.php" %}

{% block content %}
<table>
    <tr valign="top">
        <td><img src="{{user.avatar(128)}}"></td>
        <td>
            <h1>User: {{user.nickname}}</h1>
            {% if user.about_me %}<p>{{user.about_me}}</p>{% endif %}
            {% if user.last_seen %}<p><i>Last seen on: {{user.last_seen}}</i></p>{% endif %}   
            {% if user.id == g.user.id %}<p><a href="{{url_for('edit')}}">Edit</a></p>{% endif %}
        </td>
    </tr>
</table>
<hr>
{% for post in posts %}
    {% include 'post.php' %}
{% endfor %}
{% endblock %}
