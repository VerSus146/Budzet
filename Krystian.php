<?php
include("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Krystian.css">
</head>
<body>
    <?php
    $login = $_POST["logowanie"];
    $_SESSION["logowanie"] = $login;
    ?>
    <div id="container">
        <div id="srodek">
            <?php
            echo "Zalogowano jako ".$login;
            ?>
            <hr>
            <input type="button" value="Podgląd" class="przycisk">
            <div id="opcje">
                <div id="prawy_panel">
                    <a href="Dodaj_srodki.php"><input type="button" value="Dodaj środki" class="przycisk"></a><br /><br />
                    <a href="Odejmij_srodki.php"><input type="button" value="Odejmij środki" class="przycisk"></a>
                </div>
                <div id="lewy_panel">
                    <a href="Saldo_i_wydatki.php"><input type="button" value="Saldo i wydatki" class="przycisk"></a><br><br>
                    <input type="button" value="Statystyki" class="przycisk">
                </div>
                <a href="index.php"><input type="button" value="Wyloguj" class="przycisk"></a>
            </div>
        </div>
    </div>
</body>
</html>