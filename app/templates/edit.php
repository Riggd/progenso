{% extends "base.php" %}

{% block content %}
<h1>Edit Your Profile</h1>
<form action="" method="POST" name="edit">
    {{form.hidden_tag()}}
    <table>
        <tr>
            <td>Your nickname:</td>
            <td>{{form.nickname(size = 24)}}</td>
        </tr>
        <tr>
            <td>About yourself:</td>
            <td>{{form.about_me(cols = 32, rows = 4)}}</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save Changes"></td>
        </tr>
    </table>
</form>
{% endblock %}