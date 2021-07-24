<!-- SweetAlert2 -->
<script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />

<?php
   session_start();

        require_once("dbconnection.php");
        if(isset($_POST["submit"])){
          $username=$_POST["username"];
          $email=$_POST["email"];
          $password=$_POST["password"];
          $passwordConfirm=$_POST["passwordConfirm"];
          $location=$_POST["location"];

          if($password==$passwordConfirm){
            $sql="INSERT INTO tlclient(username,email,password,location) VALUES('$username','$email','$password','$location') ";

          
            if(mysqli_query($conn,$sql)){
              echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('Succesfully Registered')
              window.location.href='Registration.php';
              </SCRIPT>");

            
              
               
                $_SESSION['UserID']=$username;

              }
            
        
          else{
            echo "<SCRIPT LANGUAGE='JavaScript'>
            window.alert('The Email Address Provided Already Exists')
            window.location.href='Registration.php';
            </SCRIPT> ".mysqli_error($conn);

          }
        }else{
          echo "<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Passwords need to match')
          window.location.href='Registration.php';
          </SCRIPT> ".mysqli_error($conn);

        }
        }


        ?>
         
          