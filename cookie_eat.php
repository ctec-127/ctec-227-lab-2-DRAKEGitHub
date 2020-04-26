<!DOCTYPE html>
<html lang="en">
<!-- Author: Allison Drake
Class: CTEC PHP 227
Assignment: Lab 2 Cookies
Date: 4-26-2020 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drake Lab 2. - Cookie Eat</title>
</head>
<body>
    <h1>Eating Cookies with Drake</h1>
    <?php
        echo "Username: " . $_COOKIE['username'] . "<br>";
        echo "First Name: " . $_COOKIE['firstname'] . "<br>";
        echo "Last Name :" . $_COOKIE['lastname'] . "<br>";
        if (isset($_COOKIE["cookie"])){
            foreach($_COOKIE["cookie"] as $key=>$val){
                echo ucwords($key).': '.$val."<br>\n";
            }
        }
    ?>
    <ul>
    <li><a href="cookie_bake.php">Go back to Making Cookies</a>
    </li>
    <li><a href="cookie_eat.php">Eat These Cookies Again</a>
    </li>
    <li><a href="cookie_monster.php">Destroy Cookies</a></li>
    </ul>
</body>
</html>