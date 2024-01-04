<?php 
  session_start();

  if (isset($_SESSION['adminpassword'])) {
  	include 'db.conn.php';

  	include 'app/helpers/user1.php';
  	include 'app/helpers/conversations1.php';
    include 'app/helpers/timeAgo1.php';
    include 'app/helpers/last_chat1.php';
	$sName = "localhost";

	$uName = "root";
	
	$pass = "";
	
	$db_name = "4402028_cliniconnect";
	$db = mysqli_connect("$sName", "$uName", "$pass", "$db_name");
	   $check = $_SESSION['adminpassword'];
	   $ses_sql=mysqli_query($db,"select idnumber from users where adminpassword='$check'");
	$row=mysqli_fetch_array($ses_sql);
	$idnumber1 = $row['idnumber'];
  	$user = getUser($idnumber1, $conn);



  	$conversations = getConversation($user['user_id'], $conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Message</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.vh-100 {
	min-height: 100vh;
}
.w-400 {
	width: 400px;
}
.fs-xs {
	font-size: 1rem;
}
.w-10 {
	width: 10%;
}
a {
	text-decoration: none;
}
.fs-big {
	font-size: 5rem !important;
}
.online {
	width: 10px;
	height: 10px;
	background: green;
	border-radius: 50%;
}
.w-15 {
	width: 15%;
}
.fs-sm {
	font-size: 1.4rem;
}
small {
	color: #bbb;
	font-size: 0.7rem;
	text-align: right;
}
.chat-box {
	overflow-y: auto;
	overflow-x: hidden;
	max-height: 50vh;
}
.rtext {
	width: 65%;
	background: #f8f9fa;
	color: #444;
}

.ltext {
	width: 65%;
	background: #3289c8;
	color: #fff;
}
*::-webkit-scrollbar {
  width: 3px;
}

*::-webkit-scrollbar-track {
  background: #f1f1f1;
}

*::-webkit-scrollbar-thumb {
  background: #aaa;
}

*::-webkit-scrollbar-thumb:hover {
  background: #3289c8;
}

textarea {
	resize: none;
}
.p{
	font-family: 'Poppins', sans-serif;
	position: fixed;
	top: 0;
	font-size: 10px;
	text-align: center;
	background: #003152;
	color: #fff;
	padding: 10px 10px;
}
.footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background: #008ECC;
}
.footer p{
	padding-top: 25px;
    text-align: center;
    color: #fff;
    font-weight: bold;
}
</style>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
			 
    <div class="p-2 w-400
                rounded shadow">
    	<div>
    		<div class="d-flex
    		            mb-3 p-3 bg-light
			            justify-content-between
			            align-items-center">
    			<div class="d-flex
    			            align-items-center">
    			    <img src="img/icon.png"
    			         class="w-25 rounded-circle">
                    <h3 class="fs-xs m-2"><?=$user['adminname']?></h3> 
    			</div>
    			<a href="admindashboard.php"
    			   class="btn btn-dark">Back</a>
    		</div>

    		<div class="input-group mb-3">
    			<input type="text"
    			       placeholder="Search..."
    			       id="searchText"
    			       class="form-control">
    			<button class="btn btn-primary" 
    			        id="serachBtn">
    			        <i class="fa fa-search"></i>	
    			</button>       
    		</div>
    		<ul id="chatList"
    		    class="list-group mvh-50 overflow-auto">
    			<?php if (!empty($conversations)) { ?>
    			    <?php
    			    foreach ($conversations as $conversation){ ?>
	    			<li class="list-group-item">
	    				<a href="chat1.php?user=<?=$conversation['idnumber']?>"
	    				   class="d-flex
	    				          justify-content-between
	    				          align-items-center p-2">
	    					<div class="d-flex
	    					            align-items-center">
	    					    <img src="img/icon.png"
	    					         class="w-10 rounded-circle">
	    					    <h3 class="fs-xs m-2">
	    					    	<?=$conversation['name']?><br>
                      <small>
                        <?php 
                          echo lastChat($_SESSION['user_id'], $conversation['user_id'], $conn);
                        ?>
                      </small>
	    					    </h3>            	
	    					</div>
	    					<?php if (last_seen($conversation['last_seen']) == "Active") { ?>
		    					<div title="online">
		    						<div class="online"></div>
		    					</div>
	    					<?php } ?>
	    				</a>
	    			</li>
    			    <?php } ?>
    			<?php }else{ ?>
    				<div class="alert alert-info 
    				            text-center">
					   <i class="fa fa-comments d-block fs-big"></i>
                       No message yet from student..
					</div>
    			<?php } ?>
    		</ul>
    	</div>
    </div>
	  
	<footer class="footer">
            <p>MESSAGE</p>
        </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
      
      // Search
       $("#searchText").on("input", function(){
       	 var searchText = $(this).val();
         if(searchText == "") return;
         $.post('app/ajax/search1.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
         	   });
       });

       // Search using the button
       $("#serachBtn").on("click", function(){
       	 var searchText = $("#searchText").val();
         if(searchText == "") return;
         $.post('app/ajax/search1.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
         	   });
       });


      let lastSeenUpdate = function(){
      	$.get("app/ajax/update_last_seen.php");
      }
      lastSeenUpdate();
    
      setInterval(lastSeenUpdate, 10000);

    });
</script>
</body>
</html>
<?php
  }else{
  	header("Location: adminlogin.php");
   	exit;
  }
 ?>