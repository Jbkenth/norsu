<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "4402028_cliniconnect";
$con = mysqli_connect($hostName, $userName, $password, $databaseName);

if(isset($_POST['update'])){

$adminname = $_POST['adminname'];
$adminpassword = $_POST['adminpassword'];


$query = "UPDATE users SET `adminpassword`='$adminpassword' WHERE adminname = '$adminname'";

$resultt = mysqli_query($con, $query);
    $sm = "Password Successfully Changed!!";
    header("Location: adminlogin.php?success=$sm");
   exit;

}
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
            font-size: 20px;
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
            font-size: 15px;
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
        .as{
            font-size: 12px;
        }
    </style>
    <body>
        <img class="logo" src="img/clinic.jpg" />
        <h2>CliniConnect</h2>
        <h2>NORSU-G Health Hub</h2>
        <form method="post" action="">
            <div class="form">
            <div class="up">
            CHANGE PASSWORD
            </div>
            <div class="down">
		      <div style="text-align: center" id="up"></div>
                <div class="label">
                <label>Admin Name:</label>
                </div>
                <input class="input" placeholder="Type here..." id="nn" name="adminname" type="text" required/>
                <div class="label">
                <label>New Admin Password:</label>
                </div>
                <input class="input" placeholder="Type here..." type="password"name="adminpassword" id="ap" onkeyup="kkk()" required/>
                <div class="label">
                <label>Confirm New Admin Password:</label>
                </div>
                <input class="input" placeholder="Type here..." type="password" id="cap" onkeyup="kkk()" required/>
                <div class="as" id="as"></div>
                <div class="label">
                <input class="btn" type="submit" value="Submit" onclick="kkk()" name="update" />
                
            </div>
            </div>
        </form>
        <script>
            function kkk(){
            let a = document.getElementById("ap");
            let b = document.getElementById("cap");
            let c = document.getElementById("as");
            let d = document.getElementById("up");
            let e = document.getElementById("nn");
            if(a.value != b.value){
                c.style.color = "red";
                c.innerHTML = "password do not match!";
                event.preventDefault();
            }else if(a.value == "" || b.value == ""){
                c.style.color = "red";
                c.innerHTML = "please input password";
                event.preventDefault();
            }else{
                c.style.color = "darkgreen";
                c.innerHTML = "password matched";
            };
            if(e.value == ""){
                d.style.color = "red";
                d.innerHTML = "Admin Name is required!!";
                event.preventDefault();
            }else if(e.value == "Norsu-G Clinic Admin"){
               
            }else{
                d.style.color = "red";
                d.innerHTML = "Wrong Admin Name!!";
                event.preventDefault();
            }
        }
        </script>
    </body>
</html>