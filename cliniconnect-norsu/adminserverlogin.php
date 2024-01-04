<?php  
session_start();


if(isset($_POST['adminpassword'])){

   
   include 'db.conn.php';
   
   $adminpassword = $_POST['adminpassword'];
   
   
   if(empty($adminpassword)){
      
      $em = "Password is required";


      header("Location: adminlogin.php?error=$em");
   }else {
      $sql  = "SELECT * FROM 
               users WHERE adminpassword=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$adminpassword]);

      
      if($stmt->rowCount() === 1){
        
        $user = $stmt->fetch();

        if ($user['adminpassword'] === $adminpassword) {
           
          
          if (($user['adminpassword'])) {

            
            $_SESSION['adminpassword'] = $user['adminpassword'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['user_id'] = $user['user_id'];

            
            header("Location: adminlogin.php");
        }
      }
   }$em = "Wrong Password!!";

     header("Location: adminlogin.php?error=$em");
    exit;
   }
  }
?>
