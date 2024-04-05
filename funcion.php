<?php

        echo "<div class='php'>";
        $numero = $_POST["numero"];
        for($i=1; $i<=50; $i++){
            echo "<p class='p_php'>".$numero." X ".$i." = ".$i*$numero."</p>"."<br>";
        }
        echo "</div>";