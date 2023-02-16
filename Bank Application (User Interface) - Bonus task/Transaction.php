<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

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

      
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Account_no</th>
            <th>Account_type</th>
            <th>Transaction_Id</th>
            <th>Time_stamp</th>
            <th>Transaction_mode</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM account_details ad, Transaction tr where ad.Account_no= tr.Account_no" ;
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Account_no']; ?></td>
            <td><?php echo $row['Account_type']; ?></td>
            <td><?php echo $row['Transacton_Id']; ?></td>
            <td><?php echo $row['Time_stamp']; ?></td>
            <td><?php echo $row['Transaction_mode']; ?></td>
            <td><?php echo $row['Amount']; ?></td>
            <td>
            
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
