<?php
  include("db_conn.php");
 

    $Name=$_POST['Name'];
    $Email=$_POST[`Email`];
    $Password=$_POST[`Password`];
   

    $sql ="INSERT INTO d2(`Name`, `Email` ,`Password`,) VALUES(‘$Name’,’$Email’,’$Password’)”;
    if ($conn->query($sql) === TRUE)
    {
    echo "feedback successfully submitted";
    echo '<script type="text/javascript"> alert("data submitted");</script>';

    header("Location:register.html");
    
    }

    else
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    
  
  ?>
