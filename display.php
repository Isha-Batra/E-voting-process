<?php 
include 'conn.php';
 if(isset($_POST['done'])) {
    
    $firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$voter= $_POST['voter'];
$email= $_POST['email'];
$number= $_POST['number'];

     $q = "select * from developers";

     $query = mysqli_query($con,$q);
 }
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="display.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button type="submit"  class="btn btn-primary"><a href="front.html"> Home Page</a></button>
<h1 class="top"> Registration details </h1>
     <div class="container">
    <div class="table">
    
      <table>
      <tr>
      <th> id </th>
      <th> First Name </th>
      <th> Last Name </th> 
      <th> Voter ID </th>
      <th> Email ID </th>
      <th> Contact Number</th>
      
      <th> Delete </th>
      </tr>
      <?php 
 include 'conn.php';
 
     $q = "select * from vote";

     $query = mysqli_query($con,$q);
     
     while($res= mysqli_fetch_array($query)) {
  


?>
   <tr>
   <td> <?php echo $res['id']; ?> </td>
      <td> <?php echo $res['firstname']; ?> </td>
      <td> <?php echo $res['lastname']; ?> </td> 
      <td> <?php echo $res['voter']; ?> </td>
      <td> <?php echo $res['email']; ?> </td>
      <td> <?php echo $res['number']; ?></td>
      
      <td> <button class="btn"> <a href="delete.php?id=<?php echo $res['id']; ?>"> Delete: </a> </button> </td>
      
   
   </tr> 
   <?php
    }   
   ?>
      </table>



    </div>
    </div>
</body>
</html>

