<?php   
   session_start();

    include('dbconnection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from tlclient where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION['status']="Active";

            $_SESSION['UserID']=$email;
 
            echo'<script>alert("succesfully logged in")</script>';
            header('location: landing.php');
 
        }  
        else{  
            echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('Invalid email or password')
              window.location.href='Registration.php';
              </SCRIPT>");

        }     
?>  