{% extends "base.php" %}

{% block content %}
<script type="text/javascript">
function set_openid(openid, pr) {
    u = openid.search('<username>')
    
    if (u != -1) {
        // openid requires username
        user = prompt('Enter your ' + pr + ' username:')
        openid = openid.substr(0, u) + user
    }
    
    form = document.forms['login'];
    form.elements['openid'].value = openid
}
</script>
<h1>Sign In</h1>
<form action="" method="POST" name="login">
    {{form.hidden_tag()}}
    <p>
        Please enter your OpenID:<br />
        {{form.openid(size=80)}}
        {% for error in form.errors.openid %}
            <span style="color: red;">[{{error}}]</span>
        {% endfor %}<br />
        |{% for pr in providers %}
        <a href="javascript:set_openid('{{pr.url}}', '{{pr.name}}');">{{pr.name}}</a> |
        {% endfor %}
    </p>
    <p>{{form.remember_me}} Remember Me</p>
    <p><input type="submit" value="Sign In"></p>
</form>
{% endblock %}