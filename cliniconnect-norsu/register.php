
<?php 

  if (!isset($_SESSION['idnumber'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <title>Register</title>
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
            font-family: 'Poppins', sans-serif;
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
            font-family: 'Poppins', sans-serif;
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
        .label{
            margin-top:10px;
        }
        .input{
            font-family: 'Poppins', sans-serif;
            width: 93%;
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
            margin-left: auto;
            margin-right: auto;
            width: 120px;
            height: 120px;
            border: 5px solid #fff;
            border-radius: 100%;
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
            font-size: 13px;
            text-align: center;
        }
        a{
            text-decoration: none;
            font-size: 13px;
        }
        .none{
            display: none;
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
    </style>
    <body>
        <img class="logo" src="img/clinic.jpg" />
        <h2>CliniConnect</h2>
        <h2>NORSU-G Health Hub</h2>
        <form method="post" action="serverregister.php">
            <div class="form">
            <div class="up">
            REGISTER
            </div>
            <div class="down">
           

            <?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } 
              
              if (isset($_GET['name'])) {
              	$name = $_GET['name'];
              }else $name = '';

              if (isset($_GET['idnumber'])) {
              	$idnumber = $_GET['idnumber'];
              }else $idnumber = '';
			?>

                <div class="label">
                <label>Student ID Number:</label>
                </div>
                <input class="input" placeholder="Type here..."  value="<?=$idnumber?>" name="idnumber" type="text" />
                <div class="label">
                <label>Full Name:</label>
            </div>
                <input class="input" placeholder="Type here..." type="text"name="name" value="<?=$name?>" />
                <div class="label">
                <button class="btn" type="submit">Submit</button>
                <p>Have an account? <a href="login.php">Login</a></p>
            </div>
            </div>
        </form>
    </body>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>