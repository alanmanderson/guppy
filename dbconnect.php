<?php
  $mydb = mysql_connect("Localhost", "alanmand_user1", "daBrav3s") or die(mysql_error());
  mysql_select_db("alanmand_guppy") or die(mysql_error());
  function runQuery($query) {
    $results = mysql_query($query) or die(mysql_error());
    return $results;
  }
?>