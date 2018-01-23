<?php
include("config.php");
$login = $_SESSION["logowanie"];
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Saldo.css">
</head>
<body>
    <div id="container">
        <div id="srodek">
            Saldo i wydatki
            <hr>
            <div id="saldo">
                <?php
                    $suma = mysql_query('SELECT SUM(Saldo) AS Suma FROM '.$login);
                    $row = mysql_fetch_assoc($suma); 
                    $wynik = $row['Suma'];
                    echo "Aktualne saldo : ".$wynik;
                ?>
            </div>
            <div id="transakcje">
                <?php
                $wynik = mysql_query("SELECT * FROM ".$login); 
                if(mysql_num_rows($wynik) > 0) { 
                    while($r = mysql_fetch_assoc($wynik)) { 
                        echo $r['Saldo']."zł ";
                        echo $r['Komentarz']."<br /><hr>";
                    } 
                } 
                ?>
            </div>
            <form method="post" action="Krystian.php">
                <?php
                    $login = $_SESSION["logowanie"];
                    echo '<input type="hidden" name="logowanie" value="'.$login.'">';
                ?>
                <input type="submit" value="Wstecz" class="przycisk">
            </form>
        </div>
    </div>
</body>
</html>