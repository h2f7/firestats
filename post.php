<?php
    // Übdergabe der Variablen
    $d_start = $_POST["date_start"];
    $d_end = $_POST["date_end"];
    $unit = $_POST["unit"];
    $art = $_POST["art"];
    $keyword = $_POST["keyword"];
    $function = $_POST["function"];
    $note = $_POST["note"];

$start = new DateTime($d_start);
$end = new DateTime($d_end);

if($start < $end)
{
    $diff = $start->diff($end);

    if($diff->days <= 0) 
    {
    $diffFormatted = $diff->format('%H:%I');
    echo "Einsatzdauer: $diffFormatted";
    }
    elseif(($diff >= '-3600')) // wenn die Differenz größer ein tag ist, zeige zusätzlich noch einen Tag an
    {
    $diffFormatted = $diff->format('%D:%H:%I');
    echo "Einsatzdauer: $diffFormatted";
    }
}
else
{
    echo "Fehler!";
}
//    echo "Folgende Werte wurden in die Datenbank übergeben";
//    echo "$datestart<br>$unit<br>$art<br>$keyword<br>$function<br>$note";


// include("dbconnect.php")

?>