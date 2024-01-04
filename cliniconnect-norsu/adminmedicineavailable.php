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
<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM medication");
?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css" />
<title>Inventory</title>
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
  left: 0;
  width: auto;
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
    margin-left: 5px;
    margin-left: auto;
}
.upname{
    margin-top: -50px;
}
.logoup{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    margin-top: -40px;
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
.table{
    margin-left: auto;
    margin-right: auto;
        margin-bottom: 60px;
}
table{ 
  
    color: #FFFF;  
}  
th{  
    background-color: #008ECC;  
    color: #fff;
    padding: 5px 5px;
    font-size:13px; 
    width: 100px;
    border-radius: 5px 5px 0 0;
}  
  
td{  
    color: #000; 
    background: #fff;
    font-size:13px;
    width: 10px;
    height: auto;
    padding: 5px 5px;
    border-radius: 0 0 5px 5px;
    text-align: center;
}  
hr{
  margin-top: 5px;
}
.stock{
  border: none;
  width: 50px;
}
.logo{
            width: 30px;
            height: 30px;
            border: 5px solid #fff;
            border-radius: 100%;
        }.norsu{
            font-size: 17px;
            color: #FF007F;
            font-weight:bold;
        }
        .norsu2{
            font-size: 17px;
            color: darkblue;
            font-weight:bold;
        }

.logout{
  margin-left: 5px;
  color: #fff;
}
select {
  appearance: none;
  background-color: #003152;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 200px;;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
  outline: none;
  font-family: 'Poppins', sans-serif;
  color: #fff;
  text-align:center;
}
option{
  background: #003152;
  color: white;
  left:0;
}
.select{
  text-align: center;
}
.form{
  padding: 10px 10px;
  width: 500px;
  
}
.up{
  margin-top: 5px;
  text-align: center;
  padding: 5px 5px;
  font-weight: bold;
  font-family: 'Poppins',sans-serif;
  background: #008ECC;
  color: #fff;
  font-size: 20px;
  border-radius: 10px 10px 0 0;
}
.down{
  padding: 10px;
  border-radius: 0 0 10px 10px;
  border: 1px solid #008ECC;
  background: #fff;
}
.down select{
  background: none;
  border-bottom: 1px solid #003152;
  width: 125px;
  color: #003152;
}
textarea{
  height: 50px;
  resize: none;
  width: 300px;
}
.qis{
border-top:none;
border-bottom: 1px solid #003152;
border-left: none;
border-right: none;
width: 90px;
text-align: center;
color: #003152;
font-size: 15px;
}
        .qiss{

border-top:none;

border-bottom: 1px solid #003152;

border-left: none;

border-right: none;

width: 200px;

text-align: center;

color: #003152;

font-size: 15px;

}
.av{
  margin-left: 40px;
}
.send{
  width: 100px;
  padding: 5px 5px;
  text-align: center;
  font-weight: bold;
  font-family: 'Poppins',sans-serif;
  border: none;
  border-radius: 5px;
  background: #008ECC;
  color: #fff;
}
.ref{
  background:#008ECC;
  color: #fff;
  border-radius: 5px;
  padding: 5px;
  font-weight: bold;
}
.inp{
  font-family: 'Poppins', sans-serif;
  width: 50px;
  background: none;
  border: none;
  text-align: center;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <div class="upname">
  <img class="img" src="img/clinic.jpg" />
  <p class="name"><?php echo $adminname1;?></p>
  <p class="idnumber">Admin</p>
</div>
  <hr>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="select">
  <select onchange="k()" id="s">
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
    <nav style="color:#001352;">
  <span style="font-size:30px;" onclick="openNav()">&#9776;</span>
  <label class="norsu">CliniConnect:</label>
  <label class="norsu2">NORSU-G Health</label>
    </nav>
    <form method="post" action="">
    <div class="form">

    <?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "4402028_cliniconnect";
$con = mysqli_connect($hostName, $userName, $password, $databaseName);

if(isset($_POST['update'])){

$id = $_POST['id'];
$stock = $_POST['stock'];
$nstock = $_POST['nstock'];

$query = "UPDATE medication SET `stock`='".$stock."', `nstock`='".$nstock."' WHERE id = $id";

$resultt = mysqli_query($con, $query);

if($resultt){
    echo "Well Done";
}else{
    echo "Failed";
}

}
?>
<?php
$db = mysqli_connect('localhost', 'root', '', '4402028_cliniconnect');

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='1'");
$row=mysqli_fetch_array($ses_sql);
$a=$row['id'];
$b=$row['name'];
$c=$row['dossage'];
$d=$row['stock'];
$e=$row['description'];
$f=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='2'");
$row=mysqli_fetch_array($ses_sql);
$a2=$row['id'];
$b2=$row['name'];
$c2=$row['dossage'];
$d2=$row['stock'];
$e2=$row['description'];
            $f2=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='3'");
$row=mysqli_fetch_array($ses_sql);
$a3=$row['id'];
$b3=$row['name'];
$c3=$row['dossage'];
$d3=$row['stock'];
$e3=$row['description'];
       
$f3=$row['nstock'];
            
$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock,  description from medication where id='4'");
$row=mysqli_fetch_array($ses_sql);
$a4=$row['id'];
$b4=$row['name'];
$c4=$row['dossage'];
$d4=$row['stock'];
$e4=$row['description'];
            $f4=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='5'");
$row=mysqli_fetch_array($ses_sql);
$a5=$row['id'];
$b5=$row['name'];
$c5=$row['dossage'];
$d5=$row['stock'];
$e5=$row['description'];
            $f5=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='6'");
$row=mysqli_fetch_array($ses_sql);
$a6=$row['id'];
$b6=$row['name'];
$c6=$row['dossage'];
$d6=$row['stock'];
$e6=$row['description'];
            $f6=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='7'");
$row=mysqli_fetch_array($ses_sql);
$a7=$row['id'];
$b7=$row['name'];
$c7=$row['dossage'];
$d7=$row['stock'];
$e7=$row['description'];
            $f7=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='8'");
$row=mysqli_fetch_array($ses_sql);
$a8=$row['id'];
$b8=$row['name'];
$c8=$row['dossage'];
$d8=$row['stock'];
$e8=$row['description'];
            $f8=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='9'");
$row=mysqli_fetch_array($ses_sql);
$a9=$row['id'];
$b9=$row['name'];
$c9=$row['dossage'];
$d9=$row['stock'];
$e9=$row['description'];
            $f9=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='10'");
$row=mysqli_fetch_array($ses_sql);
$a10=$row['id'];
$b10=$row['name'];
$c10=$row['dossage'];
$d10=$row['stock'];
$e10=$row['description'];
            $f10=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='11'");
$row=mysqli_fetch_array($ses_sql);
$a11=$row['id'];
$b11=$row['name'];
$c11=$row['dossage'];
$d11=$row['stock'];
$e11=$row['description'];
            $f11=$row['nstock'];
            
$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='12'");
$row=mysqli_fetch_array($ses_sql);
$a12=$row['id'];
$b12=$row['name'];
$c12=$row['dossage'];
$d12=$row['stock'];
$e12=$row['description'];
            $f12=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='13'");
$row=mysqli_fetch_array($ses_sql);
$a13=$row['id'];
$b13=$row['name'];
$c13=$row['dossage'];
$d13=$row['stock'];
$e13=$row['description'];
            $f13=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='14'");
$row=mysqli_fetch_array($ses_sql);
$a14=$row['id'];
$b14=$row['name'];
$c14=$row['dossage'];
$d14=$row['stock'];
$e14=$row['description'];
            $f14=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='15'");
$row=mysqli_fetch_array($ses_sql);
$a15=$row['id'];
$b15=$row['name'];
$c15=$row['dossage'];
$d15=$row['stock'];
$e15=$row['description'];
            $f15=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='16'");
$row=mysqli_fetch_array($ses_sql);
$a16=$row['id'];
$b16=$row['name'];
$c16=$row['dossage'];
$d16=$row['stock'];
$e16=$row['description'];
            $f16=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='17'");
$row=mysqli_fetch_array($ses_sql);
$a17=$row['id'];
$b17=$row['name'];
$c17=$row['dossage'];
$d17=$row['stock'];
$e17=$row['description'];
            $f17=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock,nstock,  description from medication where id='18'");
$row=mysqli_fetch_array($ses_sql);
$a18=$row['id'];
$b18=$row['name'];
$c18=$row['dossage'];
$d18=$row['stock'];
$e18=$row['description'];
            $f18=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='19'");
$row=mysqli_fetch_array($ses_sql);
$a19=$row['id'];
$b19=$row['name'];
$c19=$row['dossage'];
$d19=$row['stock'];
$e19=$row['description'];
            $f19=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock,nstock,  description from medication where id='20'");
$row=mysqli_fetch_array($ses_sql);
$a20=$row['id'];
$b20=$row['name'];
$c20=$row['dossage'];
$d20=$row['stock'];
$e20=$row['description'];
            $f20=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='21'");
$row=mysqli_fetch_array($ses_sql);
$a21=$row['id'];
$b21=$row['name'];
$c21=$row['dossage'];
$d21=$row['stock'];
$e21=$row['description'];
            $f21=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='22'");
$row=mysqli_fetch_array($ses_sql);
$a22=$row['id'];
$b22=$row['name'];
$c22=$row['dossage'];
$d22=$row['stock'];
$e22=$row['description'];
            $f22=$row['nstock'];

$ses_sql=mysqli_query($db,"select id, name, dossage, stock, nstock, description from medication where id='23'");
$row=mysqli_fetch_array($ses_sql);
$a23=$row['id'];
$b23=$row['name'];
$c23=$row['dossage'];
$d23=$row['stock'];
$e23=$row['description'];
            $f23=$row['nstock'];

 ?>
<br>


<div class="up">
  Inventory
</div>
<div class="down">
  <label>Stock No.:</label>
  <select name="id" required>
  <option disabled selected hidden></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
  </select>
  <br><br>
  <label>Quantity in Stock:</label>
  <input class="qis"type="number" name="stock" required/><br><br>
        <label>Name in Stock:</label>

  <input class="qiss"type="text" name="nstock" /><br><br>

  
  <input class="send" type="submit" name="update" value="Submit" />
</div>
</div>
    </div>
        <footer class="footer">
            <p>INVENTORY</p>
        </footer>
        </div>
</div>
</form>

  <div class="table">
  <table>
	<tr>
        <th>Stock No.</th>
    <th>Medication Name</th>
    <th>Dosage</th>
    <th>Availability</th>
    <th>Quantity in Stock</th>
    <th>Description</th>
	</tr>
	<tr>
    <td id="aa"><?php echo $a; ?></td>
    <td id="bb"><?php echo $b; ?></td>
    <td id="cc"><?php echo $c; ?></td>
    <td><span id="a"></span></td>
    <td id="dd"><input class="inp" type="text" id="b"value="<?php echo $d; ?>" readonly/><?php echo $f; ?></td>
    <td><?php echo $e; ?></td>
    </tr>
    <tr>
    <td id="aa2"><?php echo $a2; ?></td>
    <td id="bb2"><?php echo $b2; ?></td>
    <td id="cc2"><?php echo $c2; ?></td>
    <td><span id="a2"></span></td>
    <td id="dd2"><input class="inp" type="text" id="b2"value="<?php echo $d2; ?>" readonly/><?php echo $f2; ?></td>
    <td><?php echo $e2; ?></td>
    </tr>
    <tr>
    <td id="aa3"><?php echo $a3; ?></td>
    <td id="bb3"><?php echo $b3; ?></td>
    <td id="cc3"><?php echo $c3; ?></td>
    <td><span id="a3"></span></td>
    <td id="dd3"><input class="inp" type="text" id="b3"value="<?php echo $d3; ?>" readonly/><?php echo $f3; ?></td>
    <td><?php echo $e3; ?></td>
    </tr>
    <tr>
    <td id="aa4"><?php echo $a4; ?></td>
    <td id="bb4"><?php echo $b4; ?></td>
    <td id="cc4"><?php echo $c4; ?></td>
    <td><span id="a4"></span></td>
    <td id="dd4"><input class="inp" type="text" id="b4"value="<?php echo $d4; ?>" readonly/><?php echo $f4; ?></td>
    <td><?php echo $e4; ?></td>
    </tr>
    <tr>
    <td id="aa5"><?php echo $a5; ?></td>
    <td id="bb5"><?php echo $b5; ?></td>
    <td id="cc5"><?php echo $c5; ?></td>
    <td><span id="a5"></span></td>
    <td id="dd5"><input class="inp" type="text" id="b5"value="<?php echo $d5; ?>" readonly/><?php echo $f5; ?></td>
    <td><?php echo $e5; ?></td>
    </tr>
    <tr>
    <td id="aa6"><?php echo $a6; ?></td>
    <td id="bb6"><?php echo $b6; ?></td>
    <td id="cc6"><?php echo $c6; ?></td>
    <td><span id="a6"></span></td>
    <td id="dd6"><input class="inp" type="text" id="b6"value="<?php echo $d6; ?>" readonly/><?php echo $f6; ?></td>
    <td><?php echo $e6; ?></td>
    </tr>
    <tr>
    <td id="aa7"><?php echo $a7; ?></td>
    <td id="bb7"><?php echo $b7; ?></td>
    <td id="cc7"><?php echo $c7; ?></td>
    <td><span id="a7"></span></td>
    <td id="dd7"><input class="inp" type="text" id="b7"value="<?php echo $d7; ?>" readonly/><?php echo $f7; ?></td>
    <td><?php echo $e7; ?></td>
    </tr>
    <tr>
    <td id="aa8"><?php echo $a8; ?></td>
    <td id="bb8"><?php echo $b8; ?></td>
    <td id="cc8"><?php echo $c8; ?></td>
    <td><span id="a8"></span></td>
    <td id="dd8"><input class="inp" type="text" id="b8"value="<?php echo $d8; ?>" readonly/><?php echo $f8; ?></td>
    <td><?php echo $e8; ?></td>
    </tr>
    <tr>
    <td id="aa9"><?php echo $a9; ?></td>
    <td id="bb9"><?php echo $b9; ?></td>
    <td id="cc9"><?php echo $c9; ?></td>
    <td><span id="a9"></span></td>
    <td id="dd9"><input class="inp" type="text" id="b9"value="<?php echo $d9; ?>" readonly/><?php echo $f9; ?></td>
    <td><?php echo $e9; ?></td>
    </tr>
    <tr>
    <td id="aa10"><?php echo $a10; ?></td>
    <td id="bb10"><?php echo $b10; ?></td>
    <td id="cc10"><?php echo $c10; ?></td>
    <td><span id="a10"></span></td>
    <td id="dd10"><input class="inp" type="text" id="b10"value="<?php echo $d10; ?>" readonly/><?php echo $f10; ?></td>
    <td><?php echo $e10; ?></td>
    </tr>
    <tr>
    <td id="aa11"><?php echo $a11; ?></td>
    <td id="bb11"><?php echo $b11; ?></td>
    <td id="cc11"><?php echo $c11; ?></td>
    <td><span id="a11"></span></td>
    <td id="dd11"><input class="inp" type="text" id="b11"value="<?php echo $d11; ?>" readonly/><?php echo $f11; ?></td>
    <td><?php echo $e11; ?></td>
    </tr>
    <tr>
    <td id="aa12"><?php echo $a12; ?></td>
    <td id="bb12"><?php echo $b12; ?></td>
    <td id="cc12"><?php echo $c12; ?></td>
    <td><span id="a12"></span></td>
    <td id="dd12"><input class="inp" type="text" id="b12"value="<?php echo $d12; ?>" readonly/><?php echo $f12; ?></td>
    <td><?php echo $e12; ?></td>
    </tr>
    <tr>
    <td id="aa13"><?php echo $a13; ?></td>
    <td id="bb13"><?php echo $b13; ?></td>
    <td id="cc13"><?php echo $c13; ?></td>
    <td><span id="a13"></span></td>
    <td id="dd13"><input class="inp" type="text" id="b13"value="<?php echo $d13; ?>" readonly/><?php echo $f13; ?></td>
    <td><?php echo $e13; ?></td>
    </tr>
    <tr>
    <td id="aa14"><?php echo $a14; ?></td>
    <td id="bb14"><?php echo $b14; ?></td>
    <td id="cc14"><?php echo $c14; ?></td>
    <td><span id="a14"></span></td>
    <td id="dd14"><input class="inp" type="text" id="b14" value="<?php echo $d14; ?>" readonly/><?php echo $f14; ?></td>
    <td><?php echo $e14; ?></td>
    </tr>
    <tr>
    <td id="aa15"><?php echo $a15; ?></td>
    <td id="bb15"><?php echo $b15; ?></td>
    <td id="cc15"><?php echo $c15; ?></td>
    <td><span id="a15"></span></td>
    <td id="dd15"><input class="inp" type="text" id="b15"value="<?php echo $d15; ?>" readonly/><?php echo $f15; ?></td>
    <td><?php echo $e15; ?></td>
    </tr>
    <tr>
    <td id="aa16"><?php echo $a16; ?></td>
    <td id="bb16"><?php echo $b16; ?></td>
    <td id="cc16"><?php echo $c16; ?></td>
    <td><span id="a16"></span></td>
    <td id="dd16"><input class="inp" type="text" id="b16"value="<?php echo $d16; ?>" readonly/><?php echo $f16; ?></td>
    <td><?php echo $e16; ?></td>
    </tr>
    <tr>
    <td id="aa17"><?php echo $a17; ?></td>
    <td id="bb17"><?php echo $b17; ?></td>
    <td id="cc17"><?php echo $c17; ?></td>
    <td><span id="a17"></span></td>
    <td id="dd17"><input class="inp" type="text" id="b17"value="<?php echo $d17; ?>" readonly/><?php echo $f17; ?></td>
    <td><?php echo $e17; ?></td>
    </tr>
    <tr>
    <td id="aa18"><?php echo $a18; ?></td>
    <td id="bb18"><?php echo $b18; ?></td>
    <td id="cc18"><?php echo $c18; ?></td>
    <td><span id="a18"></span></td>
    <td id="dd18"><input class="inp" type="text" id="b18"value="<?php echo $d18; ?>" readonly/><?php echo $f18; ?></td>
    <td><?php echo $e18; ?></td>
    </tr>
    <tr>
    <td id="aa19"><?php echo $a19; ?></td>
    <td id="bb19"><?php echo $b19; ?></td>
    <td id="cc19"><?php echo $c19; ?></td>
    <td><span id="a19"></span></td>
    <td id="dd19"><input class="inp" type="text" id="b19"value="<?php echo $d19; ?>" readonly/><?php echo $f19; ?></td>
    <td><?php echo $e19; ?></td>
    </tr>
    <tr>
    <td id="aa20"><?php echo $a20; ?></td>
    <td id="bb20"><?php echo $b20; ?></td>
    <td id="cc20"><?php echo $c20; ?></td>
    <td><span id="a20"></span></td>
    <td id="dd20"><input class="inp" type="text" id="b20"value="<?php echo $d20; ?>" readonly/><?php echo $f20; ?></td>
    <td><?php echo $e20; ?></td>
    </tr>
    <tr>
    <td id="aa21"><?php echo $a21; ?></td>
    <td id="bb21"><?php echo $b21; ?></td>
    <td id="cc21"><?php echo $c21; ?></td>
    <td><span id="a21"></span></td>
    <td id="dd21"><input class="inp" type="text" id="b21"value="<?php echo $d21; ?>" readonly/><?php echo $f21; ?></td>
    <td><?php echo $e21; ?></td>
    </tr>
    <tr>
    <td id="aa22"><?php echo $a22; ?></td>
    <td id="bb22"><?php echo $b22; ?></td>
    <td id="cc22"><?php echo $c22; ?></td>
    <td><span id="a22"></span></td>
    <td id="dd22"><input class="inp" type="text" id="b22"value="<?php echo $d22; ?>" readonly/><?php echo $f22; ?></td>
    <td><?php echo $e22; ?></td>
    </tr>
    <tr>
    <td id="aa23"><?php echo $a23; ?></td>
    <td id="bb23"><?php echo $b23; ?></td>
    <td id="cc23"><?php echo $c23; ?></td>
    <td><span id="a23"></span></td>
    <td id="dd23"><input class="inp" type="text" id="b23"value="<?php echo $d23; ?>" readonly/><?php echo $f23; ?></td>
    <td><?php echo $e23; ?></td>
    </tr>
</table>
<br>

<script>
 let a = document.getElementById("a");
 let b = document.getElementById("b");
 let c = document.getElementById("aa");
 let d = document.getElementById("bb");
 let e = document.getElementById("cc");
 let f = document.getElementById("dd");
if(b.value != 0){
  a.style.color = "darkgreen";
  a.style.fontWeight = "bold";
  a.innerHTML = "Available";
  b.style.color = "#000";
  c.style.color = "#000";
  d.style.color = "#000";
  e.style.color = "#000";
  f.style.color = "#000";
}else{
  a.style.color = "red";
  a.style.fontWeight = "bold";
  a.innerHTML = "Not Available";
  b.style.color = "red";
  c.style.color = "red";
  d.style.color = "red";
  e.style.color = "red";
  f.style.color = "red";
}

let a2 = document.getElementById("a2");
 let b2 = document.getElementById("b2");
 let c2 = document.getElementById("aa2");
 let d2 = document.getElementById("bb2");
 let e2 = document.getElementById("cc2");
 let f2 = document.getElementById("dd2");
if(b2.value != 0){
  a2.style.color = "darkgreen";
  a2.style.fontWeight = "bold";
  a2.innerHTML = "Available";
  b2.style.color = "#000";
  c2.style.color = "#000";
  d2.style.color = "#000";
  e2.style.color = "#000";
  f2.style.color = "#000";
}else{
  a2.style.color = "red";
  a2.style.fontWeight = "bold";
  a2.innerHTML = "Not Available";
  b2.style.color = "red";
  c2.style.color = "red";
  d2.style.color = "red";
  e2.style.color = "red";
  f2.style.color = "red";
}

let a3 = document.getElementById("a3");
 let b3 = document.getElementById("b3");
 let c3 = document.getElementById("aa3");
 let d3 = document.getElementById("bb3");
 let e3 = document.getElementById("cc3");
 let f3 = document.getElementById("dd3");
if(b3.value != 0){
  a3.style.color = "darkgreen";
  a3.style.fontWeight = "bold";
  a3.innerHTML = "Available";
  b3.style.color = "#000";
  c3.style.color = "#000";
  d3.style.color = "#000";
  e3.style.color = "#000";
  f3.style.color = "#000";
}else{
  a3.style.color = "red";
  a3.style.fontWeight = "bold";
  a3.innerHTML = "Not Available";
  b3.style.color = "red";
  c3.style.color = "red";
  d3.style.color = "red";
  e3.style.color = "red";
  f3.style.color = "red";
}

let a4 = document.getElementById("a4");
 let b4 = document.getElementById("b4");
 let c4 = document.getElementById("aa4");
 let d4 = document.getElementById("bb4");
 let e4 = document.getElementById("cc4");
 let f4 = document.getElementById("dd4");
if(b4.value != 0){
  a4.style.color = "darkgreen";
  a4.style.fontWeight = "bold";
  a4.innerHTML = "Available";
  b4.style.color = "#000";
  c4.style.color = "#000";
  d4.style.color = "#000";
  e4.style.color = "#000";
  f4.style.color = "#000";
}else{
  a4.style.color = "red";
  a4.style.fontWeight = "bold";
  a4.innerHTML = "Not Available";
  b4.style.color = "red";
  c4.style.color = "red";
  d4.style.color = "red";
  e4.style.color = "red";
  f4.style.color = "red";
}

let a5 = document.getElementById("a5");
 let b5 = document.getElementById("b5");
 let c5 = document.getElementById("aa5");
 let d5 = document.getElementById("bb5");
 let e5 = document.getElementById("cc5");
 let f5 = document.getElementById("dd5");
if(b5.value != 0){
  a5.style.color = "darkgreen";
  a5.style.fontWeight = "bold";
  a5.innerHTML = "Available";
  b5.style.color = "#000";
  c5.style.color = "#000";
  d5.style.color = "#000";
  e5.style.color = "#000";
  f5.style.color = "#000";
}else{
  a5.style.color = "red";
  a5.style.fontWeight = "bold";
  a5.innerHTML = "Not Available";
  b5.style.color = "red";
  c5.style.color = "red";
  d5.style.color = "red";
  e5.style.color = "red";
  f5.style.color = "red";
}

let a6 = document.getElementById("a6");
 let b6 = document.getElementById("b6");
 let c6 = document.getElementById("aa6");
 let d6 = document.getElementById("bb6");
 let e6 = document.getElementById("cc6");
 let f6 = document.getElementById("dd6");
if(b6.value != 0){
  a6.style.color = "darkgreen";
  a6.style.fontWeight = "bold";
  a6.innerHTML = "Available";
  b6.style.color = "#000";
  c6.style.color = "#000";
  d6.style.color = "#000";
  e6.style.color = "#000";
  f6.style.color = "#000";
}else{
  a6.style.color = "red";
  a6.style.fontWeight = "bold";
  a6.innerHTML = "Not Available";
  b6.style.color = "red";
  c6.style.color = "red";
  d6.style.color = "red";
  e6.style.color = "red";
  f6.style.color = "red";
}

let a7 = document.getElementById("a7");
 let b7 = document.getElementById("b7");
 let c7 = document.getElementById("aa7");
 let d7 = document.getElementById("bb7");
 let e7 = document.getElementById("cc7");
 let f7 = document.getElementById("dd7");
if(b7.value != 0){
  a7.style.color = "darkgreen";
  a7.style.fontWeight = "bold";
  a7.innerHTML = "Available";
  b7.style.color = "#000";
  c7.style.color = "#000";
  d7.style.color = "#000";
  e7.style.color = "#000";
  f7.style.color = "#000";
}else{
  a7.style.color = "red";
  a7.style.fontWeight = "bold";
  a7.innerHTML = "Not Available";
  b7.style.color = "red";
  c7.style.color = "red";
  d7.style.color = "red";
  e7.style.color = "red";
  f7.style.color = "red";
}

let a8 = document.getElementById("a8");
 let b8 = document.getElementById("b8");
 let c8 = document.getElementById("aa8");
 let d8 = document.getElementById("bb8");
 let e8 = document.getElementById("cc8");
 let f8 = document.getElementById("dd8");
if(b8.value != 0){
  a8.style.color = "darkgreen";
  a8.style.fontWeight = "bold";
  a8.innerHTML = "Available";
  b8.style.color = "#000";
  c8.style.color = "#000";
  d8.style.color = "#000";
  e8.style.color = "#000";
  f8.style.color = "#000";
}else{
  a8.style.color = "red";
  a8.style.fontWeight = "bold";
  a8.innerHTML = "Not Available";
  b8.style.color = "red";
  c8.style.color = "red";
  d8.style.color = "red";
  e8.style.color = "red";
  f8.style.color = "red";
}

let a9 = document.getElementById("a9");
 let b9 = document.getElementById("b9");
 let c9 = document.getElementById("aa9");
 let d9 = document.getElementById("bb9");
 let e9 = document.getElementById("cc9");
 let f9 = document.getElementById("dd9");
if(b9.value != 0){
  a9.style.color = "darkgreen";
  a9.style.fontWeight = "bold";
  a9.innerHTML = "Available";
  b9.style.color = "#000";
  c9.style.color = "#000";
  d9.style.color = "#000";
  e9.style.color = "#000";
  f9.style.color = "#000";
}else{
  a9.style.color = "red";
  a9.style.fontWeight = "bold";
  a9.innerHTML = "Not Available";
  b9.style.color = "red";
  c9.style.color = "red";
  d9.style.color = "red";
  e9.style.color = "red";
  f9.style.color = "red";
}

let a10 = document.getElementById("a10");
 let b10 = document.getElementById("b10");
 let c10 = document.getElementById("aa10");
 let d10 = document.getElementById("bb10");
 let e10 = document.getElementById("cc10");
 let f10 = document.getElementById("dd10");
if(b10.value != 0){
  a10.style.color = "darkgreen";
  a10.style.fontWeight = "bold";
  a10.innerHTML = "Available";
  b10.style.color = "#000";
  c10.style.color = "#000";
  d10.style.color = "#000";
  e10.style.color = "#000";
  f10.style.color = "#000";
}else{
  a10.style.color = "red";
  a10.style.fontWeight = "bold";
  a10.innerHTML = "Not Available";
  b10.style.color = "red";
  c10.style.color = "red";
  d10.style.color = "red";
  e10.style.color = "red";
  f10.style.color = "red";
}

let a11 = document.getElementById("a11");
 let b11 = document.getElementById("b11");
 let c11 = document.getElementById("aa11");
 let d11 = document.getElementById("bb11");
 let e11 = document.getElementById("cc11");
 let f11 = document.getElementById("dd11");
if(b11.value != 0){
  a11.style.color = "darkgreen";
  a11.style.fontWeight = "bold";
  a11.innerHTML = "Available";
  b11.style.color = "#000";
  c11.style.color = "#000";
  d11.style.color = "#000";
  e11.style.color = "#000";
  f11.style.color = "#000";
}else{
  a11.style.color = "red";
  a11.style.fontWeight = "bold";
  a11.innerHTML = "Not Available";
  b11.style.color = "red";
  c11.style.color = "red";
  d11.style.color = "red";
  e11.style.color = "red";
  f11.style.color = "red";
}

let a12 = document.getElementById("a12");
 let b12 = document.getElementById("b12");
 let c12 = document.getElementById("aa12");
 let d12 = document.getElementById("bb12");
 let e12 = document.getElementById("cc12");
 let f12 = document.getElementById("dd12");
if(b12.value != 0){
  a12.style.color = "darkgreen";
  a12.style.fontWeight = "bold";
  a12.innerHTML = "Available";
  b12.style.color = "#000";
  c12.style.color = "#000";
  d12.style.color = "#000";
  e12.style.color = "#000";
  f12.style.color = "#000";
}else{
  a12.style.color = "red";
  a12.style.fontWeight = "bold";
  a12.innerHTML = "Not Available";
  b12.style.color = "red";
  c12.style.color = "red";
  d12.style.color = "red";
  e12.style.color = "red";
  f12.style.color = "red";
}

let a13 = document.getElementById("a13");
 let b13 = document.getElementById("b13");
 let c13 = document.getElementById("aa13");
 let d13 = document.getElementById("bb13");
 let e13 = document.getElementById("cc13");
 let f13 = document.getElementById("dd13");
if(b13.value != 0){
  a13.style.color = "darkgreen";
  a13.style.fontWeight = "bold";
  a13.innerHTML = "Available";
  b13.style.color = "#000";
  c13.style.color = "#000";
  d13.style.color = "#000";
  e13.style.color = "#000";
  f13.style.color = "#000";
}else{
  a13.style.color = "red";
  a13.style.fontWeight = "bold";
  a13.innerHTML = "Not Available";
  b13.style.color = "red";
  c13.style.color = "red";
  d13.style.color = "red";
  e13.style.color = "red";
  f13.style.color = "red";
}


let a14 = document.getElementById("a14");
 let b14 = document.getElementById("b14");
 let c14 = document.getElementById("aa14");
 let d14 = document.getElementById("bb14");
 let e14 = document.getElementById("cc14");
 let f14 = document.getElementById("dd14");
if(b14.value != 0){
  a14.style.color = "darkgreen";
  a14.style.fontWeight = "bold";
  a14.innerHTML = "Available";
  b14.style.color = "#000";
  c14.style.color = "#000";
  d14.style.color = "#000";
  e14.style.color = "#000";
  f14.style.color = "#000";
}else{
  a14.style.color = "red";
  a14.style.fontWeight = "bold";
  a14.innerHTML = "Not Available";
  b14.style.color = "red";
  c14.style.color = "red";
  d14.style.color = "red";
  e14.style.color = "red";
  f14.style.color = "red";
}

let a15 = document.getElementById("a15");
 let b15 = document.getElementById("b15");
 let c15 = document.getElementById("aa15");
 let d15 = document.getElementById("bb15");
 let e15 = document.getElementById("cc15");
 let f15 = document.getElementById("dd15");
if(b15.value != 0){
  a15.style.color = "darkgreen";
  a15.style.fontWeight = "bold";
  a15.innerHTML = "Available";
  b15.style.color = "#000";
  c15.style.color = "#000";
  d15.style.color = "#000";
  e15.style.color = "#000";
  f15.style.color = "#000";
}else{
  a15.style.color = "red";
  a15.style.fontWeight = "bold";
  a15.innerHTML = "Not Available";
  b15.style.color = "red";
  c15.style.color = "red";
  d15.style.color = "red";
  e15.style.color = "red";
  f15.style.color = "red";
}

let a16 = document.getElementById("a16");
 let b16 = document.getElementById("b16");
 let c16 = document.getElementById("aa16");
 let d16 = document.getElementById("bb16");
 let e16 = document.getElementById("cc16");
 let f16 = document.getElementById("dd16");
if(b16.value != 0){
  a16.style.color = "darkgreen";
  a16.style.fontWeight = "bold";
  a16.innerHTML = "Available";
  b16.style.color = "#000";
  c16.style.color = "#000";
  d16.style.color = "#000";
  e16.style.color = "#000";
  f16.style.color = "#000";
}else{
  a16.style.color = "red";
  a16.style.fontWeight = "bold";
  a16.innerHTML = "Not Available";
  b16.style.color = "red";
  c16.style.color = "red";
  d16.style.color = "red";
  e16.style.color = "red";
  f16.style.color = "red";
}

let a17 = document.getElementById("a17");
 let b17 = document.getElementById("b17");
 let c17 = document.getElementById("aa17");
 let d17 = document.getElementById("bb17");
 let e17 = document.getElementById("cc17");
 let f17 = document.getElementById("dd17");
if(b17.value != 0){
  a17.style.color = "darkgreen";
  a17.style.fontWeight = "bold";
  a17.innerHTML = "Available";
  b17.style.color = "#000";
  c17.style.color = "#000";
  d17.style.color = "#000";
  e17.style.color = "#000";
  f17.style.color = "#000";
}else{
  a17.style.color = "red";
  a17.style.fontWeight = "bold";
  a17.innerHTML = "Not Available";
  b17.style.color = "red";
  c17.style.color = "red";
  d17.style.color = "red";
  e17.style.color = "red";
  f17.style.color = "red";
}

let a18 = document.getElementById("a18");
 let b18 = document.getElementById("b18");
 let c18 = document.getElementById("aa18");
 let d18 = document.getElementById("bb18");
 let e18 = document.getElementById("cc18");
 let f18 = document.getElementById("dd18");
if(b18.value != 0){
  a18.style.color = "darkgreen";
  a18.style.fontWeight = "bold";
  a18.innerHTML = "Available";
  b18.style.color = "#000";
  c18.style.color = "#000";
  d18.style.color = "#000";
  e18.style.color = "#000";
  f18.style.color = "#000";
}else{
  a18.style.color = "red";
  a18.style.fontWeight = "bold";
  a18.innerHTML = "Not Available";
  b18.style.color = "red";
  c18.style.color = "red";
  d18.style.color = "red";
  e18.style.color = "red";
  f18.style.color = "red";
}

let a19 = document.getElementById("a19");
 let b19 = document.getElementById("b19");
 let c19 = document.getElementById("aa19");
 let d19 = document.getElementById("bb19");
 let e19 = document.getElementById("cc19");
 let f19 = document.getElementById("dd19");
if(b19.value != 0){
  a19.style.color = "darkgreen";
  a19.style.fontWeight = "bold";
  a19.innerHTML = "Available";
  b19.style.color = "#000";
  c19.style.color = "#000";
  d19.style.color = "#000";
  e19.style.color = "#000";
  f19.style.color = "#000";
}else{
  a19.style.color = "red";
  a19.style.fontWeight = "bold";
  a19.innerHTML = "Not Available";
  b19.style.color = "red";
  c19.style.color = "red";
  d19.style.color = "red";
  e19.style.color = "red";
  f19.style.color = "red";
}

let a20 = document.getElementById("a20");
 let b20 = document.getElementById("b20");
 let c20 = document.getElementById("aa20");
 let d20 = document.getElementById("bb20");
 let e20 = document.getElementById("cc20");
 let f20 = document.getElementById("dd20");
if(b20.value != 0){
  a20.style.color = "darkgreen";
  a20.style.fontWeight = "bold";
  a20.innerHTML = "Available";
  b20.style.color = "#000";
  c20.style.color = "#000";
  d20.style.color = "#000";
  e20.style.color = "#000";
  f20.style.color = "#000";
}else{
  a20.style.color = "red";
  a20.style.fontWeight = "bold";
  a20.innerHTML = "Not Available";
  b20.style.color = "red";
  c20.style.color = "red";
  d20.style.color = "red";
  e20.style.color = "red";
  f20.style.color = "red";
}

let a21 = document.getElementById("a21");
 let b21 = document.getElementById("b21");
 let c21 = document.getElementById("aa21");
 let d21 = document.getElementById("bb21");
 let e21 = document.getElementById("cc21");
 let f21 = document.getElementById("dd21");
if(b21.value != 0){
  a21.style.color = "darkgreen";
  a21.style.fontWeight = "bold";
  a21.innerHTML = "Available";
  b21.style.color = "#000";
  c21.style.color = "#000";
  d21.style.color = "#000";
  e21.style.color = "#000";
  f21.style.color = "#000";
}else{
  a21.style.color = "red";
  a21.style.fontWeight = "bold";
  a21.innerHTML = "Not Available";
  b21.style.color = "red";
  c21.style.color = "red";
  d21.style.color = "red";
  e21.style.color = "red";
  f21.style.color = "red";
}

let a22 = document.getElementById("a22");
 let b22 = document.getElementById("b22");
 let c22 = document.getElementById("aa22");
 let d22 = document.getElementById("bb22");
 let e22 = document.getElementById("cc22");
 let f22 = document.getElementById("dd22");
if(b22.value != 0){
  a22.style.color = "darkgreen";
  a22.style.fontWeight = "bold";
  a22.innerHTML = "Available";
  b22.style.color = "#000";
  c22.style.color = "#000";
  d22.style.color = "#000";
  e22.style.color = "#000";
  f22.style.color = "#000";
}else{
  a22.style.color = "red";
  a22.style.fontWeight = "bold";
  a22.innerHTML = "Not Available";
  b22.style.color = "red";
  c22.style.color = "red";
  d22.style.color = "red";
  e22.style.color = "red";
  f22.style.color = "red";
}

let a23 = document.getElementById("a23");
 let b23 = document.getElementById("b23");
 let c23 = document.getElementById("aa23");
 let d23 = document.getElementById("bb23");
 let e23 = document.getElementById("cc23");
 let f23 = document.getElementById("dd23");
if(b23.value != 0){
  a23.style.color = "darkgreen";
  a23.style.fontWeight = "bold";
  a23.innerHTML = "Available";
  b23.style.color = "#000";
  c23.style.color = "#000";
  d23.style.color = "#000";
  e23.style.color = "#000";
  f23.style.color = "#000";
}else{
  a23.style.color = "red";
  a23.style.fontWeight = "bold";
  a23.innerHTML = "Not Available";
  b23.style.color = "red";
  c23.style.color = "red";
  d23.style.color = "red";
  e23.style.color = "red";
  f23.style.color = "red";
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
function k(){
  let a = document.getElementById("s");
  if(a.value == "ma"){
    window.location.href = "medicineavailable.php";
  }
  if(a.value == "wam"){
    window.location.href = "adminmessage.php";
  }
}
</script>
   <script src="function.js"></script>
</body>
</html> 
