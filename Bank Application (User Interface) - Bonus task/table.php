<html>

<head>
<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("new_bank", $con);

 

$result = mysql_query("SELECT * FROM account_details");

 

echo "<table border='1'>

<tr>

<th>Account_no</th>

<th>Account_no</th>

<th>Customer_Id</th>

<th>Branch_Id</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Account_no'] . "</td>";

  echo "<td>" . $row['Account_type'] . "</td>";

  echo "<td>" . $row['Customer_Id'] . "</td>";

  echo "<td>" . $row['Branch_Id'] . "</td>";

  echo "</tr>";

  }


echo "</table>";

 

mysql_close($con);

?>

</body>

</html>