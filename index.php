<?php
  include("templates/header.htm");    
  $action = 'index';
  $disallowed_paths = array('header', 'footer'); 
  if (!empty($_GET['action'])) { 
      $tmp_action = basename($_GET['action']); 
      if (!in_array($tmp_action, $disallowed_paths) && file_exists("templates/{$tmp_action}.htm")) 
          $action = $tmp_action; 
  }
  $conn = pg_connect(getenv("DATABASE_URL"));
  $result = pg_query($conn, "SELECT * FROM kidz");
  $multiarr = pg_fetch_all($result);
  foreach ($multiarr as $arr) {
      echo "$arr[usr_id] <br>";  
      echo "$arr[mono] <br><br>";
  }
  include("templates/$action.htm"); 
  include("templates/footer.htm");
?>
