<?php  

function getUser($idnumber, $conn){
   $sql = "SELECT * FROM users 
           WHERE idnumber=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$idnumber]);

   if ($stmt->rowCount() === 1) {
   	 $user = $stmt->fetch();
   	 return $user;
   }else {
   	$user = [];
   	return $user;
   }
}
?>