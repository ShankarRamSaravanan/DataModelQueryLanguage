<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM account_details WHERE Account_No = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Record Deleted Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
