<?php  
session_start();


if(isset($_POST['idnumber'])){

   
   include 'db.conn.php';
   
   $idnumber = $_POST['idnumber'];
   
   
   if(empty($idnumber)){
      
      $em = "Student ID Number is required";


      header("Location: login.php?error=$em");
   }else {
      $sql  = "SELECT * FROM 
               users WHERE idnumber=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$idnumber]);

     
      if($stmt->rowCount() === 1){
        
        $user = $stmt->fetch();

        if ($user['idnumber'] === $idnumber) {
           
          
          if (($user['idnumber'])) {

            
            $_SESSION['idnumber'] = $user['idnumber'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['user_id'] = $user['user_id'];

            
            header("Location: login.php");
        }
      }
   }$em = "Wrong Student ID Number!";

     header("Location: login.php?error=$em");
    exit;
   }
  }
?>
