<?php

// Set error reporting to display all errors and notices
error_reporting(E_ALL);

// Start a session
session_start();

// Check for the existence of a known session variable
if ( $_SESSION['test_value'] ) {
  echo 'Found a session';
} else {
  echo 'No session exists - writing to test_value';
  $_SESSION['test_value'] = true;
}

// Close and write session
session_write_close();

?>