<?php session_start(); ?>
<?php
    require("funkcje.php");

    // if(isSet($_POST["Zaloguj"])){
    //     echo "Przesłany login: ";
    //     echo test_input($_POST['Login'])."<br>";
    //     echo "Przesłane hasło: ";
    //     echo test_input($_POST['Hasło'])."<br>";

    //     echo "<h1> Nasz system </h1>";
    // }

    if(isSet($_POST["Zaloguj"])) {
        if(($_POST["Login"] == $osoba1->login) && ($_POST["Hasło"] == $osoba1->haslo)){
            $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
            $_SESSION["zalogowany"] = 1;
            //header("Location: user.php");
        }
        else if(($_POST["Login"] == $osoba2->login) && ($_POST["Hasło"] == $osoba2->haslo)){
            $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
            $_SESSION["zalogowany"] = 1;
        }

        if($_SESSION["zalogowany"] == 1)
        {
            header("Location: user.php");
        }
        else
        {
            header("Location: index.php");
        }
    }

?>