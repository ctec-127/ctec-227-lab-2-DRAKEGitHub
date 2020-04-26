<!DOCTYPE html>
<html lang="en">
<!-- Author: Allison Drake
Class: CTEC PHP 227
Assignment: Lab 2 Cookies
Date: 4-26-2020 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drake Lab 2. - Cookies</title>
</head>
<body>
<h1>Making Cookies with Drake</h1>
<p>When you weren't looking, I made some cookies in the background.</p>

    <?php
        setcookie("username", "BettyW", time() + 7200);
        setcookie("firstname", "Betty", time() + 7200);
        setcookie("lastname", "White", time() + 7200);

        setcookie("cookie[institution]","Clark", time()+7200);
        setcookie("cookie[city]","Vancouver", time()+7200);
        setcookie("cookie[state]","WA", time()+7200);
    ?>
    <ul>
    <li><a href="cookie_eat.php">Eat Cookies</a>
    </li>
    <li><a href="cookie_monster.php">Destroy Cookies</a></li>
    </ul>
</body>
</html>