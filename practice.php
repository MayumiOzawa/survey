<?php
    echo "ようこそSEBUへ!!";

    $nexseed = array();
    $nexseed[0] = "n";
    $nexseed[1] = "e";
    $nexseed[2] = "x";
    $nexseed[3] = "s";
    $nexseed[4] = "e";
    $nexseed[5] = "e";
    $nexseed[6] = "d";
    $nexseed["aaa"] = 20;

    $nexseed = array("PHP" => "WEB", "Swift" => "iPhone", "Java" => "Android");
    print($nexseed["PHP"]);
    print($nexseed["Swift"]);
    print($nexseed["Java"]);
    print($nexseed["aaa"]);
?>