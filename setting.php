<?php
  $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  }
