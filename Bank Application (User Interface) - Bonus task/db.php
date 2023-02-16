<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'new_bank'
) or die(mysqli_erro($mysqli));

?>

