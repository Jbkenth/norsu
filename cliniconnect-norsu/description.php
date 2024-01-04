<?php
$hostName = "fdb1032.awardspace.net";
$userName = "4402028_cliniconnect";
$password = "@Jbkenthrina25";
$databaseName = "4402028_cliniconnect";
$con = mysqli_connect($hostName, $userName, $password, $databaseName);

if(isset($_POST['update'])){

$id = $_POST['id'];
$description = $_POST['description'];

$query = "UPDATE medication SET `description`='".$description."' WHERE id = $id";

$resultt = mysqli_query($con, $query);

if($resultt){
    echo '<span style="color:darkgreen;text-align:center;">Well Done</span>';
}else{
    echo "Failed";
}

}
?>
<DOCTYPE html>
    <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <title>Description</title><head>
                <style>
                     @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@300;400;700&display=swap");
    
    body {
      font-family: 'Poppins', sans-serif;
      background: lavender;
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
  border-top: none;
  border-right: none;
  border-left: none;
  text-align: center;
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
  margin-left: auto;
  margin-right: auto;
}.send:hover{
    background: darkblue;
    color: #008ECC;
    transition: 0.1s;
}
form{
  padding: 10px 10px;
  width: auto;
  
}
textarea{
    font-family: 'Poppins', sans-serif;
  height: 100px;
  resize: none;
  width: 300px;
}

                </style>
                <body>
                    <form method="post" action="">
                <div class="up">
  Description
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
  <label>Description</label><br>
  <textarea name="description" required></textarea><br><br>
  <center><input class="send" type="submit" name="update" value="Submit" /></center>
</div>
</form>
                </body>
    </html>