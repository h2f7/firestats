<?php
    $db = mysqli_connect("localhost", "h511878_fsadm", "w!2n!BPU9!5@T5t5HRPKYJ@2@", "h511878_firestat");
    if(!$db)
        {
            exit("Verbindungsfehler: ".mysqli_connect_error());
        }
?>