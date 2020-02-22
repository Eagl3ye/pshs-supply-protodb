<?php
  include("templates/header.php");
  $action = 'index';
  $disallow_paths = array('header', 'footer');
  if (!empty($_GET['action'])) {
    $tmp_action = basename($_GET['action']);
    if (!in_array($tmp_action, $disallow_paths) && file_exists("templates/{$tmp_action}.php")) {
      $action = $tmp_action;
    } else {
      $action = 'notfound';
    }
    include("templates/$action.php"); //allowed page
  }
  include("templates/$action.php"); //disallowed/unavailable page
  include("templates/footer.php");
?>
