<?php
include("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Dodaj_srodki.css">
</head>
<body>
    <div id="container">
        <div id="srodek">
            Odejmij środki
            <hr>
            <div id="Dodaj_srodki">
                <form action="sprawdz_wyplate.php" method="post">
                    <span id="ostrzezenie"></span><br />
                    Wpisz ilość wypłacanej kasy
                    <input type="text" name="ilosc" value="Wpisz ilość" class="textarea" onFocus="czysc(this)" /><br />
                    <?php
                        $ostrzezenie = $_GET["ostrzezenie"];
                        if(trim($ostrzezenie == "true")){
                            echo "Wypełnij poprawnie pole z kwotą";
                        } else {
                            echo "";
                        }
                    ?>
                    <br /><br />
                    Wpisz komentarz do wpłaty
                    <input type="text" name="komentarz" value="Wpisz komentarz" class="textarea" onFocus="czysc(this)" /><br />
                    <?php
                        $ostrzezeniekomentarz = $_GET["ostrzezeniekomentarz"];
                        if(trim($ostrzezeniekomentarz == "true")){
                            echo "Wypełnij poprawnie pole z komentarzem";
                        } else {
                            echo "";
                        }
                    ?><br />
                    <input type="submit" value="Zatwierdź" class="przycisk"><br />
                    <?php
                        $ostrzezenie = $_GET["ostrzezenie"];
                        if(trim($ostrzezenie == "false") && trim($ostrzezeniekomentarz == "false")){
                            echo "Odjąłeś kwotę od bazy";
                        } else {
                            echo "";
                        }
                    ?>
                </form>
                <form method="post" action="Krystian.php">
                <?php
                    $login = $_SESSION["logowanie"];
                    echo '<input type="hidden" name="logowanie" value="'.$login.'">';
                ?>
                <input type="submit" value="Wstecz" class="przycisk">
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="czysc_tekst.js"></script>
</html>