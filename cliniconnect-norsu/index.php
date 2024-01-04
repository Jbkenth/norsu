<!DOCTYPE html>
<html>
    <head>
        <title>CliniConnect: NORSU-G Health Hub</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <style>
        *{
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        body{
            padding: 10px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            background: lavender;
        }
        .logo{
            width: 120px;
            height: 120px;
            border: 5px solid #fff;
            border-radius: 100%;
        }
        hr{
            margin-top:10px;
            border: 1px solid #0080FE;
        }
        .p{
            margin-top: 10px;
            font-size: larger;
            font-style: italic;
        }
        .btn{
            margin-top: 80px;
        }
        button{
            width: 290px;
            text-decoration: none;
            background-color: #0080FE;
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            font-weight: bold;
            border: none;
            font-size: 15px;
        }
        button:hover{
            background-color: darkblue;
            color: #0080FE;
            font-weight: bold;
            transition: 0.1s;
        }
        .st{
            margin-top: 100px;
            font-size: small;
            padding: 20px;
        }
    </style>
    <body>
        <img class="logo" src="img/clinic.jpg" />
        <h2>CliniConnect</h2>
        <h2>NORSU-G Health Hub</h2>
        <hr>
        <p class="p">CliniConnect: Streamlining health resources for a 
            seamless campus healthcare experience.
        </p>
        <div class="btn">
            <form action="login.php"><label class="label"><button>Login</button></label><br>
            <label class="st">Have an account?</label><br><br></form>
           <form action="register.php"><label class="label"><button>Register</button></label><br>
           <label class="st">Don't have an account?</label></form>
        </div>
    </body>
</html>