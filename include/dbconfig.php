<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {

  //Root4225
  //u504463406_db_name
  //u504463406_root
   $mysqli = new mysqli("localhost", "u504463406_root", "Root4225", "u504463406_db_name");
  $mysqli->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  //Should be a message a typical user could understand
}
    
    $set = $mysqli->query("SELECT * FROM `setting`")->fetch_assoc();
	$main = $mysqli->query("SELECT * FROM `tbl_clap`")->fetch_assoc();
	date_default_timezone_set($set['timezone']);
?>