<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            echo "<h1> Nasz system </h1>";

            if(isSet($_POST["Wyloguj"])){
                $_SESSION["zalogowany"] = 0;
                header("index.php");
            }
        ?>



        <form action="logowanie.php" method="POST">
            <fieldset>
                <legend>Logowanie:</legend>
                <label for="fname">Login: </label>
                <input type="text" name="Login"><br>
                <label for="fname">Hasło: </label>
                <input type="text" name="Hasło"><br>
                <input type="submit" name="Zaloguj" value="Zaloguj">
            </fieldset>
        </form>

        <form action="cookie.php" method="get">
            <fieldset>
                <legend>Cookie test</legend>
                <label for="fname">Czas życia w sekundach: </label>
                <input type="number" name="Czas"><br>
                <input type="submit" name="utworzCookie" value="Utwórz Cookie">
            </fieldset>
        </form><br><br>

        <?php
            if (iSset($_COOKIE["Czas"])) {
                echo "Ciasteczko: " . $_COOKIE["Czas"]."s<br>";
            }
        ?>

    </body>
</html>
