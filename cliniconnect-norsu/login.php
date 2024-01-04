<?php 
  session_start();
  if (!isset($_SESSION['idnumber'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <style>
        *{
            margin: 0;
        }
        body{
            padding: 10px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            background: lavender;
        }
        .form{
            margin-left: auto;
            margin-right: auto;
            width: 290px;
        }
        .up{
            margin-top: 5px;
            text-align: center;
            background: #0080FE;
            font-weight: bold;
            color: yellow;
            font-size: 25px;
            border-radius: 10px 10px 0 0;
            padding: 15px;
        }
        .down{
            text-align: left;
            padding: 20px 20px 20px 20px;
            border-bottom: 1px solid #0080FE;
            border-left: 1px solid #0080FE;
            border-right: 1px solid #0080FE;
            border-radius: 0 0 10px 10px;
            background: #fff;
            margin-left: auto;
            margin-right: auto;
        }
        .input{
            font-family: 'Poppins', sans-serif;
            width: 92%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid grey;
        }
        .input:focus,
        .input:active{
            color: darkblue;
            border: 1px solid #0080FE;
            box-shadow: 0 0 10px #0080FE;
        }
        .logo{
            width: 120px;
            height: 120px;
            border: 5px solid #fff;
            border-radius: 100%;
        }
        .label{
            margin-top:10px;
            font-weight: bold;
            text-align: center;
        }
        .dt{
            font-family: 'Poppins', sans-serif;
            text-align: center;
            font-size: 12px;
        }
        a{
            text-decoration: none;
            font-size: 13px;
        }
        .cb{
            margin-top: 5px;
            font-size: 13px;
        }
        .btn{
            font-family: 'Poppins', sans-serif;
            margin-top: 20px;
            width: 100%;
            height: 40px;
            background: #0080FE;
            border: none;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            padding: 8px;
            border-radius: 5px;
        }
            .btn:hover{
                    background:darkblue;
                    color:#0080FE;
                    transition: 0.1s;
                    }

        p{
            font-family: 'Poppins', sans-serif;
        }
        .alert {
        width: auto; 
        height: auto;
        padding: 10px;
        margin: 10px 10px;  
        border: 1px solid #ff0000; 
        color: #ff0000; 
        background: #f2dede; 
        border-radius: 5px; 
        text-align: center;
        font-size: 13px;       
        }
        .success {
            font-family: 'Poppins', sans-serif;
        width: auto; 
        height: auto;
        padding: 10px;
        margin: 10px 10px;  
        border: 1px solid #4BB543; 
        color: darkgreen; 
        background: lightgreen; 
        border-radius: 5px; 
        text-align: center;
        font-size: 13px;    
        font-weight: bold;   
        }
    </style>
    <body>
        <img class="logo" src="img/clinic.jpg" />
        <h2>CliniConnect</h2>
        <h2>NORSU-G Health Hub</h2>
        <form action="serverlogin.php" method="post">
        <div class="form">
        <div class="up">
            <p>STUDENT</p>
        </div>
        <div class="down">
        <?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } ?>
			
	 		<?php if (isset($_GET['success'])) { ?>
	 		<div class="success" role="alert">
			  <?php echo htmlspecialchars($_GET['success']);?>
			</div>
			<?php } ?>
            <div class="label">
            <label>Student ID Number</label>
            </div>
            <input class="input" name="idnumber" type="text" placeholder="Type here..." />
            <button type="submit" class="btn">Login</button>
            <p class="dt">Don't have an account? <a href="register.php">Register</a></p>
        </div>
    </div>
    </form>
    </body>
</html>
<?php
  }else{
  	header("Location: dashboard.php");
   	exit;
  }
 ?>