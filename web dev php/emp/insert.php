<!DOCTYPE html>
<html>
  
<head>
    <title>Insert page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername = "localhost";
        // username = "root";
        // password ="";
        // database name => "employess";
        $conn = mysqli_connect("localhost", "root", "", "employees");
          
      
        if($conn === false){
            die("database not connected. " 
                . mysqli_connect_error());
        }
          
    
        $FullName =  $_REQUEST['FullName'];
        $Salary = $_REQUEST['Salary'];
        $Email =  $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
          
     

        $sql = "INSERT INTO e1 (FullName,Salary,Email,Password) VALUES ('$FullName', '$Salary', '$Email', '$Password')";
          
        if(mysqli_query($conn, $sql)){

            echo "<h3> data stored in a database successfully." 
                . " </h3>"; 
  
            echo nl2br("\n$FullName\n $Salary\n "
                . " $Email\n $Password");
        } else{
            echo "failed Sorry $sql. " 
                . mysqli_error($conn);
        }
          
       
        mysqli_close($conn);

        ?>
    </center>
</body>
  
</html>