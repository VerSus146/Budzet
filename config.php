<?php
session_start();
mysql_connect('sql.versus146.nazwa.pl', 'versus146_DomowaKasa', 'Andertejl146');

mysql_select_db('versus146_DomowaKasa') 
or die('Nie mogę połączyć się z bazą danych<br />Błąd: '.mysql_error());
?>