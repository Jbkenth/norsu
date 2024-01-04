<?php
   
   session_start();

   
   if (!isset($_SESSION['adminpassword'])) {
      header("Location: adminlogin.php");
      exit;
   }
   $sName = "localhost";

$uName = "root";

$pass = "";

$db_name = "4402028_cliniconnect";
$db = mysqli_connect("$sName", "$uName", "$pass", "$db_name");
   $check = $_SESSION['adminpassword'];
   $ses_sql=mysqli_query($db,"select adminname from users where adminpassword='$check'");
$row=mysqli_fetch_array($ses_sql);
$adminname1=$row['adminname'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Dashboard</title>
<link rel="icon" href="img/clinic.jpg" />
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@300;400;700&display=swap");
    body {
  font-family: 'Poppins', sans-serif;
  background: lavender;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #003152;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
a{
    text-decoration: none;
}
.sidenav .a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #fff;
  display: block;
  transition: 0.1s;
  margin-top: 5px;
  width: 200px;
}

.sidenav .a:hover {
  color: pink;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: #ff0000;
}

#main {
  transition: margin-left .5s;
  margin-top: 10px;
  width: 100%;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.name{
    margin-top: -45px;
    margin-left: 45px;
    width: 150px;
    font-size: 12px;
    color: #fff;
    font-weight: bold;
}
.idnumber{
    width: 150px;
    font-size: 11px;
    margin-top: -10px;
    margin-left: 45px;
    color: lightblue;
    font-weight: bold;
}
hr{
    margin-top: -8px;
}
.img{
    width: 40px;
    height: 40px;
    border-radius: 100%;
    margin-left: 2px;
    margin-left: auto;
}
.upname{
    margin-top: -50px;
}
.logoup{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    margin-top: -10px;
}
.logo{
            width: 160px;
            height: 160px;
            border: 5px solid #fff;
            border-radius: 100%;
        }
        hr{
            margin-top:10px;
            border: 1px solid #0080FE;
        }
        h2,.pmain{
            text-align: center;
        }
        .footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 50px;
    background: #008ECC;
}
.footer p{
    text-align: center;
    color: #fff;
    font-weight: bold;
}

select {
  appearance: none;
  background-color: #003152;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 198px;;
  font-family: inherit;
  font-size: 15px;
  cursor: inherit;
  line-height: inherit;
  outline: none;
  font-family: 'Poppins', sans-serif;
  color: #fff;
  text-align:center;
  text-align: center;
}
option{
  background: #003152;
  color: white;
  left:0;
  text-align: center;
}
.select{
  text-align: center;
  
}
.logout{
  margin-left: 5px;
  color: #fff;
}
.logoup h2{
  font-size: 35px;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <div class="upname">
  <img class="img" src="img/clinic.jpg" />
  <p class="name"><?php echo $adminname1;?></p>
  <p class="idnumber"><b>Admin</b></p>
</div>
  <hr>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="select">
  <select onchange="k()" id="standard-select">
    <option disabled selected hidden>Dashboard</option>
    <option value="ma">Inventory</option>
    <option value="wam">Message</option>
  </select>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
<a class="logout" href="adminlogout.php">Log out</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer;color:#001352;" onclick="openNav()">&#9776;</span>
  <div class="logoup">
  <img class="logo" src="img/clinic.jpg" />
        <h2>CliniConnect</h2>
        <h2>NORSU-G Health Hub</h2>
        <hr>
        <p class="pmain">CliniConnect: Streamlining health resources for a 
            seamless campus healthcare experience.
        </p>
        <footer class="footer">
            <p>WELCOME</p>
        </footer>
        </div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function k(){
  let a = document.getElementById("standard-select");
  if(a.value == "ma"){
    window.location.href = "adminmedicineavailable.php";
  }
  if(a.value == "wam"){
    window.location.href = "adminmessage.php";
  }
}
</script>
   
</body>
</html> 
