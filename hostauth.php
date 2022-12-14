<?php      
    include('logb.php');  
    $Email = $_POST['Email'];  
    $Password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $Email = stripcslashes($Email);  
        $password = stripcslashes($password);  
        $Email = mysqli_real_escape_string($con, $Email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from Customers where Email = '$Email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        
        if($count == 1) {
            echo "login success";}

            else {
                echo "invalid id address";
            }
        
        
    
        
        
           
?>  