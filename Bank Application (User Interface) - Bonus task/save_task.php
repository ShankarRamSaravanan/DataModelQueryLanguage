<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $Account_no = $_POST['Account_no'];
  $Account_type = $_POST['Account_type'];
  $Customer_Id = $_POST['Customer_Id'];
  $Branch_Id = $_POST['Branch_Id'];
  $query = "INSERT INTO account_details(Account_no, Account_type, Customer_Id, Branch_Id) VALUES ('$Account_no', '$Account_type','$Customer_Id','$Branch_Id')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Executed successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
