<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>
<form method="POST" action="transaction.php">
      <input type="submit" value="Transaction details"/>
    </form>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="Account_no" class="form-control" placeholder="Enter Account No" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Account_type" rows="2" class="form-control" placeholder="Enter Account Type"></input>
          </div>
          <div class="form-group">
            <input type="text" name="Customer_Id" rows="2" class="form-control" placeholder="Enter Customer ID"></input>
          </div>
          <div class="form-group">
            <input type="text" name="Branch_Id" rows="2" class="form-control" placeholder="Enter Branch ID"></input>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Insert">
        </form>
        
      </div>
      
    </div>
    
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Account_no</th>
            <th>Account_type</th>
            <th>Customer_Id</th>
            <th>Branch_Id</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM account_details";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Account_no']; ?></td>
            <td><?php echo $row['Account_type']; ?></td>
            <td><?php echo $row['Customer_Id']; ?></td>
            <td><?php echo $row['Branch_Id']; ?></td>
            
            <td>
              <a href="edit.php?id=<?php echo $row['Account_no']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['Account_no']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
