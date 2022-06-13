<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            if ($_SESSION["zalogowany"] != 1) {
                header("Location: index.php");
            }
            else
            {
                echo $_SESSION["zalogowanyImie"]."<br>";
            }
        ?>

        <?php
            require_once("funkcje.php");
            echo "Zalogowano";
        ?>

        <form action="index.php" method="POST">
            <input type="submit" name= "Wyloguj" value="Wyloguj">
        </form><br>

        <form action='user.php' method='POST' enctype='multipart/form-data' enctype='multipart/form-data'>
            <input type="file" name="file" value="Wybierz plik">
            <input type="submit" value="submit">
        </form><br>

        <?php
        if (isSet($_FILES["file"])) {
            $currentDir = getcwd();
            $uploadDirectory = "/";
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileType = $_FILES['file']['type'];
            if($fileName != "" and
                ($fileType == 'image/png' or $fileType == 'image/jpeg'))
                {
                    $uploadPath = $currentDir.$uploadDirectory.$fileName;
                    if(move_uploaded_file($fileTmpName,$uploadPath))
                        echo "Udało sie załadować zdjęcie <br>";
                }
        }
        ?>
        <img src="ryba.jpg" alt="Brak zdjęcia">
    </body>
</html>

