<?php    
    $conn = pg_connect(getenv("DATABASE_URL"));
    $result = pg_query($conn, "SELECT * FROM kidz");
    $multiarr = pg_fetch_all($result);
    foreach ($multiarr as $arr) {
        echo "$arr[usr_id] <br>";  
        echo "$arr[mono] <br><br>";
    }
?>
