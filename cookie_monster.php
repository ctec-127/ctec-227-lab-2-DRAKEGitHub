<!DOCTYPE html>
<html lang="en">
<!-- Author: Allison Drake
Class: CTEC PHP 227
Assignment: Lab 2 Cookies
Date: 4-26-2020 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drake Lab 2. - Cookie Monster<</title>
</head>
<body>
    <h1>Drake's a Cookie Monster</h1>
    <?php
                setcookie("username", "BettyW", time() -  3600);
                setcookie("firstname", "Betty", time() - 3600);
                setcookie("lastname", "White", time() - 3600);
                setcookie("cookie[institution]", "White", time() - 3600);
                setcookie("cookie[city]", "White", time() - 3600);
                setcookie("cookie[state]", "White", time() - 3600);
    ?>
    <p>I've destroyed those cookies.</p>
    <ul>
    <li><a href="cookie_bake.php">Make Cookies</a>
    </li>
    <li><a href="cookie_eat.php">Eat Cookies</a>
    </li>
    <li><a href="cookie_monster.php">Destroy Cookies</a></li>
    </ul>
</body>
</html>