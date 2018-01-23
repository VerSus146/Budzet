<?php
include("config.php");

$ostrzezenie = "false";
$ostrzezeniekomentarz = "false";
$ilosc = $_POST["ilosc"];
$komentarz = $_POST["komentarz"];
$data = date("Y-m-d"); 
$login = $_SESSION["logowanie"];

if(!isset($ilosc) || trim($ilosc) == "Wpisz ilość" || trim($ilosc) == "" || !is_numeric($ilosc)) {
    $ostrzezenie = "true";
    $_GET["ostrzezenie"] = $ostrzezenie;
    header('Location: http://versus146.nazwa.pl/Kasa/Dodaj_srodki.php?ostrzezeniekomentarz='.$ostrzezeniekomentarz."&ostrzezenie=".$ostrzezenie); 
} else {
    if(trim($komentarz == "Wpisz komentarz") || trim($komentarz == "")) {
        $ostrzezeniekomentarz = "true";
        $_GET["ostrzezeniekomentarz"] = $ostrzezeniekomentarz;
        header('Location: http://versus146.nazwa.pl/Kasa/Dodaj_srodki.php?ostrzezeniekomentarz='.$ostrzezeniekomentarz."&ostrzezenie=".$ostrzezenie); 
    } else if($ostrzezeniekomentarz == "false"){
                if($ilosc > 0) {
                    $ostrzezenie = "false";
                    $_GET["ostrzezenie"] = $ostrzezenie;
                    mysql_query("INSERT INTO `$login` (Saldo,Data,Komentarz) VALUES('$ilosc','$data','$komentarz')") or die ("Nie udało się wysłać");
                    header('Location: http://versus146.nazwa.pl/Kasa/Dodaj_srodki.php?ostrzezeniekomentarz='.$ostrzezeniekomentarz."&ostrzezenie=".$ostrzezenie);
                } else {
                    $ostrzezenie = "true";
                    $_GET["ostrzezenie"] = $ostrzezenie;
                    header('Location: http://versus146.nazwa.pl/Kasa/Dodaj_srodki.php?ostrzezeniekomentarz='.$ostrzezeniekomentarz."&ostrzezenie=".$ostrzezenie);
                }
            } else {
                $ostrzezenie = "true";
                $_GET["ostrzezenie"] = $ostrzezenie;
                header('Location: http://versus146.nazwa.pl/Kasa/Dodaj_srodki.php?ostrzezeniekomentarz='.$ostrzezeniekomentarz."&ostrzezenie=".$ostrzezenie); 
            }
        }

?>