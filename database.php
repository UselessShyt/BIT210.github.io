<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "carbon_emmision";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        echo"Could not connect!!!";
    }

    $url_0 = "";
    $url_1 = "";
    $url_2 = "";
    $url_3 = "";
    $url_4 = "";
    $url_5 = "";
    $url_6 = "";
    $url_7 = "";
    $url_8 = "";
    $url_9 = "";
    $url_10 = "";
    $url_11 = "";
    $url_12 = "";
    $url_13 = "";
    $url_14 = "";
    $url_15 = "";
    $url_16 = "";
    $url_17 = "";
    $url_18 = "";
    $url_19 = "";
    $url_20 = "";
    $url_21 = "";
    $url_22 = "";
    $url_23 = "";

    for ($i=0; $i < 24; $i++) { 
        $sql = "SELECT * FROM educational_content WHERE id =" . ($i + 1);
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ${"url_" . $i} = $row['url'];
    }
?>