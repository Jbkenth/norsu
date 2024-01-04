<?php  

if(isset($_POST['adminpassword']) &&
   isset($_POST['adminname'])){
   include 'db.conn.php';
   $adminname = $_POST['adminname'];
   $adminpassword = $_POST['adminpassword'];
   $data = 'adminname='.$adminname.'&adminpassword='.$adminpassword;

   if (empty($adminname)) {
   	
   	  $em = "Admin Name is required";
   	  header("Location: adminregister.php?error=$em");
   	  exit;
   }else if(empty($adminpassword)){
   	  $em = "Admin Password is required";

   	  header("Location: adminregister.php?error=$em&$data");
   	  exit;
   }else {
   	  $sql = "SELECT adminpassword 
   	          FROM users
   	          WHERE adminpassword=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$adminpassword]);

      if($stmt->rowCount() > 0){
      	$em = "Please try another password!!";
      	header("Location: adminregister.php?error=$em&$data");
   	    exit;
      }else {
            $sql = "INSERT INTO users
                    (adminname, adminpassword)
                    VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$adminname, $adminpassword]);
      	}

      	$sm = "Registration Succesfully!!!";

      	header("Location: adminlogin.php?success=$sm");
     	exit;
      }

   }else {
	header("Location: adminregister.php");
   	exit;
}