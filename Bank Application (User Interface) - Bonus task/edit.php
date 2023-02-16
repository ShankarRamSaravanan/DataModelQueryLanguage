<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];  
  $query = "SELECT * FROM account_Details WHERE Account_no=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Account_no = $row['Account_no'];
    $Account_type = $row['Account_type'];
    $Customer_Id = $row['Customer_Id'];
    $Branch_Id = $row['Branch_Id'];
  }
}

if (isset($_POST['update'])) {
  $Account_no = $_GET['Account_no'];
  $Account_type= $_POST['accounttype'];
  $Customer_Id = $_POST['customerid'];
  $Branch_Id = $_POST['branchid'];


  $query = "UPDATE account_details set Account_type = '$Account_type', Customer_Id = '$Customer_Id',Branch_Id='$Branch_Id' WHERE Account_no=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Executed Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="accounttype" type="text" class="form-control" value="<?php echo $Account_type; ?>" placeholder="Update Account type">
        </div>
        <div class="form-group">
          <input name="customerid" type="text" class="form-control" value="<?php echo $Customer_Id; ?>" placeholder="Update Cusotmer ID">
        </div>
        <div class="form-group">
          <input name="branchid" type="text" class="form-control" value="<?php echo   $Branch_Id; ?>" placeholder="Update Branch ID">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
