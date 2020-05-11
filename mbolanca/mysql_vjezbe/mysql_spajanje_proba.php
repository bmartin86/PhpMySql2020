<?php
require_once '../connection/mysqli_konekcija.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $query = "SELECT mbrStud,imeStud, prezStud FROM stud WHERE stud.pbrRod=22000";
        $result = $mysqli->query($query);
        ?>

        <div> Popis svih upisanih studenata iz Šibenika :<br>

            <?php
            echo "<ul>";
            while ($obj = $result->fetch_object()) {
                echo "<li><b>" . $obj->mbrStud . "</b> " . $obj->prezStud . " " . $obj->imeStud . "</li>";
            }
            echo "</ul>";

            $result->free_result();
            ?>
        </div>
            <?php
            $mysqli->close();
            ?>
    </body>
</html>
