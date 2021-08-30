<?php
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$voter= $_POST['voter'];
$email= $_POST['email'];
$number= $_POST['number'];
 if(!empty($firstname)||!empty($lastname)||!empty($voter)||!empty($email)||!empty($number))
 {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "developers";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $Select = "SELECT email FROM vote  WHERE email = ? LIMIT 1";
        $Insert = "INSERT INTO vote(firstname, lastname, voter, email, number) values(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows; 

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssi",$firstname, $lastname, $voter, $email, $number);
               $stmt->execute() ;
                    echo "New record inserted sucessfully.";
            }
                else {
                    echo "Someone already registers using this email.";
                }
                $stmt->close();
            $conn->close(); 
    }
 }
 else{
     echo"all field are required";
     die();
 }
?>