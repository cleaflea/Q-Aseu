<?php if (!defined('THINK_PATH')) exit();?><html>
<head>

</head>
<body>

    <form action="__ROOT__/User/do_login" method="post" class="login" id="loginform">
        username: <input type="text" name="username" class="username" id="username" /> </br>
        password: <input type="password" name="password" class="password" id="password" /> </br>
        <input type="submit" value="login"/>
    </form>

</body>
</html>