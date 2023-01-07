<?php
    // Übdergabe der Variablen
    $d_start = $_POST["date_start"];
    $d_end = $_POST["date_end"];
    $unit = $_POST["unit"];
    $art = $_POST["art"];
    $keyword = $_POST["keyword"];
    $function = $_POST["function"];
    $note = $_POST["note"];
 
    // Umwandeln der Unix Time
    $start = strtotime($d_start);
    $end = strtotime($d_end);

    // Ausgabe als lesbares Format
    $eventstart = date('d.m.Y H:i', $start);
    $eventend = date('d.m.Y H:i', $end);

    // Berechnung der Einsatzdauer und Ausgabe in Stunden:Minuten
    // ein Tag hat eine Timestampwert von 3600
    $diff = ($end - $start)-90000; //eine Stunde und eine Minute (also Stampwert) abziehen, dass die tatsächliche Dauer angezeigt wird

    if($diff < '-3600') //wenn die Differenz kleiner ein Tag ist, zeige nur Stunden und Minuten an
        {
            $diff = date('H:i', $diff);
            echo "Einsatzdauer: $diff";
        }
    elseif(($diff >= '-3600')) // wenn die Differenz größer ein tag ist, zeige zusätzlich noch einen Tag an
        {
            $diff = date('d:H:i', $diff);
            echo "Einsatzdauer: $diff";
        }

//    echo "Folgende Werte wurden in die Datenbank übergeben";
//    echo "$datestart<br>$unit<br>$art<br>$keyword<br>$function<br>$note";


// include("dbconnect.php")

?>