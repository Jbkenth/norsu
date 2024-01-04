<?php  

if(isset($_POST['idnumber']) &&
   isset($_POST['name'])){
   include 'db.conn.php';
   $name = $_POST['name'];
   $idnumber = $_POST['idnumber'];
   $data = 'name='.$name.'&idnumber='.$idnumber;

   if (empty($idnumber)) {
   	
   	  $em = "Student ID Number is required";
   	  header("Location: register.php?error=$em");
   	  exit;
   }else if(empty($name)){
   	  $em = "Full Name is required";

   	  header("Location: register.php?error=$em&$data");
   	  exit;
   }else {
   	  $sql = "SELECT idnumber 
   	          FROM users
   	          WHERE idnumber=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$idnumber]);

      if($stmt->rowCount() > 0){
      	$em = "The ID Number $idnumber existed!";
      	header("Location: register.php?error=$em&$data");
   	    exit;
      }else {
            $sql = "INSERT INTO users
                    (name, idnumber)
                    VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $idnumber]);
      	}

      	$sm = "Registration Succesfully!!!";

      	header("Location: login.php?success=$sm");
     	exit;
      }

   }else {
	header("Location: register.php");
   	exit;
}